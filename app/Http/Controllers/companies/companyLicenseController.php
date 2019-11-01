<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\models\companies\companydataModel;
use App\models\companies\companyLicenseModel;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\FileUploader;
use App\customClass\ApiKeyManager;
use Log, File, Hash;
class companyLicenseController extends Controller
{
    //

    protected $Error;
    protected $custom_validator;
    protected $FileUploader ;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Error = new Error();
        $this->custom_validator = new CustomRequestValidator();
        $this->FileUploader = new FileUploader();
        $this->ApiKey = new ApiKeyManager;
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
    public function addCompanyLicense(Request $request)
    {
    	$rules = [
    		"comp_id" => "required|integer",
    		"comp_token" => "required|string",
    		"license" => "required|string",
            "api_key" => "required|string"
    	];

    	$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($isNotValidRequest)
    		return $isNotValidRequest;

        $apiset = $this->apiHandleSet($request->comp_id, $request->comp_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$isValidCompany = companydataModel::where([
    		["comp_id", $request->comp_id],
    		["comp_token", $request->comp_token],
    	])->get();

    	if($isValidCompany === null || $isValidCompany->count() <=0 )
    	{
    		$this->Error->setError(["The company is not valid"]);
    		return $this->Error->getError();
    	}
    	$hasValidLicense = companyLicenseModel::where([
    		["comp_id", $request->comp_id],
    		["comp_token", $request->comp_token],
    	])->get();

    	if($hasValidLicense !== null && $hasValidLicense->count() > 0)
    	{
    		foreach ($hasValidLicense as $license) {

    			companyLicenseModel::where("id", $license->id)->update(["is_expired" => true]);
    		}
    	}

    	if(env("APP_ENV") === "local")
    		$this->FileUploader->setFilePath(public_path("uploads/comp/".$request->comp_token."/license/"));
    	else
    		$this->FileUploader->setFilePath(env("APP-_ROOT")."uploads/comp/".$request->comp_token."/license");

        $this->FileUploader->setFileDirectory("uploads/comp/".$request->comp_token."/license");//path with url
        $this->FileUploader->setFileName("license_".time()."_.");

        $license_url = $this->FileUploader->uplaodJsonFile($request->license);
        if($license_url === false)
        {

            $this->Error->setError($this->FileUploader->getError());
            return $this->Error->getError();
        }
        $licenseModel = new companyLicenseModel;

        $licenseModel->comp_id = $request->comp_id;
        $licenseModel->comp_token = $request->comp_token;
        $licenseModel->license_url = env('APP_URL').$license_url;

        if($licenseModel->save())
        {
            // $this->ApiKey->successFullRequest();
        	$this->Error->setSuccess([]);
        	return $this->Error->getSuccess();
        }

    }

    public function getCompanyLicense(Request $request)
    {
    	$rules = [
    		"comp_id" => "required|integer",
    		"comp_token" => "required|string",
            "api_key" => "required|string"
    	];
    	$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($isNotValidRequest)
    		return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->comp_id, $request->comp_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$isValidCompany = companydataModel::where([
    		["comp_id", $request->comp_id],
    		["comp_token", $request->comp_token],
    	])->get();

    	if($isValidCompany === null || $isValidCompany->count() <=0 )
    	{
    		$this->Error->setError(["The company is not valid"]);
    		return $this->Error->getError();
    	}
    	$hasValidLicense = companyLicenseModel::where([
    		["comp_id", $request->comp_id],
    		["comp_token", $request->comp_token],
    	])->latest()->get();
        // $this->ApiKey->successFullRequest();
    	$this->Error->setSuccess($hasValidLicense);
    	return $this->Error->getSuccess();
	}
}
