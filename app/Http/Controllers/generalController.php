<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companies\companydataModel;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\ApiKeyManager;
use App\models\registrationTrackerModel;

use App\models\normalUsersModel;
class generalController extends Controller
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
    public function getCompanyData(Request $request)
    {
        $rules = [
            "comp_id" => "required|integer",
            "comp_token" => "required|string",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($validity);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $isValidCompany = companydataModel::where([
            ["comp_id", $request->comp_id],
            ["comp_token", $request->comp_token],
        ])->get();
        if($isValidCompany === null || $isValidCompany->count() !== 1)
        {
            $this->Error->setError(["The company you are viewing is doesn't exit or has been suspended"]);
            return $this->Error->getError();
        }
        $isValidCompany[0]->address;
        $isValidCompany[0]->type;
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess($isValidCompany);
        return $this->Error->getSuccess();
    }
    public function listCompanies(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string",
        ];
        $valid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($valid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$list = companydataModel::latest()->get();
    	if($list === null || $list->count() <=0 )
    	{
    		$this->Error->setError(["Failed to get the list. Empty database could be the reason"]);
    		return $this->Error->getError();
    	}
    	else
    	{
    		$comp_list = [];
    		foreach($list as $ckey => $company)
    		{
                if($company->address === null || $company->type === null )
                {    
                    unset($list[$ckey]);
                    
                    continue; 
                }
                array_push($comp_list, $company);
                if($company->license === null)
                {
                    $list[$ckey]->hasLicense=false;
                    unset($company->license);
                }    
                else
                    $list[$ckey]->hasLicense=true;
                $company->address = null;
                $list[$ckey]->comp_type = $company->type->comp_type;
                $company->type = null;
                unset($company->address);
                unset($company->type);

    		}
            // $list = array_values(array_filter($list->toArray()));
            // $this->ApiKey->successFullRequest();
    		$this->Error->setSuccess($comp_list);
    		return $this->Error->getSuccess();
    	}
    }
    public function getSearchItem(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp|guest",
            "search_key" => "required|string|min:4",
            "search_type" => "required|in:normal,comp",
            "api_key"
        ];
        $messages = [];
        $isNotValid = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValid)
            return $isNotValid;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $compModel = new companydataModel;
        $normModel = new normalUsersModel;
        if($request->host_type === "comp")
            $isValidHost = $compModel->isCompany($request->host_id);
        else
            $isValidHost = $normModel->isNormal($request->host_id);
        if(!$isValidHost)
        {
            $this->Error->setError(["Is not valid host"]);
            return $this->Error->getError();

        }
        if($request->search_type === "comp")
            $items = $compModel->searchCompanies($request->search_key);
        else
            $items = $normModel->searchUsers($request->search_key);
        $this->Error->setSuccess($items);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();

    }
    public function notAllowedMethod()
    {
    	$this->Error->setError(['The method is not allowed']);
    	return $this->Error->getError();
    }
    public function showQuote()
    {
    	return view('quotation.quotation');
    }
    public function getBase64Image(Request $request)
    {
    	$rules = [
            "image_url" => "required|url",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string"
        ];
    	$is_not_valid_request = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($is_not_valid_request)
    		return $is_not_valid_request;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$image = base64_encode(file_get_contents($request->image_url));
    	if($image)
    	{
            // $this->ApiKey->successFullRequest();
    		$this->Error->setSuccess(["image_base64" => $image]);
    		return $this->Error->getSuccess();
    	}
    	else
    	{
    		$this->Error->setError(['The image could not be converted to base64']);
    		return $this->Error->getError();
    	}
    }

    public function getVersion()
    {
        $this->Error->setSuccess(["version_number" => 7]);
        return $this->Error->getSuccess();
    }
}
