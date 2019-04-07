<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tokenStatusGeneratorModel;
use App\models\normalUsersModel;
use App\models\companydata_model;

use Illuminate\Support\Facades\Validator;
class Status_TokenGeneratorModelController extends Controller
{
    //
    public function generate_Token(Request $request)
    {
    	// return $request->all();
    	$rules = [
    		"host_token" => "required|string",
    		"host_id" => "required|integer",
    		"host_type" => "required|in:normal,comp",
    	];
    	$message = [
    		"required" => "The :attribute is required",
    		"string" => "The :attribute accepts only string value",
    		"integer" => "The :attribute must be integer",
    		"in" => "The selected value for :attribute is not valid"
    	];
    	$isValid = Validator::make($request->all(), $rules, $message);
    	if($isValid->fails())
    		return $isValid->errors()->toJson();
    	//ensure there is no unused token
    	$existing_token = tokenStatusGeneratorModel::where([
    		['generated_for_token', '=', $request->host_token],
    		['generated_completed', '=', 0],
    		['generated_for_type', '=', $request->host_type],
    		['generated_for_id', '=', $request->host_id],
    	])->get();
    	if($existing_token->count() >= 1)
    		return json_encode(array("success" => true, "data" => ["generated_token" => $existing_token[0]->generated_token]));
    	
    	if($request->host_type === "normal")
    		$isValidHost = normalUsersModel::where([
    			['user_id', '=' ,$request->host_id],
    			['user_token', '=', $request->host_token]])->get();
    	else
    		$isValidHost = companydata_model::where([
    			['comp_id', '=' ,$request->host_id],
    			['comp_token', '=', $request->host_token]])->get();
    	if($isValidHost === null || $isValidHost->count() <= 0)
    		return json_encode(array(
    			"error_message" => [
    				"The provided host id and host token do not match",
    			],
    			"error_status" => true
    			));

    	$lastToken = tokenStatusGeneratorModel::get()->last();
    	if($lastToken === null)
    		$tokenId = 0;
    	else
    		$tokenId = $lastToken->id;
    	$generated_Token = $tokenId.'_'.hash('md5', time());

    	$generatorModel = new tokenStatusGeneratorModel;
    	$generatorModel->generated_token = $generated_Token;
    	$generatorModel->generated_for_id = $request->host_id;
    	$generatorModel->generated_for_token = $request->host_token;	
    	$generatorModel->generated_for_type = $request->host_type;

    	$generatorModel->save();

    	return json_encode(array("success" => true, "data" => ["generated_token" => $generated_Token]));
    }
}
