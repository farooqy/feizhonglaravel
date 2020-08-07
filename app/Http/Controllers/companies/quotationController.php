<?php

namespace App\Http\Controllers\companies;

use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\Http\Controllers\Controller;
use App\Mail\products\quotationGeneratedMail;
use App\models\companies\companydataModel;
use App\models\companies\quotationModel;
use App\models\normalUsersModel;
use App\models\products\productModel;
use App\models\users\userNeedsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use mpdf\mpdf;
use \App\models\companies\companyAddressModel;

class quotationController extends Controller
{
    //
    protected $Status;
    protected $customValidator;
    public function __construct()
    {
        $this->Status = new Error();
        $this->customValidator = new CustomRequestValidator();
    }
    public function generateQuotation(Request $request)
    {

        $rules = [
            "company_id" => "required|integer",
            "company_token" => "required|string",
            "user_id" => "required|integer",
            "user_token" => "required|string|max:330",
            "product_id" => "required|integer",
            "product_token" => "required|string",
            "demanded_quantity" => "required|integer|min:1",
            "demanded_price" => "required|numeric",
            "host_type" => "required|in:normal,comp",
            "product_type" => "required|string|in:product,need",
            "payment_method" => "required|string|in:Cheque,Wire Transfer,Wechat Pay,AliPay",
        ];
        $validator = Validator::make($request->all(), $rules, []);
        $isnot_valid = $this->customValidator->isNotValidRequest($validator);
        if ($isnot_valid) {
            return $isnot_valid;
        }

        if ($request->product_type === "product") {
            $targetProduct = productModel::where([
                ['product_for_id', $request->company_id],
                ["id", $request->product_id],
                ['product_gen_token', $request->product_token],
            ])->get();
        } else {
            $targetProduct = userNeedsModel::where([
                ['id' => $request->product_id],
                ['need_token' => $request->product_token],
                ['is_active_need', true],
            ])->get();
        }
        if ($targetProduct === null || $targetProduct->count() <= 0) {
            $this->Status->setError(["The product you requested for quotation doesn't exist or is no longer active"]);
            return $this->Status->getError();
        }
        $user_is_valid = normalUsersModel::where([
            ['user_id', $request->user_id],
            ['user_token', $request->user_token],
        ])->get();
        if ($user_is_valid === null || $user_is_valid->count() <= 0) {
            $this->Status->setError(["The user account is not valid, Please login to generate Quotation"]);
            return $this->Status->getError();
        }
        $user_address = $user_is_valid[0]->userLocation;
        if ($user_address === null) {
            if ($request->host_type === "normal") {
                $e = 'please provide your address, visit your profile and edit your address information before generating quotation';
            } else {
                $e = 'User did add their address information. Cannot generate quotation without the user address';
            }

            $this->Status->setError([$e]);
            return $this->Status->getError();
        }
        //gave quantity or using original quantity?
        if ($request->demanded_price <= 0) {
            $request->demanded_quantity = $targetProduct[0]->product_price;
        }

        $comp_data = companydataModel::where([
            ['comp_id', $request->company_id],
            ['comp_token', $request->company_token],
        ])->get();
        if ($comp_data === null || $comp_data->count() <= 0) {
            $this->Status->setError(["The company to send the quotation doesn't exist."]);
            return $this->Status->getError();
        }
        $is_suspended = $comp_data[0]->isSuspended($comp_data[0]->comp_id, $comp_data[0]->comp_token);
        $is_withheld = $comp_data[0]->isWithHeld($comp_data[0]->comp_id, $comp_data[0]->comp_token);
        if ($is_suspended) {
            $this->Status->setError(['Could not generated quotaion, the company is suspended from operations']);
            return $this->Status->getError();
        } else if ($is_withheld) {
            $this->Status->setError(['Could not generated quotaion, the company is with held from operations']);
            return $this->Status->getError();
        }
        $companyAddress = companyAddressModel::where("comp_id", $request->company_id)->get();
        $productDetails = [
            "company_name" => $comp_data[0]->comp_name,
            "create_date" => gmdate("M d, Y", time()),
            "due_date" => $request->product_type === "product" ? gmdate("M d, Y", (time() + 2073600)) :
                $targetProduct[0]->product_valid_until, //24 days
            "company_address" => $companyAddress[0]->comp_addr_one,
            "company_city" => $companyAddress[0]->comp_city,
            "customer_name" => $user_is_valid[0]->user_fname . " " . $user_is_valid[0]->user_sname,
            "customer_email" => $user_is_valid[0]->user_email,
            "product_name" => $targetProduct[0]->product_name,
            "product_price" => $request->product_type === "product" ? $targetProduct[0]->product_price : $request->demanded_price,
            "product_currency" => $request->product_type === "product" ? $targetProduct[0]->product_measure_currency : $request->currency,
            "product_customer_price" => $request->demanded_price,
            "quotation_id" => quotationModel::get()->count() + 1,
            "comp_logo" => $comp_data[0]->comp_logo === null ? 'http://drongo.tech/img/logo_side_writing.svg' : $comp_data[0]->comp_logo,
            "quantity" => $request->demanded_quantity,
            "description" => $request->description,
            "product_unit" => $targetProduct[0]->product_measure_unit,
            "payment_method" => $request->payment_method,
            "user_address" => $user_address->address . ", " . $user_address->city . ", " . $user_address->country,
        ];

        if ($request->host_type === "comp") {
            $path = 'uploads/comp/' . $comp_data[0]->comp_token . '/quotation/';
            if (env('APP_ENV') === "production") {
                $pdfpath = env('APP_ROOT') . $path;
            } else {
                $pdfpath = public_path($path);
            }
        } else {
            $path = 'uploads/user/' . $user_is_valid[0]->user_token . '/quotation/';
            if (env('APP_ENV') === "production") {
                $pdfpath = env('APP_ROOT') . $path;
            } else {
                $pdfpath = public_path($path);
            }
        }

        $mpdf = new \Mpdf\Mpdf(['tempDir' => $pdfpath]);
        $mpdf->WriteHTML(($html = view('quotation.quotation', compact('productDetails'))->render()));
        $filename = 'quotation_' . time() . '_.pdf';
        // if(env('APP_ENV') === "production")
        //     $filepath = public_path('/feizhonglaravel/uploads/temppdf/').$filename;
        // else
        //     $filepath = public_path('/uploads/temppdf/').$filename;
        $mpdf->Output($pdfpath . $filename, \Mpdf\Output\Destination::FILE);
        // $pdfile = env('APP_URL').$path.$filename;
        $pdfile = env('APP_URL') . '/' . $path . $filename;
        quotationModel::create([
            "comp_id" => $request->company_id,
            "comp_token" => $request->company_token,
            "user_id" => $request->user_id,
            "user_token" => $request->company_token,
            "product_id" => $request->product_id,
            "product_token" => $request->product_token,
            "quantity" => $request->demanded_quantity,
            "description" => $request->description,
            "demand_price" => $request->demanded_price,
            "who_initiated" => $request->host_type,
            "quotation_file" => $pdfile,
            "product_type" => $request->product_type,
        ]);
        $filepath = [
            "url" => $pdfpath . $filename,
            "name" => $filename,
        ];
        $comp_mailer = new quotationGeneratedMail($productDetails['company_name'], $filepath);
        $customer_mailer = new quotationGeneratedMail($productDetails['customer_name'], $filepath);

        Mail::to($comp_data[0]['comp_email'])->bcc(["noor@drongo.vip", "neud@drongo.vip"])->send($comp_mailer);
        Mail::to($productDetails['customer_email'])->bcc(["noor@drongo.vip", "neud@drongo.vip"])->send($customer_mailer);

        $this->Status->setSuccess(["pdf_file" => $pdfile]);

        return $this->Status->getSuccess();
    }


    /*********************************************/
    /*********************************************/
    // these are new apis that require api key V2
    /*********************************************/
    /*********************************************/
    /*********************************************/
    /*********************************************/
    public function generateQuotationV2(Request $request)
    {

        $rules = [
            "company_id" => "required|integer",
            "company_token" => "required|string",
            "product_id" => "required|integer",
            "product_token" => "required|string",
            "demanded_quantity" => "required|numeric|min:1",
            "demanded_price" => "required|numeric",
            "host_type" => "required|in:normal,comp",
            "product_type" => "required|string|in:product,need",
            "payment_method" => "required|string|in:Cheque,Wire Transfer,Wechat Pay,Ali Pay",
        ];
        $validator = Validator::make($request->all(), $rules, []);
        $isnot_valid = $this->customValidator->isNotValidRequest($validator);
        if ($isnot_valid) {
            return $isnot_valid;
        }

        if ($request->product_type === "product") {
            $targetProduct = productModel::where([
                ['product_for_id', $request->company_id],
                ["id", $request->product_id],
                ['product_gen_token', $request->product_token],
            ])->get();
        } else {
            $targetProduct = userNeedsModel::where([
                ['id' => $request->product_id],
                ['need_token' => $request->product_token],
                ['is_active_need', true],
            ])->get();
        }
        if ($targetProduct === null || $targetProduct->count() <= 0) {
            $this->Status->setError(["The product you requested for quotation doesn't exist or is no longer active"]);
            return $this->Status->getError();
        }
        $user_is_valid = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
        ])->get();
        if ($user_is_valid === null || $user_is_valid->count() <= 0) {
            $this->Status->setError(["The user account is not valid, Please login to generate Quotation"]);
            return $this->Status->getError();
        }
        $user_address = $user_is_valid[0]->userLocation;
        if ($user_address === null) {
            if ($request->host_type === "normal") {
                $e = 'please provide your address, visit your profile and edit your address information before generating quotation';
            } else {
                $e = 'User did add their address information. Cannot generate quotation without the user address';
            }

            $this->Status->setError([$e]);
            return $this->Status->getError();
        }
        //gave quantity or using original quantity?
        if ($request->demanded_price <= 0) {
            $request->demanded_quantity = $targetProduct[0]->product_price;
        }

        $comp_data = companydataModel::where([
            ['comp_id', $request->company_id],
            ['comp_token', $request->company_token],
        ])->get();
        if ($comp_data === null || $comp_data->count() <= 0) {
            $this->Status->setError(["The company to send the quotation doesn't exist."]);
            return $this->Status->getError();
        }
        $is_suspended = $comp_data[0]->isSuspended($comp_data[0]->comp_id, $comp_data[0]->comp_token);
        $is_withheld = $comp_data[0]->isWithHeld($comp_data[0]->comp_id, $comp_data[0]->comp_token);
        if ($is_suspended) {
            $this->Status->setError(['Could not generated quotaion, the company is suspended from operations']);
            return $this->Status->getError();
        } else if ($is_withheld) {
            $this->Status->setError(['Could not generated quotaion, the company is with held from operations']);
            return $this->Status->getError();
        }
        $companyAddress = companyAddressModel::where("comp_id", $request->company_id)->get();
        $productDetails = [
            "company_name" => $comp_data[0]->comp_name,
            "create_date" => gmdate("M d, Y", time()),
            "due_date" => $request->product_type === "product" ? gmdate("M d, Y", (time() + 2073600)) :
                $targetProduct[0]->product_valid_until, //24 days
            "company_address" => $companyAddress[0]->comp_addr_one,
            "company_city" => $companyAddress[0]->comp_city,
            "customer_name" => $user_is_valid[0]->user_fname . " " . $user_is_valid[0]->user_sname,
            "customer_email" => $user_is_valid[0]->user_email,
            "product_name" => $targetProduct[0]->product_name,
            "product_price" => $request->product_type === "product" ? $targetProduct[0]->product_price : $request->demanded_price,
            "product_currency" => $request->product_type === "product" ? $targetProduct[0]->product_measure_currency : $request->currency,
            "product_customer_price" => $request->demanded_price,
            "quotation_id" => quotationModel::get()->count() + 1,
            "comp_logo" => $comp_data[0]->comp_logo === null ? 'http://drongo.tech/img/logo_side_writing.svg' : $comp_data[0]->comp_logo,
            "quantity" => $request->demanded_quantity,
            "description" => $request->description,
            "product_unit" => $targetProduct[0]->product_measure_unit,
            "payment_method" => $request->payment_method,
            "user_address" => $user_address->address . ", " . $user_address->city . ", " . $user_address->country,
        ];

        if ($request->host_type === "comp") {
            $path = 'uploads/comp/' . $comp_data[0]->comp_token . '/quotation/';
            if (env('APP_ENV') === "production") {
                $pdfpath = env('APP_ROOT') . $path;
            } else {
                $pdfpath = public_path($path);
            }
        } else {
            $path = 'uploads/user/' . $user_is_valid[0]->user_token . '/quotation/';
            if (env('APP_ENV') === "production") {
                $pdfpath = env('APP_ROOT') . $path;
            } else {
                $pdfpath = public_path($path);
            }
        }

        $mpdf = new \Mpdf\Mpdf(['tempDir' => $pdfpath]);
        $mpdf->WriteHTML(($html = view('quotation.quotation', compact('productDetails'))->render()));
        $filename = 'quotation_' . time() . '_.pdf';
        // if(env('APP_ENV') === "production")
        //     $filepath = public_path('/feizhonglaravel/uploads/temppdf/').$filename;
        // else
        //     $filepath = public_path('/uploads/temppdf/').$filename;
        $mpdf->Output($pdfpath . $filename, \Mpdf\Output\Destination::FILE);
        // $pdfile = env('APP_URL').$path.$filename;
        $pdfile = env('APP_URL') . '/' . $path . $filename;
        quotationModel::create([
            "comp_id" => $request->company_id,
            "comp_token" => $request->company_token,
            "user_id" => $request->host_id,
            "user_token" => $request->company_token,
            "product_id" => $request->product_id,
            "product_token" => $request->product_token,
            "quantity" => $request->demanded_quantity,
            "description" => $request->description,
            "demand_price" => $request->demanded_price,
            "who_initiated" => $request->host_type,
            "quotation_file" => $pdfile,
            "product_type" => $request->product_type,
        ]);
        $filepath = [
            "url" => $pdfpath . $filename,
            "name" => $filename,
        ];
        $comp_mailer = new quotationGeneratedMail($productDetails['company_name'], $filepath);
        $customer_mailer = new quotationGeneratedMail($productDetails['customer_name'], $filepath);

        Mail::to($comp_data[0]['comp_email'])->bcc(["noor@drongo.vip", "neud@drongo.vip"])->send($comp_mailer);
        Mail::to($productDetails['customer_email'])->bcc(["noor@drongo.vip", "neud@drongo.vip"])->send($customer_mailer);

        $this->Status->setSuccess(["pdf_file" => $pdfile]);

        return $this->Status->getSuccess();
    }
}
