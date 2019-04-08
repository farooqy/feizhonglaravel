<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companydata_model;
use App\models\normalUsersModel;
use App\models\favoritesModel;
use Illuminate\Support\Facades\Validator;
class favoritesController extends Controller
{
    //

	public function getFavorites(Request $request)
	{
		$rules = [
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"host_type" => "required|in:normal,comp"
    	];

    	$messages =[
    		"required" => "The :attribute is required for this request",
    		"integer" => "The :attribute is invalid data type",
    	];

    	$request_is_valid = Validator::make($request->all(), $rules, $messages	);

    	if($request_is_valid->fails())
    	{
    		$errors = $request_is_valid->errors();
    		$errors_list = [];
    		foreach($errors->all() as $error)
    			array_push($errors_list, $error);
    		return json_encode(array(
    			"error_message" => $errors_list,
    			"error_status" => true
    		));
    	}

    	if($request->host_type === "normal")
    	{
    		$valid_host = normalUsersModel::where([
    			['user_id', $request->host_id],
    			['user_token', $request->host_token]
    		])->get();
    	}
    	else
    	{
    		$valid_host = companydata_model::where([
    			['comp_id', $request->host_id],
    			['comp_token', $request->host_token]
    		])->get();
    	}

    	if($valid_host == null || $valid_host->count() <= 0)
    	{
    		return json_encode([
    			"error_message" => ["The id and token for host do not match"],
    			"error_status" => true,
    		]);
    	}

    	$favorited_companies = favoritesModel::where([
    		['favorite_host_id', $request->host_id],
    		['favorite_host_token', $request->host_token],
    		['favorite_host_type', $request->host_type]
    	])->get();
    	$favorites_list = [];
    	foreach($favorited_companies as $favorite)
    		array_push($favorites_list, ["favorite" => $favorite, "favorite_comp_data" => $favorite->companydata]);

    	return $favorited_companies;

	}
    public function favoriteCompany(Request $request)
    {
    	$rules = [
    		"host_id" => "required|integer",
    		"host_token" => "required|string",
    		"host_type" => "required|in:normal,comp",
    		"favorite_target_id" => "required|integer"
    	];

    	$messages =[
    		"required" => "The :attribute is required for this request",
    		"integer" => "The :attribute is invalid data type",
    	];

    	$request_is_valid = Validator::make($request->all(), $rules, $messages	);

    	if($request_is_valid->fails())
    	{
    		$errors = $request_is_valid->errors();
    		$errors_list = [];
    		foreach($errors->all() as $error)
    			array_push($errors_list, $error);
    		return json_encode(array(
    			"error_message" => $errors_list,
    			"error_status" => true
    		));
    	}

    	if($request->host_type === "normal")
    	{
    		$valid_host = normalUsersModel::where([
    			['user_id', $request->host_id],
    			['user_token', $request->host_token]
    		])->get();
    	}
    	else
    	{
    		$valid_host = companydata_model::where([
    			['comp_id', $request->host_id],
    			['comp_token', $request->host_token]
    		])->get();
    	}

    	if($valid_host == null || $valid_host->count() <= 0)
    	{
    		return json_encode([
    			"error_message" => ["The id and token for host do not match"],
    			"error_status" => true,
    		]);
    	}

    	//is the company to be favorited also valid?
    	$valid_company = companydata_model::where('comp_id', $request->favorite_target_id)->get();
    	if($valid_company == null || $valid_company->count() <= 0)
    	{
    		return json_encode([
    			"error_message" => ["The company being favorited doesn't exist is suspended"],
    			"error_status" => true,
    		]);
    	}

    	try
    	{
    		$favoritesModel = new favoritesModel;
    		$favoritesModel->favorite_host_id = $request->host_id;
    		$favoritesModel->favorite_host_token = $request->host_token;
    		$favoritesModel->favorite_host_type = $request->host_type;
    		$favoritesModel->favorited_comp_id = $request->favorite_target_id;

    		$favoritesModel->save();

    		return json_encode([
    			"success" => true,
    			"data" => []
    		]);
    	}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'error_message' => array($exception->errorInfo),
                "error_status" => true
            ));
            return $error;

    	}
    	catch(Exception $exception)
    	{
    		$error = json_encode(array(
                'error_message' => array($exception->errorInfo),
                "error_status" => true
            ));
            return $error;
    	}


    }
}
