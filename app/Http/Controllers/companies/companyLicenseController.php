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
use Log, File, Hash;
class companyLicenseController extends Controller
{
    //

    protected $Error;
    protected $custom_validator;
    protected $FileUploader ;
    public function __construct()
    {
        $this->Error = new Error();
        $this->custom_validator = new CustomRequestValidator();
        $this->FileUploader = new FileUploader();
    }

    public function addCompanyLicense(Request $request)
    {
    	$rules = [
    		"comp_id" => "required|integer",
    		"comp_token" => "required|string",
    		"license" => "required|string",
    	];

    	$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($isNotValidRequest)
    		return $isNotValidRequest;

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
        $licenseModel->license_url = $license_url;

        if($licenseModel->save())
        {
        	$this->Error->setSuccess([]);
        	return $this->Error->getSuccess();
        }

    }

    public function getCompanyLicense(Request $request)
    {
    	$rules = [
    		"comp_id" => "required|integer",
    		"comp_token" => "required|string",
    	];
    	$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
    	if($isNotValidRequest)
    		return $isNotValidRequest;

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

    	$this->Error->setSuccess($hasValidLicense);
    	return $this->Error->getSuccess();
	}
}
