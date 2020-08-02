<?php

namespace App\Http\Controllers\user;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\Http\Controllers\Controller;
use App\Http\Controllers\user\normalUserController;
use App\models\normalUsersModel;
use App\models\users\needImagesModel;
use App\models\users\userNeedsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userNeedController extends Controller
{
    //
    protected $Status;
    protected $custom_validator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    protected $FileUploader;
    public function __construct()
    {
        $this->Status = new Error();
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
            "prod_valid_until" => "required|date|after:now",
        ];
        $isvalid = Validator($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        //validate user
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active'],
        ])->exists();
        if (!$user_exist) {
            $this->Status->setError(["The user provided is not active or doesnt exist"]);
            return $this->Status->getError();
        }
        $has_address = $this->normalUser->hasSetAddress($request->host_id, $request->host_token);
        if (!$has_address) {
            $this->Status->setError(["Please visit your profile page and add your address information
            before posting a need.",]);
            return $this->Status->getError();
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
            'product_valid_until' => $request->prod_valid_until,

        ]);

        $need = userNeedsModel::where([
            ['need_token', $need_token],
            ['host_token', $request->host_token],
            ['is_active_need', true],
        ])->get();
        $this->Status->setSuccess($need);
        return $this->Status->getSuccess();
    }
    public function postNeedImages(Request $request)
    {
        $rules = [
            "need_id" => "required|integer",
            "need_token" => "required|string|max:330",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "file_url" => "required|string",
        ];

        $is_valid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        //validate user
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active'],
        ])->exists();
        if (!$user_exist) {
            $this->Status->setError(["The user provided is not active or doesnt exist"]);
            return $this->Status->getError();
        }

        $need_exist = userNeedsModel::where([
            ['id', $request->need_id],
            ['need_token', $request->need_token],
        ])->exists();
        if (!$need_exist) {
            $this->Status->setError(["The target need doesnt exist "]);
            return $this->Status->getError();
        }
        $dir = "uploads/users/" . $request->user_token . "/needs/";
        if (env("APP_ENV") === "local") {
            $user_directory = public_path($dir);
        } else {
            $user_directory = env("APP_ROOT") . $dir;
        }
        $rand = random_bytes(15);
        $filename = hash('md5', time() . $rand) . "_need_.";

        $this->FileUploader->setFilePath($user_directory);
        $this->FileUploader->setFileDirectory($dir); //path with url
        $this->FileUploader->setFileName($filename);

        $file_url = $this->FileUploader->uplaodJsonFile($request->file_url);
        if ($file_url === false) {
            $this->Status->setError($this->FileUploader->getError());
            return $this->Status->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->user_id],
                ["user_token", $request->user_token],
            ])->update([
                "user_profile" => $file_url,
            ]);
            needImagesModel::create([
                "need_id" => $request->need_id,
                "need_token" => $request->need_token,
                "file_url" => $file_url,
                "file_type" => $this->FileUploader->getUploadedExtension()
            ]);
            $this->Status->setSuccess(["image_url" => $file_url]);
            return $this->Status->getSuccess();
        }
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
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        //valid host?
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active'],
        ])->exists();
        if (!$user_exist) {
            $this->Status->setError(['The user is not active or is invalid']);
            return $this->Status->getError();
        }
        $needs = userNeedsModel::where([
            ['host_id', $request->host_id],
            ['host_token', $request->host_token],
        ])->get();
        $NeedData = [];
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
            $NeedData[$key]["product_valid_until"] = $need->product_valid_until;
        }

        $this->Status->setSuccess($NeedData);
        return $this->Status->getSuccess();
    }



    /*************************************************/
    /*************************************************/
    // API VERSION TWO
    /*************************************************/
    /*************************************************/
    public function postNeedImagesV2(Request $request)
    {
        $rules = [
            "need_id" => "required|integer",
            "need_token" => "required|string|max:330",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "file_url" => "required|string",
        ];

        $is_valid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        //validate user
        $user_exist = normalUsersModel::where([
            ['user_id', $request->host_id],
            ['user_token', $request->host_token],
            ['user_status', 'active'],
        ])->exists();
        if (!$user_exist) {
            $this->Status->setError(["The user provided is not active or doesnt exist"]);
            return $this->Status->getError();
        }

        $need_exist = userNeedsModel::where([
            ['id', $request->need_id],
            ['need_token', $request->need_token],
        ])->exists();
        if (!$need_exist) {
            $this->Status->setError(["The target need doesnt exist "]);
            return $this->Status->getError();
        }
        $dir = "uploads/users/" . $request->user_token . "/needs/";
        if (env("APP_ENV") === "local") {
            $user_directory = public_path($dir);
        } else {
            $user_directory = env("APP_ROOT") . $dir;
        }
        $rand = random_bytes(15);
        $filename = hash('md5', time() . $rand) . "_need_.";

        $this->FileUploader->setFilePath($user_directory);
        $this->FileUploader->setFileDirectory($dir); //path with url
        $this->FileUploader->setFileName($filename);

        $file_url = $this->FileUploader->uplaodJsonFile(base64_decode($request->file_url));
        if ($file_url === false) {
            $this->Status->setError($this->FileUploader->getError());
            return $this->Status->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->user_id],
                ["user_token", $request->user_token],
            ])->update([
                "user_profile" => $file_url,
            ]);
            needImagesModel::create([
                "need_id" => $request->need_id,
                "need_token" => $request->need_token,
                "file_url" => $file_url,
                "file_type" => $this->FileUploader->getUploadedExtension()
            ]);
            $this->Status->setSuccess(["image_url" => $file_url]);
            return $this->Status->getSuccess();
        }
    }
}
