<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\normalUsersModel;
use Hash;
class accountController extends Controller
{
    //
	protected $Error;
	protected $custom_validator;
	public function __construct()
	{
    	$this->Error = new Error();
    	$this->custom_validator = new CustomRequestValidator();
	}
	public function userLogin(Request $request)
	{
		$rules = [
			"user_email" => "required|email",
			"user_password" => "required|string"
		];

		$messages = [
			"required" => "The :attribute is required",
		];
		$hashpass = hash('md5', $request->user_password);
		$valid_request = Validator::make($request->all(), $rules, $messages);
		if($notValid= $this->custom_validator->isNotValidRequest($valid_request))
			return $notValid;
		$data = normalUsersModel::where([
			["user_email", "=",$request->user_email],
			['user_password', $hashpass] 
		])->get();
		if($data === null || $data->count() <= 0)
		{
			$this->Error->setError(["The user email and password do not match "]);
			return $this->Error->getError();
		}
		// else if(Hash::check($request->user_password,$data[0]->user_password))
		// {
			// $this->Error->setSucces($data);
			// return $this->Error->getSuccess();
		// }
		else
		{
			// $this->Error->setError(["The user password and email do not match "]);
			// return $this->Error->getError();
			$this->Error->setSuccess($data);
			return $this->Error->getSuccess();
		}
	}

		
}
