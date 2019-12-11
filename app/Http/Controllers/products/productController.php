<?php

namespace App\Http\Controllers\products;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\Http\Controllers\Controller;
use App\models\companydata_model;
use App\models\products\productFilesModel;
use App\models\products\productModel;
use App\models\tokenStatusGeneratorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    //

    protected $Error;
    protected $customValidator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager;
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();
        $this->FileUploader = new FileUploader();
    }
    public function getListOfCompanyProducts(Request $request)
    {
        $rules = [
            "host_id" => "required|integer|min:0",
            "host_token" => "required|string|min:25|max:350",
            "host_type" => "required|string|in:comp,normal,guest",
            "api_key" => "required|string",
            "comp_id" => "required|integer|min:0",
            "comp_token" => "required|string|min:25|max:350",

        ];

        $is_valid_request = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($is_valid_request);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        //TO DO TRACK USER REQUEST WITH API KEY

        $products = productModel::where([
            ["product_for_id", $request->comp_id],
        ])->get();
        foreach ($products as $p) {
            $p->companydata;
            $p->Product_Files;
        }
        $this->Error->setSuccess($products);
        return $this->Error->getSuccess();
    }
    public function getProducts()
    {
        $products = productModel::get();
        $product_list = [];
        foreach ($products as $product) {
            array_push($product_list, ["product" => $product, "product_files" => $product->Product_Files]);
        }

        $this->Error->setSuccess($products);
        return $this->Error->getSuccess();
    }
    public function addProductImage(Request $request)
    {
        $rules = [
            "host_type" => "required|in:comp,normal",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "product_gen_token" => "required|string",
            "product_file" => "required|string",
        ];
        $message = [
            "required" => "The :attribute is required",
            "integer" => "The :attribute must be integer",
            "string" => "The :attribute must be string",
            "in" => "The selected :attribute is not valid",
        ];

        $is_valid = Validator::make($request->all(), $rules, $message);
        if ($is_valid->fails()) {
            $errors = $is_valid->errors();
            $list_errors = [];
            foreach ($errors->all() as $error) {
                array_push($list_errors, $error);
            }
            $this->Error->setError($list_errors);
            return $this->Error->getError();
        }

        $is_valid_token = $this->is_valid_generated_token($request->product_gen_token,
            $request->host_id, $request->host_token, $request->host_type);
        if (!$is_valid_token[0]) {
            return $is_valid_token[1];
        }

        $is_valid_host = companydata_model::where([
            ['comp_id', '=', $request->host_id], ['comp_token', '=', $request->host_token],
        ]);
        if ($is_valid_host == null || $is_valid_host->count() <= 0) {
            $this->Error->setError(["The host id and token do not match"]);
            return $this->Errord->getError();
        }

        $dir = "uploads/comp/" . $request->host_token . "/products/";
        if (env("APP_ENV") === "local") {
            $publicpath = public_path($dir);
        } else {
            $publicpath = env("APP_ROOT") . $dir;
        }

        $filename = "product_" . hash("md5", time() . rand(0, 999999)) . "_pic.";

        $this->FileUploader->setFilePath($publicpath);
        $this->FileUploader->setFileDirectory($dir); //path with url
        $this->FileUploader->setFileName($filename);

        $fileUrl = $this->FileUploader->uplaodJsonFile($request->product_file);
        if (!$fileUrl) {
            return $this->FileUploader->getError();
        }

        $productFilesModel = new productFilesModel;
        $productFilesModel->file_uploaded_by_id = $request->host_id;
        $productFilesModel->product_gen_token = $request->product_gen_token;
        $productFilesModel->file_url = $fileUrl;
        $productFilesModel->file_type = $this->FileUploader->getUploadedExtension();
        $productFilesModel->save();

        $product_file_id = productFilesModel::where([
            ['file_uploaded_by_id', $request->host_id],
            ['product_gen_token', $request->product_gen_token],
            ['file_url', $fileUrl],
        ])->get()[0]->id;
        $this->Error->setSuccess([
            "product_file_id" => $product_file_id,
            "product_file_src" => $fileUrl,
        ]);
        return $this->Error->getSuccess();

    }

    public function newProduct(Request $request)
    {

        $rules = [
            "host_type" => "required|in:comp,normal",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "product_gen_token" => "required|string",
            "product_name" => "required|min:5",
            "product_description" => "required|string|min:50, max:999",
            "product_measure_unit" => "required|string",
            "product_price" => "required|numeric",
            "product_measure_currency" => "required|string",
        ];
        $message = [
            "required" => "The :attribute is required",
            "integer" => "The :attribute must be integer",
            "string" => "The :attribute must be string",
            "in" => "The selected :attribute is not valid",
            "mimes" => "The :attribute type is not valid, only, jpeg, png, jpg, mp4 and mpeg4 are allowed",
        ];

        $is_valid = Validator::make($request->all(), $rules, $message);
        if ($is_valid->fails()) {
            $errors = $is_valid->errors();
            $list_errors = [];
            foreach ($errors->all() as $error) {
                array_push($list_errors, $error);
            }
            $this->Error->setError($list_errors);
            return $this->Error->getError();
        }

        $is_valid_token = $this->is_valid_generated_token($request->product_gen_token,
            $request->host_id, $request->host_token, $request->host_type);
        if (!$is_valid_token[0]) {
            return $is_valid_token[1];
        }
        $is_valid_host = companydata_model::where([
            ['comp_id', '=', $request->host_id], ['comp_token', '=', $request->host_token],
        ]);
        if ($is_valid_host == null || $is_valid_host->count() <= 0) {
            $this->Error->setError(["The host id and token do not match"]);
            return $this->Error->getError();
        }

        $productModel = new productModel;
        $productModel->product_gen_token = $request->product_gen_token;
        $productModel->product_for_id = $request->host_id;
        $productModel->product_name = $request->product_name;
        $productModel->product_description = $request->product_description;
        $productModel->product_measure_unit = $request->product_measure_unit;
        $productModel->product_price = $request->product_price;
        $productModel->product_measure_currency = $request->product_measure_currency;

        $productModel->save();

        tokenStatusGeneratorModel::where([
            ['generated_token', $request->product_gen_token],
            ['generated_for_id', $request->host_id],
            ['generated_for_token', $request->host_token],
        ])->update(['generated_completed' => true]);

        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();

    }

    public function is_valid_generated_token($generated_token, $host_id, $host_token, $host_type)
    {
        $valid_generated_token = tokenStatusGeneratorModel::where([
            ['generated_token', '=', $generated_token],
            ['generated_for_id', '=', $host_id],
            ['generated_for_token', '=', $host_token],
            ['generated_for_type', '=', $host_type],
        ])->get();

        if ($valid_generated_token == null || $valid_generated_token->count() <= 0) {
            $this->Error->setError(["The provided status token is not valid"]);
            return [false, $this->Error->getError()];
        } else if ($valid_generated_token[0]->generated_completed) {

            $this->Error->setError(["The status token has expired. "]);
            return $this->Error->getError();
        } else {
            return [true, null];
        }

    }

}
