<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;
use Illuminate\Support\Facades\Validator;
use App\models\companies\phoneVerificationModel;
use App\models\companies\companydataModel;
use App\models\companies\companyAddressModel;
use App\models\companies\companyTypeModel;
use App\models\registrationTrackerModel;

use Log, File, Hash;
class accountController extends Controller
{
    //
	public $error = null;
	public $success = null;

	public function companyLogin(Request $request)
	{
		$rules = [
			"company_phone" => "required|string",
			"company_password" => "required|string"
		];

		$messages = [
			"required" => "The :attribute is required",
		];

		$valid_request = Validator::make($request->all(), $rules, $messages);
		if($notValid= $this->isNotValidRequest($valid_request))
			return $notValid;
		$data = companydataModel::where([
			["comp_phone", "=",$request->company_phone]
		])->get();
		if($data === null || $data->count() <= 0)
		{
			$this->setError(["The company phone and password do not match "]);
			return $this->error;
		}
		else if(Hash::check($request->company_password,$data[0]->comp_pass))
		{
			$this->setSucces($data);
			return $this->success;
		}
		else
		{
			$this->setError(["The company password and phone do not match "]);
			return $this->error;
		}
		
	}
	public function companyTypeRegistration(Request $request)
	{
		$rules= [
			"company_type" => "required|string|max:75",
			"company_subtype" => "required|string|max:50",
			"company_description" => "required|string|min:45",
			"company_token" => "required|string|max:330", 
		];
		$messages =[
			"required" => "The :attribute is required",
			"max:" => "The :attribute exceeds the allowed length",
			"min" => "The :attribute must be at least 45 characters"
		];

		$valid_request = Validator::make($request->all(), $rules, $messages);
		if($notValid = $this->isNotValidRequest($valid_request))
			return $notValid;

		$is_tracked_well = $this->registrationCheckTrack($request, "address");
		if($is_tracked_well === false)
			return $this->error;
		$company_id = companydataModel::where('comp_token', $request->company_token)->get();
		if($company_id === null || $company_id->count() !== 1)
		{
			$this->setError(["The multiple companies retrieved. Please contact support for assistance"]);
			return $this->error;
		}

		try
		{
			
			companyTypeModel::create([
				"comp_id" => $company_id[0]->comp_id,
				"comp_type" => $request->company_type,
				"comp_subtype" => $request->company_subtype,
				"comp_description" => $request->company_description,
				"comp_token" => $request->company_token
			]);

			registrationTrackerModel::where('comp_token', $request->company_token)->update(["stage" => "complete"]);

			$this->setSucces(["comp_token" => $request->company_token, "process" => "final"]);
			return $this->success;
		}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $this->setError([$exception->errorInfo]);
            return $this->error;

    	}
    	catch(Exception $exception)
    	{
            $this->setError([$exception->errorInfo]);
            return $this->error;
    	}
	}
	public function addressRegistration(Request $request)
	{
		$rules= [
			"company_address_one" => "required|string|max:75",
			"company_province" => "required|string|max:50",
			"company_city" => "required|string|max:45",
			"company_token" => "required|string|max:330", 
		];
		$messages =[
			"required" => "The :attribute is required",
			"max:" => "The :attribute exceeds the allowed length"
		];

		$valid_request = Validator::make($request->all(), $rules, $messages);
		if($notValid = $this->isNotValidRequest($valid_request))
			return $notValid;

		$is_tracked_well = $this->registrationCheckTrack($request);
		if($is_tracked_well === false)
			return $this->error;
		$company_id = companydataModel::where('comp_token', $request->company_token)->get();
		if($company_id === null || $company_id->count() !== 1)
		{
			$this->setError(["The multiple companies retrieved. Please contact support for assistance"]);
			return $this->error;
		}

		try
		{
			
			companyAddressModel::create([
				"comp_id" => $company_id[0]->comp_id,
				"comp_addr_one" => $request->company_address_one,
				"comp_addr_two" => $request->company_address_two,
				"comp_city" => $request->company_city,
				"comp_province" => $request->company_province,
				"comp_token" => $request->company_token
			]);

			registrationTrackerModel::where('comp_token', $request->company_token)->update(["stage" => "address"]);

			$this->setSucces(["comp_token" => $request->company_token, "process" => "page3"]);
			return $this->success;
		}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $this->setError([$exception->errorInfo]);
            return $this->error;

    	}
    	catch(Exception $exception)
    	{
            $this->setError([$exception->errorInfo]);
            return $this->error;
    	}
	}
    public function basicInfoRegister(Request $request)
    {
    	$rules = [
    		"company_logo" => "required|string",
    		"company_name" => "required|string",
    		"company_phone" => "required|string",
    		"company_password" => "required|string|min:8",
    		"company_email" => "required|email",
    		"verification_code" => "required|integer"
    	];
    	$messages = [
    		"required" => "The :attribute is required",
    		"string" => "The :attribute type is not valid",
    		"email" => "The :attribute is not valid",
    	];
    	$is_valid_request = Validator::make($request->all(), $rules, $messages);
    	if(($notValid = $this->isNotValidRequest($is_valid_request)))
    		return $notValid;
    	if($this->phone_exists($request->company_phone))
    	{
    		$this->setError(["The given company telephone cannot be used for registration"]);
    		return $this->error;
    	}
    	else if(companydataModel::where('comp_email', $request->comp_email)->exists())
    	{
    		$this->setError(["The given company email cannot be used for registration"]);
    		return $this->error;
    	}

    	//isvalid code
    	$verification_code = phoneVerificationModel::where([
    		['target_phone', $request->company_phone],
    	])->get();
    	if($verification_code === null || $verification_code->count() <= 0)
    	{
    		$this->setError(['Please verify your phone before continuing']);
    		return $this->error;
    	}
    	else if($verification_code->count() > 1)
    	{
    		//collsion verification code
    		$existing = phoneVerificationModel::where('target_phone', $request->company_phone)->get();
            foreach($existing as $excode)
                $excode->delete();
            // $existing->delete();
    		$this->setError(['Please verify your phone again before continuing']);
    		return $this->error;
    	}
        else if($verification_code[0]->verification_code !== (int)$request->verification_code)
        {

            $this->setError(['The verification code is not valid '.$verification_code[0]->verification_code." != ".$request->verification_code]);
            return $this->error;
        }
    	try
    	{
    		$comp_token = hash('md5', time());
    		$publicpath = public_path('uploads/comp/'.$comp_token.'/profile');
    		if(!is_dir($publicpath))
    		{
    			if(!mkdir($publicpath, 0765, true))
    			{
    				$this->setError(["Failed to create upload directory. Please contact support"]);
    				return $this->error;
    			}
    		}
    		$allowed_file_types = ["image/jpeg", "image/png", "image/jpg"];
            $file_extension = ["jpeg", "png", "jpg"];
            $file_type =  substr($request->company_logo,(strpos($request->company_logo, "data:")+5),
             (strpos($request->company_logo, ";")-5));
            if(($type_key = array_search($file_type, $allowed_file_types)) === false)
            {
                $this->setError(["The file type provided is not valid. Given ".$file_type]);
                return $this->error;
            }
            else
                $extenstion = $file_extension[$type_key];
            $request->company_logo = base64_decode(str_replace("data:".$file_type.";base64", '', $request->company_logo));
            $filename = 'profile_'.hash('md5',time()).'_pic.'.$extenstion;
            $logo_url = $publicpath.'/'.$filename;

    		File::put($logo_url, $request->company_logo);

    		companydataModel::create([
    			"comp_name" => $request->company_name,
    			"comp_email" => $request->company_email,
    			"comp_phone" => $request->company_phone,
    			"comp_token" => $comp_token,
    			"comp_pass" => Hash::make($request->company_password),
    			"comp_logo" => env('APP_URL').'feizhonglaravel/public/uploads/comp/'.$comp_token.'/profile'.'/'.$filename,
    		]);
    		registrationTrackerModel::create(["comp_token"=>$comp_token, "stage" => 'basicinfo']);
    		phoneVerificationModel::where([
    			['target_phone', $request->company_phone],
    			['verification_code', $request->verification_code]
    		])->update(['is_verified' => true]);
    		$this->setSucces(["comp_token" => $comp_token, "process" => "page2"]);
    		return $this->success;
    	}
    	catch(\Illuminate\Database\QueryException $exception)
        {
            $this->setError([$exception->errorInfo]);
            return $this->error;

    	}
    	catch(Exception $exception)
    	{
            $this->setError([$exception->errorInfo]);
            return $this->error;
    	}

    }



    public function sendConfirmationText(Request $request)
    {
    	$rules = [
    		"telephone" => "required|string|max:14",
    	];
    	$messages = [
    		"required" => "The :attribute is required"
    	];

    	$is_valid_phone = Validator::make($request->all(), $rules, $messages);

    	if($is_valid_phone->fails())
    	{
    		$errors = $is_valid_phone->errors();
    		$error_list = [];
    		foreach($errors->all() as $error)
    			array_push($error_list, $error);

    		return json_encode(array(
    			"errorMessage" => $error_list,
    			"isSuccess" => false,
    			"successMessage" =>null,
    			"data" => [],
    			"extra" => "I am cause 1"
    		));
    	}
    	if($this->phone_exists($request->telephone))
    		return json_encode([
    			"errorMessage" => ["The phone number cannot be used for registration of new user"],
    			"isSuccess" => false,
    			"successMessage" => null,
    			"data" => [],
    			"extra" => "I am cause 2"
    		]);

    	$TwilioClient = new Client(env('TWILIO_SID'), env('TWILIO_AUTH'));
    	try
    	{
    		$new_code = phoneVerificationModel::generateVerifCode();
    		phoneVerificationModel::create(
    			["target_phone" => $request->telephone, "verification_code" =>$new_code]
    		);
    		$TwilioClient->messages->create(
    			$request->telephone,[
    				"body" => "Your verification code for your AtoC account is ".$new_code,
    				"from" => env('TWILIO_NUMBER'),
    			]);
    		Log::info(
    			"message_sent_to: ".$request->telephone
    		);

    		return json_encode([
    			"errorMessage" => null,
    			"successMessage" => "success",
    			"isSuccess" => true,
    			"data" => [],
    			"extra" => "I am cause 3"
    		]);
    	}
    	catch(TwilioException $e)
    	{
    		return json_encode([
    			"errorMessage" => [$e,"Twilio failed to send code"],
    			"successMessage" => null,
    			"isSuccess" => false,
    			"data" => [],
    			"extra" => "I am cause 4"
    		]);
    	}

    }

    protected function isNotValidRequest($validator)
    {
    	if($validator->fails())
    	{
    		$errors = $validator->errors();
    		$error_list = [];
    		foreach($errors->all() as $error)
    			array_push($error_list, $error);
    		return json_encode([
    			"errorMessage"=>$error_list,
    			"isSuccess" => false,
    			"successMessage" => null,
    			"data" => []
    		]);
    	}
    	return false;
    }

    protected function phone_exists($phone)
    {
    	return companydataModel::where('comp_phone', $phone)->exists();
    }
    protected function setError($error)
    {
    	$this->error = [
    		"errorMessage" => $error,
    		"isSuccess" => false,
    		"successMessage" => null,
    	];
    }
    protected function setSucces($data)
    {
    	$this->success = [
    		"errorMessage" => null,
    		"isSuccess" => true,
    		"successMessage" => "success",
    		"data" => $data,
    	];
    }

    protected function registrationCheckTrack($request, $stage = "basicinfo")
    {
    	$is_registering = registrationTrackerModel::where('comp_token', $request->company_token)->get();
		if($is_registering->count() <= 0)
		{
			$this->setError(["Cannot continue to this stage, please register the basic information first"]);
			return false;
		}
		else if($is_registering->count() > 1)
		{
			registrationTrackerModel::where('comp_token', $request->company_token)->delete();
			companydataModel::where('comp_token', $request->company_token)->delete();
			companyAddressModel::where('comp_token', $request->company_token)->delete();
			$this->setError(["The company registration cannot be continued at this stage, please restart your registration"]);
			return false;
		}
		if($is_registering[0]->stage !== $stage)
		{
			$this->setError(["You are already registered with basic info, please log in to finish registering"]);
			return false;
		}
		return true;
    }
}
