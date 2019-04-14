<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\companydata_model;
use App\models\companies\featuredCompaniesModel;
use Illuminate\Support\Facades\Validator;

use Image;
class featuredCompaniesController extends Controller
{
    //
    public function requestToBeFeatured(Request $request)
    {
    	$rules = [
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"featured_file" => "required",
    	];

    	$messages =[
    		"required" => "The :attribute is required for this request",
    		"integer" => "The :attribute is invalid data type",
    		"max" => "The :attribute size exceeds the allowed maximum size",
    	];

    	$request_is_valid = Validator::make($request->all(), $rules, $messages	);

    	if($request_is_valid->fails())
    	{
    		$errors = $request_is_valid->errors();
    		$errors_list = [];
    		foreach($errors->all() as $error)
    			array_push($errors_list, $error);
    		return json_encode(array(
    			"errorMessage" => $errors_list,
    			"error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
    		));
    	}

    	$is_already_featured = featuredCompaniesModel::where('featured_for_id', $request->host_id)->get();
    	if($is_already_featured !== null && $is_already_featured->count() > 0)
    	{
    		return json_encode(array(
    			"errorMessage" => "The company is already featured, cannot be featured more than once",
    			"error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
    		));
    	}

    	$is_valid_company = companydata_model::where([
    		['comp_id', $request->host_id],
    		['comp_token', $request->host_token]
    	])->get();

    	if($is_valid_company == null || $is_valid_company->count() <= 0)
    	{
    		return json_encode(array(
    			"errorMessage" => "The company id and token do not match",
    			"error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
    		));
    	}

        $filepath = "uploads/comp/".$request->host_token.'/feature_files';
    	if(!is_dir($filepath))
    	{
    		if(!mkdir($filepath, 0765, true))
    		{
    			return json_encode([
    				"errorMessage" => ["Failed to create featured file directory for the company, Contact support"],
    				"error_status" => true,
                    "isSuccess" => false,
                    "successMessage" => null
    			]);
    		}
    	}
        
        $allowed_file_types = ["image/jpeg", "image/png", "image/jpg", "video/mp4"];
        $file_extension = ["jpeg", "png", "jpg", "mp4"];
        $file_type =  substr($request->featured_file,(strpos($request->featured_file, "data:")+5),
         (strpos($request->featured_file, ";")-5));
        if(($type_key = array_search($file_type, $allowed_file_types)) === false)
        {
            return json_encode([
                'errorMessage' => "The file type provided is not valid",
                'isSuccess' => false, 
                'successMessage' =>null
            ]);
        }
        else
            $extenstion = $file_extension[$type_key];
        $fileUrl = 'uploads/comp/'.$request->host_token.'/feature_files/feature_image_decoded_'.hash('md5', time()).'.'.$extenstion;
        $filepath = public_path($fileUrl);
        $request->featured_file = str_replace("data:".$file_type.";base64", '', $request->featured_file);
        $request->featured_file = base64_decode($request->featured_file);
    	try
    	{
    		// Image::make($request->featured_file)->save($file_path."/".$file_name);
            \File::put($filepath, $request->featured_file);
    		$featuredCompaniesModel = new featuredCompaniesModel;
    		$featuredCompaniesModel->featured_for_id = $request->host_id;
    		$featuredCompaniesModel->feature_file_url = env('APP_URL').$fileUrl;
    		$featuredCompaniesModel->feature_file_type = $extenstion;

    		$featuredCompaniesModel->save();

    		return json_encode([
    			"success" => true,
    			"data" => [],
                "errorMessage" => [],
                "isSuccess" => true,
                "successMessage" => "success"
    		]);
    	}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
            ));
            return $error;

    	}
    	catch(Exception $exception)
    	{
    		$error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
            ));
            return $error;
    	}

    }

    public function getFeaturedCompanies(Request $request)
    {
    	$featured_companies = featuredCompaniesModel::where([
    		['feature_approved', true],
    		['feature_status', 'approved']
    	])->get();

    	return $featured_companies;
    }

    public function approveFeatureCompany(Request $request)
    {
    	$rules = [
    		"company_id" => "required|integer",
    		"admin_token" => "required|in:noor@atoc01,neud@atoc01",
    	];
    	$messages = [
    	];

    	$is_valid = Validator::make($request->all(), $rules, $messages);
    	if($is_valid->fails())
    	{
    		$errors = $is_valid->errors()->all();
    		$errors_list = [];
    		foreach($errors as $error)
    		{
    			array_push($errors_list, $error);
    		}

    		return json_encode([
    			"errorMessage" => $errors_list,
    			"error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
    		]);
    	}
    	$has_request = featuredCompaniesModel::where([
    		['featured_for_id', $request->company_id],
    		['feature_approved', false],
    		['feature_status', 'requested']
    	])->get();
    	if($has_request == null || $has_request->count() <= 0)
    	{
    		return json_encode([
    			"errorMessage" => ["The company doesn't have any feature request waiting for approval"],
    			"error_status" => true,
                "isSuccess" => false,
                "successMessage" => null
    		]);
    	}
    	featuredCompaniesModel::where([
    		['featured_for_id', $request->company_id]
    	])->update(['feature_approved' => true, 'feature_status' => 'approved']);

    	return json_encode([
    		"success" => true,
    		"data" => [],
            "isSuccess" => true,
            "successMessage" => "success"
    	]);
    }
}
