<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companies\companydataModel;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\registrationTrackerModel;

use App\models\normalUsersModel;
class generalController extends Controller
{
    //
	protected $Error;
	protected $custom_validator;
	public function __construct()
	{
    	$this->Error = new Error();
    	$this->custom_validator = new CustomRequestValidator();
	}
    public function listCompanies()
    {
    	// $query = companydataModel::with("registration_tracker", "registration_tracker.stage");
    	// $registrationData = new registrationTrackerModel;
    	// $list = companydataModel::with("registration_tracker", "registration_tracker.stage")->where("registration_tracker.stage", function($q)  {
    	// 	$query = $q::where("registrration_tracker.stage", "completed")->get();
    	// })->get();
    	// $list = companydataModel::with("registration_tracker", "registration_tracker.stage")->where('registration_tracker.stage', "completed")->skip(0)->take(10)->get();
        $list = companydataModel::whereHas("registrationStatus", function($q) {
            $q->where("stage","complete");
        })->get();
    	$list = companydataModel::get();
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
                if($company->address === null)
                {    
                    unset($list[$ckey]);
                    continue; 
                }
    			array_push($comp_list, ["data" => $company, "address" => $company->address, "type" => $company->type, "registrationStatus" => $company->registrationStatus]);
    		}	
    		$this->Error->setSuccess($list);
    		return $this->Error->getSuccess();
    	}

    }
    public function getSearchItem(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_type" => "required|in:normal,comp",
            "search_key" => "required|string|min:4",
            "search_type" => "required|in:normal,comp"
        ];
        $messages = [];
        $isNotValid = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValid)
            return $isNotValid;
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
    	$rules = ["image_url" => "required|url"];
    	$is_not_valid_request = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($is_not_valid_request)
    		return $is_not_valid_request;
    	$image = base64_encode(file_get_contents($request->image_url));
    	if($image)
    	{
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
        $this->Error->setSuccess(["version_number" => 6]);
        return $this->Error->getSuccess();
    }
}
