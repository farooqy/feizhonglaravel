<?php

namespace App\Http\Controllers\products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\models\tokenStatusGeneratorModel;
use App\models\companydata_model;
use App\models\products\productFilesModel;
use App\models\products\productModel;

use Image;
class productController extends Controller
{
    //

    public function getProducts()
    {
    	$products = productModel::get();
    	$product_list = [];
    	foreach($products as $product)
    		array_push($product_list, ["product"=>$product, "product_files" => $product->Product_Files]);

        return json_encode([
            "data" => $products,
            "isSuccess" => true,
            "errorMessage" => null,
            "successMessage" => "success"
        ]);
    }
    public function addProductImage(Request $request)
    {
    	$rules = [
    		"host_type" => "required|in:comp,normal",
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"product_gen_token" => "required|string",
    		"product_file" => "required|max:5000000|mimes:jpeg, png, jpg, mp4, mpeg4"
    	];
    	$message = [
    		"required" => "The :attribute is required",
    		"integer" => "The :attribute must be integer",
    		"string" => "The :attribute must be string",
    		"in" => "The selected :attribute is not valid",
    		"mimes" => "The :attribute type is not valid, only, jpeg, png, jpg, mp4 and mpeg4 are allowed"
    	];

    	$is_valid = Validator::make($request->all(), $rules, $message);
    	if($is_valid->fails())
    	{
    		$errors = $is_valid->errors();
    		$list_errors =[];
    		foreach($errors->all() as $error)
    		{
    			array_push($list_errors, $error);
    		}
    		return json_encode(array(
    			"errorMessage" => $list_errors,
                "isSuccess" => false,
                "successMessage" => null,
    		));
    	}

    	$is_valid_token = $this->is_valid_generated_token($request->product_gen_token,
    		$request->host_id, $request->host_token, $request->host_type);
    	if(!$is_valid_token[0])
    	{
    		return $is_valid_token[1];
    	}

    	$is_valid_host = companydata_model::where([
    		['comp_id', '=', $request->host_id],['comp_token', '=', $request->host_token]
    	]);
    	if($is_valid_host == null || $is_valid_host->count() <= 0)
    	{
    		return json_encode(array(
                "errorMessage" => ["The host id and token do not match"],
                "isSuccess" => false,
                "successMessage" => null,
    		));
    	}
    	$path = public_path("uploads/comp/".$request->host_token."/products");
    	if(!is_dir($path))
    	{
    		if(!mkdir($path, 0765, true))
    		{
    			return json_encode(array(
                    "errorMessage" => ["Faild to create company product directory. Please contact support"],
                    "isSuccess" => false,
                    "successMessage" => null,
    			));
    		}
    	}
    	$fileurl = "/product_".hash('md5',time())."_".$request->product_file->getClientOriginalExtension();
    	$filename = $path.$fileurl;
    	try
    	{
    		Image::make($request->file('product_file'))->save($filename);
    		$productFilesModel = new productFilesModel;
    		$productFilesModel->file_uploaded_by_id = $request->host_id;
    		$productFilesModel->product_gen_token = $request->product_gen_token;
    		$productFilesModel->file_url = env('APP_URL')."uploads/comp/".$request->host_token.'/products'.$fileurl;
    		$productFilesModel->file_type = $request->product_file->getClientOriginalExtension();
    		$productFilesModel->save();

    		$product_file_id = $productFilesModel::where([
    			['file_uploaded_by_id', $request->host_id],
    			['product_gen_token', $request->product_gen_token],
    			['file_url', env('APP_URL')."uploads/comp/".$request->host_token.'/products'.$fileurl]
    		])->get()[0]->id;
    		return json_encode(array(
    			"data" => ["product_file_id" => $product_file_id],
                "errorMessage" => null,
                "isSuccess" => true,
                "successMessage" => "success",
    		));
    	}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                "errorMessage" => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;

    	}
    	catch(Exception $exception)
    	{
    		$error = json_encode(array(
                "errorMessage" => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;
    	}

    }

    public function newProduct(Request $request)
    {

    	$rules = [
    		"host_type" => "required|in:comp,normal",
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"product_gen_token" => "required|string",
    		"product_name" => "required|min:15",
    		"product_description" =>"required|string|min:50",
    		"product_measure_unit" => "required|string",
    		"product_price" => "required|integer",
    		"product_measure_currency" => "required|string"
    	];
    	$message = [
    		"required" => "The :attribute is required",
    		"integer" => "The :attribute must be integer",
    		"string" => "The :attribute must be string",
    		"in" => "The selected :attribute is not valid",
    		"mimes" => "The :attribute type is not valid, only, jpeg, png, jpg, mp4 and mpeg4 are allowed"
    	];

    	$is_valid = Validator::make($request->all(), $rules, $message);
    	if($is_valid->fails())
    	{
    		$errors = $is_valid->errors();
    		$list_errors =[];
    		foreach($errors->all() as $error)
    		{
    			array_push($list_errors, $error);
    		}
    		return json_encode(array(
                "errorMessage" => $list_errors,
                "isSuccess" => false,
                "successMessage" => null,
    		));
    	}

    	$is_valid_token = $this->is_valid_generated_token($request->product_gen_token,
    		$request->host_id, $request->host_token, $request->host_type);
    	if(!$is_valid_token[0])
    	{
    		return $is_valid_token[1];
    	}
    	$is_valid_host = companydata_model::where([
    		['comp_id', '=', $request->host_id],['comp_token', '=', $request->host_token]
    	]);
    	if($is_valid_host == null || $is_valid_host->count() <= 0)
    	{
    		return json_encode(array(
    			"errorMessage" => ["The host id and token do not match"],
                "isSuccess" => false,
                "successMessage" => null,
    		));
    	}

    	try
    	{
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
    			['generated_for_token', $request->host_token]
    		])->update(['generated_completed'=>true]);

    		return json_encode(array(
    			"data" => []
                "errorMessage" => null,
                "isSuccess" => true,
                "successMessage" => "success",
    		));
    	}

    	catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "error_status" => true
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;

    	}
    	catch(Exception $exception)
    	{
    		$error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;
    	}
    }

    public function is_valid_generated_token($generated_token, $host_id, $host_token, $host_type)
    {
        $valid_generated_token = tokenStatusGeneratorModel::where([
            ['generated_token', '=', $generated_token],
            ['generated_for_id', '=', $host_id],
            ['generated_for_token', '=', $host_token],
            ['generated_for_type', '=', $host_type]
        ])->get();
        
        if($valid_generated_token == null || $valid_generated_token->count() <= 0)
        {
            return [
                false,
                json_encode(array(
                "errorMessage" => ["The provided status token is not valid",],
                "isSuccess" => false,
                "successMessage" => null,
            ))
            ];
        }
        else if($valid_generated_token[0]->generated_completed)
        {
            return[
                false,
                json_encode(array(
                    "errorMessage" => ["The status token has expired. "],
                    "isSuccess" => false,
                    "successMessage" => null,
                ))
         ];
        }
        else
            return [true, null];
    }

}
