<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\ApiKeyManager;
use App\customClass\FileUploader;
use App\models\normalUsersModel;
use App\models\users\userNeedsModel;

use App\Http\Controllers\user\normalUserController;
class userNeedController extends Controller
{
    //
  	protected $Error;
  	protected $custom_validator;
  	protected $ApiKey;
  	protected $ip_address;
  	protected $requestUrl;
  	protected $FileUploader;
  	public function __construct()
  	{
      	$this->Error = new Error();
      	$this->custom_validator = new CustomRequestValidator();
      	$this->ApiKey = new ApiKeyManager();
      	$this->ip_address = \Request::ip();
      	$this->requestUrl = url()->current();
  			$this->FileUploader = new FileUploader();
        $this->normalUser = new normalUserController();
  	}

    public function postNeed(Request $request)
    {


        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal",
            "api_key" => "required|string",
            "prod_name" => "required|string|min:5",
            "prod_description" => "required|string|min:2",
            "prod_type" => "required|string",
            "prod_subtype" => "required|string",
            "prod_quantity" => "required|integer|min:1",
            "prod_measure_unit" => "required|string",
            "prod_valid_until" => "required|date|after:now"
        ];
        $isvalid = Validator($request->all(), $rules,[]);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        //validate user
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active']
        ])->exists();
        if(!$user_exist)
        {
            $this->Error->setError(["The user provided is not not active or doesnt exist"]);
            return $this->Error->getError();
        }
        $has_address = $this->normalUser->hasSetAddress($request->host_id, $request->host_token);
        if(!$has_address)
        {
            $this->Error->setError(["Please visit your profile page and add your address information
            before posting a need." ]);
            return $this->Error->getError();
        }
        $need_token = hash('md5', time());
        userNeedsModel::create([
            'need_token' => $need_token,
            'host_id' => $request->host_id,
            'host_token' => $request->host_token,
            'host_type' => 'normal',
            'product_name' => $request->prod_name,
            'product_description' => $request->prod_description,
            'product_type' => $request->prod_type,
            'product_sub_types' => $request->prod_subtype,
            'product_quantity' => $request->prod_quantity,
            'product_measure_unit' => $request->prod_measure_unit,
            'product_valid_until' => $request->prod_valid_until

        ]);

        $need = userNeedsModel::where([
            ['need_token', $need_token],
            ['host_token', $request->host_token],
            ['is_active_need', true]
        ])->get();
        $this->Error->setSuccess($need);
        return $this->Error->getSuccess();

    }
    public function getUserNeeds(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_type" => "required|string|in:normal",
            "host_token" => "required|string|min:25",
            "api_key" => "required|string",
        ];

        $isvalid = Validator($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
        if($isNotValidRequest)
            return $isNotValidRequest;
        //valid host?
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active']
        ])->exists();
        if(!$user_exist)
        {
            $this->Error->setError(['The user is not active or is invalid']);
            return $this->Error->getError();
        }
        $needs = userNeedsModel::where([
            ['host_id', $request->host_id],
            ['host_token', $request->host_token],
        ])->get();
        $NeedData = [
        ];
        foreach ($needs as $key => $need) {
            // code...
            $matched_needs = $need->needMatches;
            $NeedData[$key]["matched_companies"] = [];
            foreach ($matched_needs as $matchkey => $match) {
                // code...
                $need_comp_data = $match->needCompData;
                $NeedData[$key]["matched_companies"][$matchkey]["company_data"] = $need_comp_data;
            }
            $NeedData[$key]["created_at"] = $need->created_at;
            $NeedData[$key]["host_id"] = $need->host_id;
            $NeedData[$key]["host_token"] = $need->host_token;
            $NeedData[$key]["host_type"] = $need->host_type;
            $NeedData[$key]["id"] = $need->id;
            $NeedData[$key]["need_token"] = $need->need_token;
            $NeedData[$key]["is_active_need"] = $need->is_active_need;
            $NeedData[$key]["product_description"] = $need->product_description;
            $NeedData[$key]["product_name"] = $need->product_name;
            $NeedData[$key]["product_measure_unit"] = $need->product_measure_unit;
            $NeedData[$key]["product_quantity"] = $need->product_quantity;
            $NeedData[$key]["product_type"] = $need->product_type;
            $NeedData[$key]["product_sub_types"] = $need->product_sub_types;
            $NeedData[$key]["product_valid_until"]= $need->product_valid_until;

        }

        $this->Error->setSuccess($NeedData);
        return $this->Error->getSuccess();
    }
}
