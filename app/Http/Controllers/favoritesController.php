<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companies\companydataModel;
use App\models\normalUsersModel;
use App\models\favoritesModel;
use Illuminate\Support\Facades\Validator;

use App\customClass\CustomRequestValidator;
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

    public function isMyFavorite(Request $request)
    {
        $rules =[
            "host_id" => "required|integer",
            "host_type" => "required|in:normal,comp",
            "comp_id" => "required|integer"
        ];
        $messages = [];
        $isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make(
            $request->all(), $rules, $messages
        ));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $UserModel = new normalUsersModel;
        $CompModel = new companydataModel;
        $isValidHost = $UserModel->isNormal($request->host_id);
        if(!$isValidHost)
        {
            $this->Error->setError(["The host id is not valid"]);
            return $this->Error->getError();
        }
        else if(!$CompModel->isCompany($request->comp_id))
        {
            $this->Error->setError(["The company id is not valid"]);
            return $this->Error->getError();
        }
        $favoriteComp = favoritesModel::where([
            ["favorite_host_id", $request->host_id],
            ["favorited_comp_id", $request->comp_id]
        ])->get();

        if($favoriteComp !== null && $favoriteComp->count() > 0)
        {
            $this->Error->setSuccess(["isFavorite" => true, "comp" => $favoriteComp]);
            return $this->Error->getSuccess();
        }
        else
        {
            $this->Error->setSuccess(["isFavorite" => false]);
            return $this->Error->getSuccess();
        }

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
    		$valid_host = companydataModel::where([
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
    		$valid_host = companydataModel::where([
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
    	$valid_company = companydataModel::where('comp_id', $request->favorite_target_id)->get();
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
                foreach ($favorite as $fav) {
                    # code...
                    $fav->delete();
                }
                // $favorite[0]->delete();

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
