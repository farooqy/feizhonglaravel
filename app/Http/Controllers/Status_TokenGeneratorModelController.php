<?php

namespace App\Http\Controllers;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\models\companydata_model;
use App\models\tokenStatusGeneratorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Status_TokenGeneratorModelController extends Controller
{
    //
    protected $Error;
    protected $customValidator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager;
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();
    }
    public function generate_Token(Request $request)
    {
        // return $request->all();
        $rules = [
            "host_token" => "required|string",
            "host_id" => "required|integer",
            "host_type" => "required|in:comp",
        ];
        $message = [
            "required" => "The :attribute is required",
            "string" => "The :attribute accepts only string value",
            "integer" => "The :attribute must be integer",
            "in" => "The selected value for :attribute is not valid",
        ];
        $isValid = Validator::make($request->all(), $rules, $message);
        if ($isValid->fails()) {
            $errors = $isValid->errors();
            $errors_list = [];
            foreach ($errors->all() as $error) {
                array_push($errors_list, $error);
            }

            $this->Error->setError($errors_list);
            return $this->Error->getError();
		}
		$isValidHost = companydata_model::where([
            ['comp_id', '=', $request->host_id],
            ['comp_token', '=', $request->host_token]])->get();
        if ($isValidHost === null || $isValidHost->count() <= 0) {
            $this->Error->setError(["The provided host id and host token do not match"]);
            return $this->Error->getError();
        }
        //ensure there is no unused token
        $existing_token = tokenStatusGeneratorModel::where([
            ['generated_for_token', '=', $request->host_token],
            ['generated_completed', '=', 0],
            ['generated_for_type', '=', $request->host_type],
            ['generated_for_id', '=', $request->host_id],
        ])->get();
        if ($existing_token->count() >= 1) {
			foreach($existing_token as $unused_token)
			{
				$unused_token->delete();
			}
			//removed this function to use uncompleted tokens because of file confusions
			//token might contain files of products or status that failed within the saving process

            // $this->Error->setSuccess(["generated_token" => $existing_token[0]->generated_token]);
            // return $this->Error->getSuccess();
        }


        //to increase the uniqueness of the token,
        //prepend the previous unique id of the previous token generated
        $lastToken = tokenStatusGeneratorModel::get()->last();
        if ($lastToken === null) {
            $tokenId = 0;
        } else {
            $tokenId = $lastToken->id;
        }

        $generated_Token = $tokenId . '_' . hash('md5', time());

        $generatorModel = new tokenStatusGeneratorModel;
        $generatorModel->generated_token = $generated_Token;
        $generatorModel->generated_for_id = $request->host_id;
        $generatorModel->generated_for_token = $request->host_token;
        $generatorModel->generated_for_type = $request->host_type;

        $generatorModel->save();
        $this->Error->setSuccess(["generated_token" => $generated_Token]);
        return $this->Error->getSuccess();
    }
}
