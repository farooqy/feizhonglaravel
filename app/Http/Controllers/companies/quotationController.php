<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mpdf\mpdf;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\products\productModel;
use App\models\normalUsersModel;
use App\models\companies\quotationModel;
use Illuminate\Support\Facades\Validator;
class quotationController extends Controller
{
    //
    protected $Error;
    protected $customValidator;
    public function __construct(){
    	$this->Error = new Error();
    	$this->customValidator = new CustomRequestValidator();
    }
    public function generateQuotation(Request $request)
    {
    	$rules = [
    		"company_id" => "required|integer",
    		"user_id" => "required|integer",
    		"product_id" => "required|integer",
    		"demanded_quantity" => "required|integer",
    		"demanded_price" => "required|integer",
    		"host_id" => "required|integer",
    		"host_type" => "required|in:normal,comp"
    	];

    	$validator = Validator::make($request->all(), $rules, []);
    	$isnot_valid = $this->customValidator->isNotValidRequest($validator);
    	if($isnot_valid)
    		return $isnot_valid;
    	$targetProduct = productModel::where([
    		['product_for_id', $request->company_id],
    		["id", $request->product_id],
    	])->get();
    	if($targetProduct === null || $targetProduct->count() <=0 )
    	{
    		$this->Error->setError(["The product you requested for quotation doesn't exist"]);
    		return $this->Error->getError();
    	}
    	$user_is_valid = normalUsersModel::where('user_id', $request->user_id)->get();
    	if($user_is_valid === null || $user_is_valid->count() <= 0)
    	{
    		$this->Error->setError(["The user account is not valid, Please login to generate Quotation"]);
    		return $this->Error->getError();
    	}
    	//gave quantity or using original quantity?
    	if($request->demanded_price <= 0)
    		$request->demanded_quantity = $targetProduct[0]->product_price;
    	try
    	{
    		$mpdf = new \Mpdf\Mpdf(['tempDir' => public_path('/uploads/temppdf/')]);
	    	$mpdf->WriteHTML($html = view('quotation.quotation', compact('targetProduct'))->render());
	    	$filename = 'quotation_'.time().'_.pdf';
	    	if(env('APP_ENV') === "production")
	    		$filepath = public_path('/feizhonglaravel/uploads/temppdf/').$filename;
	    	$filepath = public_path('/uploads/temppdf/').$filename;
	    	$mpdf->Output($filepath, \Mpdf\Output\Destination::FILE);
	    	$pdfile = env('APP_URL').'uploads/temppdf/'.$filename;
    		quotationModel::create([
    			"comp_id" => $request->company_id,
    			"user_id" => $request->user_id,
    			"product_id" => $request->product_id,
    			"quantity" => $request->demanded_quantity,
    			"demanded_price" => $request->demanded_price,
    			"who_initiated" => $request->host_type,
    			"quotation_file" => $pdfile
    		]);

	    	$this->Error->setSuccess(["pdf_file" => $pdfile]);

	    	return $this->Error->getSuccess();
    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{
            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();
    	}
    	catch(Exception $exception)
    	{
            $this->setError([$exception->errorInfo]);
            return $this->error;
    	}

	    	
    }
}
