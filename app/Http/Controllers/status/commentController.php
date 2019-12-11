<?php

namespace App\Http\Controllers\status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\ApiKeyManager;
use App\customClass\FileUploader;

use App\models\status\commentsModel;
use App\models\products\productModel;
use App\models\compStatusModel;
use App\models\companies\companydataModel;
use App\models\normalUsersModel;

class commentController extends Controller
{
    //

    protected $Error;
    protected $customValidator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    protected $FileUploader ;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager;
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();
        $this->FileUploader = new FileUploader();
    }
    public function writeComment(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
            "status_token" => "required|string|min:25",
            "comment_text" => "required|string|min:2",
            "type" => "required|string|in:status,product,comment",
            "api_key" => "required|string"
        ];
        $messages = [
            "min" => "The :attribute value provided is less than 2 characters",
            "in" => "The :attribute value given is not valid"
        ];

        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($is_valid_request);
        if($isNotValidRequest)
          return $isNotValidRequest;

        if($is_valid_request->fails())
        {
            $error_list = [];
            $errors = $is_valid_request->errors();
            foreach($errors->all() as $error)
                array_push($error_list, $error);
            $this->Error->setError($error_list);
            return $this->Error->getError();
        }
        if($request->type === 'status')
          $status_valid = compStatusModel::where([
            ['id', $request->status_id],
            ['status_generated_token', $request->status_token]
          ])->get();
        else if($request->type === 'product')
        {
          $status_valid = productModel::where([
            ['id', $request->status_id],
            ['product_gen_token', $request->status_token]
          ])->get();
        }
        else
        {
          $status_valid = commentsModel::where([
            ['id', $request->status_id],
            ['comment_token', $request->status_token]
          ])->get();
        }
        if($status_valid === null || $status_valid->count() <= 0)
        {
          $this->Error->setError(["The target $request->type is not valid or doesn't exist"]);
          return $this->Error->getError();
        }
        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydataModel::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
        {
          $this->Error->setError(["The host provided is not valid or doesn't exist"]);
          return $this->Error->getError();
        }
        // $this->ApiKey->successFullRequest();
        $comment_token = hash('md5', time());
        commentsModel::create([
          "comment_token" => $comment_token,
          "status_id" => $request->status_id,
          "status_token" => $request->status_token,
          "host_id" => $request->host_id,
          "host_token" => $request->host_token,
          "comment_type" => $request->type,
          "comment_text" => $request->comment_text,
          "host_type" => $request->host_type,
        ]);
        $comment_info = commentsModel::where([
          ["comment_token", $comment_token],
          ["host_token", $request->host_token],
          ["comment_type", $request->type]
        ])->get();
        $comment_info[0]["comment_replies"] = [];
        if($request->host_type === "comp")
            $comment_info[0]["comp_profile"] = $comment_info[0]->compProfile;
        else
            $comment_info[0]["person_profile"] = $comment_info[0]->personProfile;
        $this->Error->setSuccess($comment_info);
        return $this->Error->getSuccess();
    }


    public function deleteComment(Request $request)
    {
        $rules = [
            "comment_id" => "required|integer",
            "status_id" => "required|integer",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string"
        ];
        $messages = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if($status_valid === null || $status_valid->count() <= 0)
        {
          $this->Error->setError(["The target status is not valid or doesn't exist"]);
          return $this->Error->getError();
        }
        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydataModel::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
        {
          $this->Error->setError(["The host provided is not valid or doesn't exist"]);
          return $this->Error->getError();
        }
        $comment = commentsModel::where([
            ["id" , $request->comment_id],
            ["status_id" , $request->status_id],
            ["host_type" , $request->host_type],
            ["host_id", $request->host_id],
            ["host_token", $request->host_token],
        ])->get();
        foreach ($comment as $c) {
            $c->delete();
        }
        $this->Error->setSuccess(["success"]);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();

    }
}
