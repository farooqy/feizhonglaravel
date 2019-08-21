<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\normalUsersModel;
use App\models\emailVerificationModel;
use App\models\userInterestModel;
use App\Mail\userVerificationMail;
use App\Mail\generalMailHandler;
use Hash, Mail;
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

	public function resetPassword(Request $request)
	{

		$rules = [
			"host_email" =>"required|email",
		];

		$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(),$rules, []));
		if($isNotValidRequest)
			return $isNotValidRequest;
		if(normalUsersModel::where("user_email", $request->host_email)->exists())
		{
			$account = normalUsersModel::where("user_email", $request->host_email)->latest()->get();
			$user_id = $account[0]->user_id; $user_token = $account[0]->user_token; $user_type = "normal";
			$userEmail = $request->host_email;
			$hasCode = emailVerificationModel::where([
				["user_id", $user_id],
				["user_token", $user_token],
				["user_type", $user_type],
				["is_expired", false]
			])->latest()->get();
			if($hasCode !== null && $hasCode->count() > 0)
			{
				$data = ["reset_code" =>$hasCode[0]->verification_code];
				Mail::to($userEmail)->send(new generalMailHandler("passwordReset", $data));
				$this->Error->setSuccess($account);
				return $this->Error->getSuccess();
			}
			$VerifierModel = new emailVerificationModel;
			$verification_code = $VerifierModel->generateVerifCode($user_id, $user_token);
			
			$VerifierModel->user_id = $user_id;
			$VerifierModel->user_token = $user_token;
			$VerifierModel->user_type = $user_type;
			$VerifierModel->verification_code = $verification_code;

			if($VerifierModel->save())
			{
				$data = ["reset_code" =>$verification_code];
				Mail::to($userEmail)->send(new generalMailHandler("passwordReset", $data));
				$this->Error->setSuccess($account);
				return $this->Error->getSuccess();
			}
			else
			{
				$this->Error->setError(["Failed to save the reset code generated"]);
				return $this->Error->getError();
			}
		}
		else
		{
			$this->Error->setError(["The account given is invalid"]);//d0oesnt exist
			return $this->Error->getError();
		}
	}

	public function verifyUser(Request $request)
	{

		$rules = [
			"host_email" =>"required|email",
			"host_id" => "required|integer",
			"host_token" => "required|string",
			"host_type" => "required|in:normal,comp",
			"verification_code" => "required|integer",
			"verification_type" => "required|string|in:reset,confirm"
		];

		$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(),$rules, []));
		if($isNotValidRequest)
			return $isNotValidRequest;

		$isValidCode = emailVerificationModel::where([
			["user_id", $request->host_id],
			["user_token", $request->host_token],
			["user_type", $request->host_type],
			["verification_code", $request->verification_code],
		])->get();
		if($isValidCode === null || $isValidCode->count() === 0)
		{
			$this->Error->setError(["Invalid verification code"]);
			return $this->Error->getError();
		}
		else if($isValidCode->count() > 1)
		{
			foreach ($isValidCode as $code) {
				$code->delete();
			}
			$this->Error->setError(["The verification code is not valid"]);
			return $this->Error->getError();
		}
		$user = normalUsersModel::where([
			["user_id", $request->host_id],
			["user_token", $request->host_token],
			["user_email", $request->host_email],
		])->get();
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["The user account is not valid"]);
			return $this->Error->getError();
		}
		else if($isValidCode[0]->is_expired)
		{
			$this->Error->setError(["The user account is not valid"]);
			return $this->Error->getError();
		}

		if($request->verification_type === "confirm")
		{
			if($user[0]->is_verified)
			{
				$this->Error->setError(["The account email is already verified"]);
				return $this->Error->getError();
			}
			normalUsersModel::where([
				["user_id", $request->host_id],
				["user_token", $request->host_token],
				["user_email", $request->host_email],
			])->update(["is_verified" => true]);

			emailVerificationModel::where([
				["user_id", $request->host_id],
				["user_token", $request->host_token],
				["user_type", $request->host_type],
				["verification_code", $request->verification_code],
			])->update(["is_expired" => true]);

			$this->Error->setSuccess([]);
			return $this->Error->getSuccess();
		}
		else
		{
			$this->Error->setSuccess([$user]);
			return $this->Error->getSuccess();
		}

			
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
		// $hashpass = hash('md5', $request->user_password);
		$hashpass = Hash::make($request->user_password);
		$valid_request = Validator::make($request->all(), $rules, $messages);
		if($notValid= $this->custom_validator->isNotValidRequest($valid_request))
			return $notValid;
		$data = normalUsersModel::where([
			["user_email", "=",$request->user_email]
		])->get();
		if($data === null || $data->count() <= 0)
		{
			$this->Error->setError(["The user email and password do not match "]);
			return $this->Error->getError();
		}
		else if(Hash::check($request->user_password,$data[0]->user_password))
		{
			$this->Error->setSuccess($data);
			return $this->Error->getSuccess();
		}
		else
		{
			$this->Error->setError(["The user password and email do not match "]);
			return $this->Error->getError();
		}
	}

	public function register(Request $request)
	{
		$rules = [
			"user_firstName" => "required|string|min:4|max:45",
			"user_lastName" => "required|string|min:4|max:45",
			"user_email" => "required|email|unique:normal_user",
			"user_phone" => "required|unique:normal_user",
			"password" => "required|confirmed|min:8",
		];

		$messages = [];

		$validator = Validator::make($request->all(), $rules, $messages);
		$isNotValidRequest = $this->custom_validator->isNotValidRequest($validator);
		if($isNotValidRequest)
		{
			return $isNotValidRequest;
		}
		$normalUsersModel = new normalUsersModel;
		$normalUsersModel->user_fname = $request->user_firstName;
		$normalUsersModel->user_sname = $request->user_lastName;
		$normalUsersModel->user_email = $request->user_email;
		$normalUsersModel->user_phone = $request->user_phone;
		$normalUsersModel->user_password = Hash::make($request->password);
		$normalUsersModel->user_token = hash('md5', time()."".$request->user_email);
		
		if($normalUsersModel->save())
		{
			$data = normalUsersModel::where("user_email", $request->user_email)->get();
			return $this->sendConfirmationEmail($request->user_email, $data[0]->user_id, $data[0]->user_token, "normal");
			// $this->Error->setSuccess($data[0]);
			// return $this->Error->getSuccess();
		}

		else
		{
			$this->Error->setError(["Failed to register the user "]);
			return $this->Error->getError();
		}
	}

	public function emailConfirmation(Request $request)
	{
		$rules = [
			"host_email" =>"required|email",
			"host_id" => "required|integer",
			"host_token" => "required|string",
			"host_type" => "required|in:normal,comp",
		];

		$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(),$rules, []));
		if($isNotValidRequest)
			return $isNotValidRequest;
		return $this->sendConfirmationEmail($request->host_email, $request->host_id, $request->host_token, $request->host_type);
	}


	public function sendConfirmationEmail($userEmail, $user_id, $user_token, $user_type)
	{
		
		$isValidUser = normalUsersModel::where([
			["user_id", $user_id],
			["user_token", $user_token],
			["user_email", $userEmail],
		])->get();
		if($isValidUser === null || $isValidUser->count() <= 0)
		{
			$this->Error->setError(["The user account doest not exist"]);
			return $this->Error->getError();
		}
		$hasCode = emailVerificationModel::where([
			["user_id", $user_id],
			["user_token", $user_token],
			["user_type", $user_type],
			["is_expired", false]
		])->latest()->get();
		if($hasCode !== null && $hasCode->count() > 0)
		{
			if(!$hasCode[0]->is_expired)
			{
				Mail::to($userEmail)->send(new userVerificationMail($hasCode[0]->verification_code, $isValidUser[0]->user_fname));
				$this->Error->setSuccess([$isValidUser]);
				return $this->Error->getSuccess();
			}
		}

		
		if($isValidUser[0]->is_verified)
		{
			$this->Error->setError(["This account email is already verified"]);
			return $this->Error->getError();
		}
		$VerifierModel = new emailVerificationModel;
		$verification_code = $VerifierModel->generateVerifCode($user_id, $user_token);
		
		$VerifierModel->user_id = $user_id;
		$VerifierModel->user_token = $user_token;
		$VerifierModel->user_type = $user_type;
		$VerifierModel->verification_code = $verification_code;

		if($VerifierModel->save())
		{
			Mail::to($userEmail)->send(new userVerificationMail($verification_code, $isValidUser[0]->user_fname));
			$this->Error->setSuccess($isValidUser);
			return $this->Error->getSuccess();
		}
		else
		{
			$this->Error->setError(["Failed to save the verification code generated"]);
			return $this->Error->getError();
		}

	}

	public function updateUserInfo(Request $request)
	{
		$rules = [
			"updateField" =>"required|string|in:userFirstName,userLastName,userPhoneNumber,userEmail,userPassword",
			"updateValue" => "required|string|min:4",
			"userToken" =>"required|string",
			"userId"=> "required|integer"
		];
		$isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
		if($isNotValidRequest)
			return $isNotValidRequest;

		switch ($request->updateField) 
		{
			case "userFirstName":
				return $this->updateFirstName($request);
			case "userLastName":
				return $this->updateLastName($request);
			case "userEmail":
				return $this->updateEmail($request);
			case "userPhoneNumber":
				return $this->updatePhone($request);
			case "userPassword":
				return $this->updatePassword($request);
			default:
				$this->Error->setError(["The update field type is not valid"]);
				return $this->Error->getError();
		}
	}
	public function updateFirstName($request)
	{
		$user = $this->getDataOfUser($request->userId, $request->userToken);
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["Could not verify your profile "]);
			$this->Error->getError();
		}
		else if($user[0]->user_fname === $request->updateValue)
		{
			$this->Error->setError(["You provided same name "]);
			$this->Error->getError();
		}
		else
		{
			normalUsersModel::where([
				["user_id" , $request->userId],
				["user_token", $request->userToken]
			])->update(["user_fname" => $request->updateValue]);

			$this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
			return $this->Error->getSuccess();
		}

	}
	public function updateLastName($request)
	{
		$user = $this->getDataOfUser($request->userId, $request->userToken);
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["Could not verify your profile "]);
			$this->Error->getError();
		}
		else if($user[0]->user_sname === $request->updateValue)
		{
			$this->Error->setError(["You provided same name "]);
			$this->Error->getError();
		}
		else
		{
			normalUsersModel::where([
				["user_id" , $request->userId],
				["user_token", $request->userToken]
			])->update(["user_sname" => $request->updateValue]);

			$this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
			return $this->Error->getSuccess();
		}

	}

	public function updateEmail($request)
	{
		$user = $this->getDataOfUser($request->userId, $request->userToken);
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["Could not verify your profile "]);
			$this->Error->getError();
		}
		else if($user[0]->user_email === $request->updateValue)
		{
			$this->Error->setError(["You provided same email "]);
			$this->Error->getError();
		}
		else
		{
			normalUsersModel::where([
				["user_id" , $request->userId],
				["user_token", $request->userToken]
			])->update(["user_email" => $request->updateValue, "is_verified" => false]);

			$this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
			return $this->Error->getSuccess();
		}

	}
	public function updatePhone($request)
	{
		$user = $this->getDataOfUser($request->userId, $request->userToken);
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["Could not verify your profile "]);
			$this->Error->getError();
		}
		else if($user[0]->user_phone === $request->updateValue)
		{
			$this->Error->setError(["You provided same phone number "]);
			$this->Error->getError();
		}
		else
		{
			normalUsersModel::where([
				["user_id" , $request->userId],
				["user_token", $request->userToken]
			])->update(["user_phone" => $request->updateValue]);

			$this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
			return $this->Error->getSuccess();
		}

	}
	public function updatePassword($request)
	{
		$user = $this->getDataOfUser($request->userId, $request->userToken);
		$hashpass = Hash::make($request->updateValue);
		if($user === null || $user->count() !== 1)
		{
			$this->Error->setError(["Could not verify your profile "]);
			$this->Error->getError();
		}
		else if(Hash::check($data[0]->user_password , $hashpass))
		{
			$this->Error->setError(["You provided same phone number "]);
			$this->Error->getError();
		}
		else
		{
			normalUsersModel::where([
				["user_id" , $request->userId],
				["user_token", $request->userToken]
			])->update(["user_password" => $hashpass]);
			$data = ["name" => $user[0]->user_fname];
			Mail::to($user[0]->user_email)->send(new generalMailHandler("passwordChanged", $data));
			$this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
			return $this->Error->getSuccess();
		}

	}

	public function getDataOfUser($userId, $userToken)
	{
		return normalUsersModel::where([
			["user_id" , $userId],
			["user_token", $userToken]
		])->get();
	}

	public function setUserInterest(Request $request)
	{
		$rules = [
			"user_token" => "required|string",
			"user_id" => "required|integer",
			"user_interests" => "required|string"
		];

		$isvalid = Validator::make($request->all(), $rules, []);
		$isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
		if($isNotValidRequest)
			return $isNotValidRequest;
		$isValidUser = normalUsersModel::where([
			["user_id", $request->user_id],
			["user_token", $request->user_token],
		])->exists();
		if(!$isValidUser)
		{
			$this->Error->setError(['The user is not yet registered, or details are not valid']);
			return $this->Error->getError();
		}

		$interests = explode(",", $request->user_interests);
		// $subInterest = explode("|", $intereset);

		if($interests === false)
		{
			$this->Error->setError(["The interest data format is not valid"]);
			return $this->Error->getError();
		}
		foreach ($interests as $interest) 
		{
			$subInterest = explode("|", $interest);
			if($subInterest === false)
			{
				$this->Error->setError(["The sub-interest data format is not valid"]);
				return $this->Error->getError();
			} 
			foreach ($subInterest as $skey => $subInt) 
			{
				if($skey === 0)
					continue;//the first one is the interest category and is saved as the category
				$interestExist = userInterestModel::where([

					["interest_user_id", $request->user_id],
					["interest_user_token" , $request->user_token],
					["interest_cat", $subInterest[0]],
					["interest_value" , $subInt],
				])->exists();
				if($interestExist)
					continue;
				userInterestModel::create([
					"interest_user_id" => $request->user_id,
					"interest_user_token" => $request->user_token,
					"interest_cat" => $subInterest[0],
					"interest_value" => $subInt,
				]);
			}
		}
			
		$this->Error->setSuccess([]);
		return $this->Error->getSuccess();


	}

		
}
