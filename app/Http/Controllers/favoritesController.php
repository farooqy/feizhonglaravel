<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companydata_model;
use App\models\normalUsersModel;
use App\models\favoritesModel;
use Illuminate\Support\Facades\Validator;

use App\customClass\customRequestValidator;
use App\customClass\Error;
class favoritesController extends Controller
{
    //

    protected $Error;
    protected $custom_validator;
    public function __construct()
    {
        $this->Error = new Error();
        $this->custom_validator = new CustomRequestValidator();
    }

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
                "errorMessage" => $list_errors,
                "isSuccess" => false,
                "successMessage" => null,
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
    			"errorMessage" => ["The id and token for host do not match"],
                "isSuccess" => false,
                "successMessage" => null,
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

    	return json_encode([
                "errorMessage" => null,
                "isSuccess" => true,
                "successMessage" => "success",
                "data" => $favorited_companies
            ]);

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
                "errorMessage" => $errors_list,
                "isSuccess" => false,
                "successMessage" => null,
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
                "errorMessage" => ["The id and token for host do not match"],
                "isSuccess" => false,
                "successMessage" => null,
    		]);
    	}

    	//is the company to be favorited also valid?
    	$valid_company = companydata_model::where('comp_id', $request->favorite_target_id)->get();
    	if($valid_company == null || $valid_company->count() <= 0)
    	{
    		return json_encode([
    			"errorMessage" => ["The company being favorited doesn't exist is suspended"],
                "isSuccess" => false,
                "successMessage" => null,
    		]);
    	}

    	return $this->doTryAndCatchQuery($request, "favoriteCompany");


    }

    public function removeFavorite(Request $request)
    {
        $rules = [
            "host_token" => "required|string|min:20",
            "host_type" => "required|string|in:normal,comp",
            "target_id" => "required|integer",
        ];
        
        $valid_request = Validator::make($request->all(), $rules, []);
        if($notValid= $this->custom_validator->isNotValidRequest($valid_request))
        {
            $this->Error->setError($notValid);
            return $this->Error->getError();
        }
        $is_favorite = favoritesModel::where([
            ["favorite_host_type", $request->host_type],
            ["favorite_host_token", $request->host_token],
            ["favorited_comp_id", $request->target_id]
        ])->get();
        if($is_favorite === null || $is_favorite->count() <= 0)
        {
            $this->Error->setError('You have not favorited this company before');
            return $this->Error->getError();
        }
        else
        {
            return $this->doTryAndCatchQuery($request, "removeFavorite");
        }
    }

    protected function doTryAndCatchQuery($request, $queryType = "favoriteCompany")
    {
        try
        {
            if($queryType === "removeFavorite")
            {
                $favorite = favoritesModel::where([
                    ["favorite_host_type", $request->host_type],
                    ["favorite_host_token", $request->host_token],
                    ["favorited_comp_id", $request->target_id]
                ])->get();
                $favorite[0]->delete();

                $this->Error->setSuccess(['success']);
                return $this->Error->getSuccess();
            }
            else
            {
                $favoritesModel = new favoritesModel;
                $favoritesModel->favorite_host_id = $request->host_id;
                $favoritesModel->favorite_host_token = $request->host_token;
                $favoritesModel->favorite_host_type = $request->host_type;
                $favoritesModel->favorited_comp_id = $request->favorite_target_id;

                $favoritesModel->save();

                return json_encode([
                    "data" => [],
                    "errorMessage" => null,
                    "isSuccess" => true,
                    "successMessage" => "success",
                ]);
            }
                
        }
        catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;

        }
        catch(Exception $exception)
        {
            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;
        }
    }
}
