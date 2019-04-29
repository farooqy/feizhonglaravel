<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companies\companydataModel;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
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
    	return "new function";
    	$list = companydataModel::skip(0)->take(10)->get();
    	if($list === null || $list->count() <=0 )
    	{
    		$this->Error->setError(["Failed to get the list. Empty database could be the reason"]);
    		return $this->Error->getError();
    	}
    	else
    	{
    		$comp_list = [];
    		foreach($list as $company)
    			array_push($comp_list, ["data" => $company, "address" => $company->address, "type" => $company->type]);
    		$this->Error->setSuccess($list);
    		return $this->Error->getSuccess();
    	}

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
    	return "YOu are reaching me";
    	$rules = ["image_url" => "required|url"];
    	$is_not_valid_request = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($is_not_valid_request)
    		return $is_not_valid_request;
    	$image = base64_encode(file_get_contents($request->image_url));
    	if($image)
    	{
    		$this->Error->setSuccess(["image_base64" => "I am an image"]);
    		return $this->Error->getSuccess();
    	}
    	else
    	{
    		$this->Error->setError(['The image could not be converted to base64']);
    		return $this->Error->getError();
    	}
    }
}
