<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;

use App\models\companies\companydataModel;
use App\models\normalUsersModel;
use App\models\statisticsModel;
use App\models\products\productModel;
class statisticsController extends Controller
{
    //
    public function __construct()
    {
    	$this->Error = new Error();
    	$this->customValidator = new CustomRequestValidator();
    }
    public function profileVisit(Request $request)
    {
    	$rules = [
    		"comp_id" => "required|integer",
    		"comp_token" => "required|string",
    		"host_type" => "required|in:normal",
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    	];
    	$messages = [];

    	$isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
    	if($isNotValidRequest)
    		return $isNotValidRequest;
    	$isValidComp = companydataModel::where([
    		["comp_id", "=",$request->comp_id],
    		["comp_token","=", $request->comp_token]
    	]);
    	if($isValidComp === null || $isValidComp->count() === 0)
    	{
    		$this->Error->setError(["Is not valid company"]);
    		return $this->Error->getError();
    	}
    	$isValidHost = normalUsersModel::where([
    		["user_id", $request->host_id],
    		["user_token", $request->host_token]
    	]);
    	if($isValidHost === null || $isValidHost->count() === 0)
    	{
    		$this->Error->setError(["Is not valid host "]);
    		return $this->Error->getError();
    	}
    	$statModel = new statisticsModel;
    	$data = [
    		"comp_id" => $request->comp_id,
    		"comp_token" => $request->comp_token,
    		"host_token" => $request->host_token,
    		"host_type" => $request->host_type,
    		"host_id" => $request->host_id
    	];
		$statModel->comp_id = $request["comp_id"];
		$statModel->comp_token = $request["comp_token"];
		$statModel->host_type = $request["host_type"];
		$statModel->host_id = $request["host_id"];
		$statModel->host_token = $request["host_token"];
		

    	if($statModel->save())
    	{
    		$this->Error->setSuccess(["success"]);
    		return $this->Error->getSuccess();
    	}
    	else
    	{
    		$this->Error->setError([$isset]);
    		return $this->Error->getError();
    	}
    }
    public function productSet(Request $request)
    {
    	$rules = [
    		"product_id" => "required|integer",
    		"product_gen_token" => "required|string",
    		"host_type" => "required|in:normal",
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"visit_type" => "required|in:like,click",
    	];
    	$messages = [];

    	$isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
    	if($isNotValidRequest)
    		return $isNotValidRequest;
    	$isValidProduct = productModel::where([
    		["id", "=",$request->product_id],
    		["product_gen_token","=", $request->product_gen_token]
    	]);
    	if($isValidProduct === null || $isValidProduct->count() === 0)
    	{
    		$this->Error->setError(["Is not valid product"]);
    		return $this->Error->getError();
    	}
    	$isValidHost = normalUsersModel::where([
    		["user_id", $request->host_id],
    		["user_token", $request->host_token]
    	]);
    	if($isValidHost === null || $isValidHost->count() === 0)
    	{
    		$this->Error->setError(["Is not valid host "]);
    		return $this->Error->getError();
    	}
    	$statModel = new statisticsModel("product_stats");
    	$data = [
    		"product_id" => (integer)$request->product_id,
    		"product_gen_token" => $request->product_gen_token,
    		"host_token" => $request->host_token,
    		"host_type" => $request->host_type,
    		"host_id" => $request->host_id,
    		"visit_type" => $request->visit_type
    	];
    	$statModel->product_id = $request->product_id;
		$statModel->product_gen_token = $request->product_gen_token;
		$statModel->host_type = $request->host_type;
		$statModel->host_id = $request->host_id;
		$statModel->host_token = $request->host_token;
    	$statModel->visit_type = $request->visit_type;

    	if($statModel->save())
    	{
    		$this->Error->setSuccess(["success"]);
    		return $this->Error->getSuccess();
    	}
    	else
    	{
    		$this->Error->setError([$isset]);
    		return $this->Error->getError();
    	}
    }

}
