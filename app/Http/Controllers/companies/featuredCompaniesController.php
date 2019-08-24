<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\companydata_model;
use App\models\companies\featuredCompaniesModel;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\ApiKeyManager;

use Image;
class featuredCompaniesController extends Controller
{
    //
    protected $Error;
    protected $custom_validator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Error = new Error();
        $this->custom_validator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager();
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();

    }
    public function apiHandleSet($user_id, $user_token, $api_key)
    {
        return true;
        $userOwnsKey =$this->ApiKey->HasApiKey($user_id, $user_token);
        if(!$userOwnsKey)
        {
            $this->Error->setError(["The access key is not valid"], -1);
            return $this->Error->getError();
        }
        $apiKeyDetails = $this->ApiKey->getKeyDetails($user_id, $user_token);
        if($apiKeyDetails[0]->api_key !== $api_key)
        {
            $this->Error->setError(['Invalid api key']);
            return $this->Error->getError();
        }
        $this->ApiKey->setRequest($apiKeyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
        return true;
    }
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
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($request_is_valid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$is_already_featured = featuredCompaniesModel::where('featured_for_id', $request->host_id)->get();
    	if($is_already_featured !== null && $is_already_featured->count() > 0)
    	{
            $this->Error->setError(["The company is already featured, cannot be featured more than once"]);
            return $this->Error->getError();
    	}

    	$is_valid_company = companydata_model::where([
    		['comp_id', $request->host_id],
    		['comp_token', $request->host_token]
    	])->get();

    	if($is_valid_company == null || $is_valid_company->count() <= 0)
    	{
            $this->Error->setError(["The company id and token do not match"]);
            return $this->Error->getError();
    	}

        $filepath = "uploads/comp/".$request->host_token.'/feature_files';
    	if(!is_dir(public_path($filepath)))
    	{
    		if(!mkdir(public_path($filepath), 0765, true))
    		{
                $this->Error->setError(["Failed to create featured file directory for the company, Contact support"]);
                return $this->Error->getError();
    		}
    	}
        
        $allowed_file_types = ["image/jpeg", "image/png", "image/jpg", "video/mp4"];
        $file_extension = ["jpeg", "png", "jpg", "mp4"];
        $file_type =  substr($request->featured_file,(strpos($request->featured_file, "data:")+5),
         (strpos($request->featured_file, ";")-5));
        if(($type_key = array_search($file_type, $allowed_file_types)) === false)
        {
            $this->Error->setError(["The file type provided is not valid"]);
            return $this->Error->getError();
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
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess([]);
            return $this->Error->getSuccess();
    	}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();

    	}
    	catch(Exception $exception)
    	{
            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();
    	}

    }

    public function getFeaturedCompanies(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($validity);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$featured_companies = featuredCompaniesModel::where([
    		['feature_approved', true],
    		['feature_status', 'approved']
    	])->get();

        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess($featured_companies);
        return $this->Error->getSuccess();
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
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid);
        if($isNotValidRequest)
            return $isNotValidRequest;
    	$has_request = featuredCompaniesModel::where([
    		['featured_for_id', $request->company_id],
    		['feature_approved', false],
    		['feature_status', 'requested']
    	])->get();
    	if($has_request == null || $has_request->count() <= 0)
    	{  

            $this->Error->setError(["The company doesn't have any feature request waiting for approval"]);
            return $this->Error->getError();
    	}
    	featuredCompaniesModel::where([
    		['featured_for_id', $request->company_id]
    	])->update(['feature_approved' => true, 'feature_status' => 'approved']);

        $this->Error->setSuccess($featured_companies);
        return $this->Error->getSuccess();
    }
}
