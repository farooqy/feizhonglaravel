<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;

use App\models\companies\companydataModel;
use App\models\normalUsersModel;
use App\models\statisticsModel;
use App\models\products\productModel;
use App\models\apiKeyModel;
use App\models\browserDetailsModel;

use App\customClass\ApiKeyManager;
class statisticsController extends Controller
{
    //
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
    	$this->Error = new Error();
    	$this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager();
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
    public function profileVisit(Request $request)
    {
        $rules = [
            "comp_id" => "required|integer",
            "comp_token" => "required|string",
            "host_type" => "required|in:normal",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "api_key" => "required|string",
        ];
        $messages = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
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
        $existVisit = statisticsModel::where([
            ["comp_id", $request->comp_id],
            ["comp_token", $request->comp_token],
            ["host_token", $request->host_token],
            ["host_type", $request->host_type],
            ["host_id", $request->host_id]
        ])->exists();
        if($existVisit)
        {
            statisticsModel::where([
                ["comp_id", $request->comp_id],
                ["comp_token", $request->comp_token],
                ["host_token", $request->host_token],
                ["host_type", $request->host_type],
                ["host_id", $request->host_id]
            ])->increment("visit_count");
        }
        else
        {
            $statModel->comp_id = $request["comp_id"];
            $statModel->comp_token = $request["comp_token"];
            $statModel->host_type = $request["host_type"];
            $statModel->host_id = $request["host_id"];
            $statModel->host_token = $request["host_token"];
            $statModel->visit_count = 1;


            if(!$statModel->save())
            {
                $this->Error->setError([$isset]);
                return $this->Error->getError();
            }
        }


        $this->Error->setSuccess(["success"]);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();

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
            "api_key" => "required|string"
    	];
    	$messages = [];

    	$isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
    	if($isNotValidRequest)
    		return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
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
        $visitExist = statisticsModel::where([
            ["product_id", (integer)$request->product_id],
            ["product_gen_token", $request->product_gen_token],
            ["host_token", $request->host_token],
            ["host_type", $request->host_type],
            ["host_id", $request->host_id],
            ["visit_type", $request->visit_type]
        ])->exists();
        if($visitExist && $request->visit_type === "click")
        {
            statisticsModel::where([
                ["product_id", (integer)$request->product_id],
                ["product_gen_token", $request->product_gen_token],
                ["host_token", $request->host_token],
                ["host_type", $request->host_type],
                ["host_id", $request->host_id],
                ["visit_type", $request->visit_type]
            ])->increment("visit_count");
        }
        else
        {
            $statModel->product_id = $request->product_id;
            $statModel->product_gen_token = $request->product_gen_token;
            $statModel->host_type = $request->host_type;
            $statModel->host_id = $request->host_id;
            $statModel->host_token = $request->host_token;
            $statModel->visit_type = $request->visit_type;

            if(!$statModel->save())
            {
                $this->Error->setError([$isset]);
                return $this->Error->getError();
            }
        }
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess(["success"]);
        return $this->Error->getSuccess();

    }

    public function visitedProfiles(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string"
        ];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $profiles = statisticsModel::where([
            ["host_token", $request->host_token],
            ["host_type", $request->host_type],
            ["host_id", $request->host_id]
        ])->get();

        $this->Error->setSuccess($profiles);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();
    }

    public function getApiKeyBrowser(Request $request)
    {
        $this->ApiKey->setPlatform("browser");
        $rules = [
            "api_host_id" => "required|integer",
            "api_host_token" => "required|string",
            "api_host_type" => "required|string|in:normal,comp,guest",
            "os_name" => "required|string",
            "os_version" => "required|integer",
            "browser_name" => "required|string",
            "browser_version" => "required|string",
            "navigator_userAgent" => "required|string",
            "navigator_appVersion" => "required|string",
            "navigator_platform" => "required|string",
            "navigator_vendor" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($validity);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $this->ApiKey->setBrowserData($request);
        if($this->ApiKey->HasApiKey($request->api_host_id, $request->api_host_token))
        {
            $keyDetails = $this->ApiKey->getKeyDetails($request->api_host_id, $request->api_host_token);
            $this->ApiKey->setRequest($keyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
            $this->Error->setSuccess(["api_key" => $keyDetails[0]->api_key ]);
            // $this->ApiKey->successFullRequest();
            return $this->Error->getSuccess();
        }
        $apikey = $this->ApiKey->Generate_New_Api();
        if(!$apikey)
            return $this->ApiKey->Get_Message();
        $this->Error->setSuccess(["api_key" => $apikey]);

        $keyid = browserDetailsModel::where([
            ["api_key", $apikey],
            ["api_host_id", $request->api_host_id]
        ])->get()[0]->api_id;
        $this->ApiKey->setRequest($keyid, $this->ip_address, $this->requestUrl);
        $this->Error->setSuccess(["api_key" => $apikey ]);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();

    }
    public function getApiKey(Request $request)
    {
        $rules = [
            "api_host_id" => "required|integer",
            "api_host_token" => "required|string",
            "api_host_type" => "required|string|in:normal,comp,guest",
            "phone_serial_number" => "required|string",
            "phone_model_number" => "required|string",
            "phone_id_number" => "required|string",
            "phone_manufacture" => "required|string",
            "phone_brand" => "required|string",
            "phone_type" => "required|string",
            "phone_user" => "required|string",
            "phone_base" => "required|string",
            "phone_sdk_version" => "required|string",
            "phone_host" => "required|string",
            "phone_fingerprint" => "required|string",
            "phone_release" => "required|string",
            "phone_ip_address" => "required|string",
            "phone_mac_address" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($validity);
        if($isNotValidRequest)
            return $isNotValidRequest;

        $this->ApiKey->setPhoneDetails($request);

        if($request->api_host_type === "comp")
            $isValidHost = companydataModel::where([
                ["comp_id",$request->api_host_id],
                ["comp_token",$request->api_host_token],
            ])->exists();
        else if($request->api_host_type === "normal")
            $isValidHost = companydataModel::where([
                ["user_id",$request->api_host_id],
                ["user_token",$request->api_host_token],
            ])->exists();
        else
            $isValidHost = true;

        if(!$isValidHost)
        {
            $this->Error->setError(["The host id or token is not valid"]);
            return $this->Error->getError();
        }
        if($this->ApiKey->HasApiKey($request->api_host_id, $request->api_host_token))
        {
            $keyDetails = $this->ApiKey->getKeyDetails($request->api_host_id, $request->api_host_token);
            $this->ApiKey->setRequest($keyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
            $this->Error->setSuccess(["api_key" => $keyDetails[0]->api_key ]);
            // $this->ApiKey->successFullRequest();
            return $this->Error->getSuccess();
        }
        $apikey = $this->ApiKey->Generate_New_Api();
        if(!$apikey)
            return $this->ApiKey->Get_Message();
        $this->Error->setSuccess(["api_key" => $apikey]);

        $keyid = apiKeyModel::where([
            ["api_key", $apikey],
            ["api_host_id", $request->api_host_id]
        ])->get()[0]->api_id;
        $this->ApiKey->setRequest($keyid, $this->ip_address, $this->requestUrl);
        $this->Error->setSuccess(["api_key" => $apikey ]);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();
    }

    public function generateIdAndToken(Request $request)
    {
      $rules = [
        "platform" => "required|integer|in:0,1"
      ];
      $isbrowser = false;
      if($request->platform === 1)
        $isbrowser = true;
      if($request->cookie("host_id") &&
         $request->cookie("host_token") &&
         $request->cookie("host_type") && $isbrowser)
       {
       $this->Error->setSuccess([
         "host_id" => $request->cookie("host_id"),
         "host_token" => $request->cookie("host_token"),
         "host_type" => $request->cookie("host_type")
       ]);
        return response($this->Error->getSuccess());
      }
      $id = random_int(100000,1000000000);
      $token = bin2hex(random_bytes(64));
      $this->Error->setSuccess([
        "host_id" => $id,
        "host_token" => $token,
        "host_type" => "guest"
      ]);
      if($isbrowser)
        return response($this->Error->getSuccess())
        ->cookie('host_id', $id, (60*24*360))
        ->cookie('host_token', $token, (60*24*360))
        ->cookie('host_type', "guest", (60*24*360))
        ->cookie('is_browser', true, (60*24*360));
      else
        return response($this->Error->getSuccess());

        // return $response;;
    }

}
