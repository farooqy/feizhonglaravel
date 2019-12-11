<?php
namespace App\Http\Controllers\companies;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\Http\Controllers\Controller;
use App\models\companies\companyAddressModel;
use App\models\companies\companyChangesModel;
use App\models\companies\companydataModel;
use App\models\companies\companyTypeModel;
use App\models\companies\compEmailVerificationModel;
use App\models\companies\phoneVerificationModel;
use App\models\compStatusModel;
use App\models\registrationTrackerModel;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Log;
use Mail;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class accountController extends Controller
{
    //
    public $error = null;
    public $success = null;
    protected $Status;
    protected $custom_validator;
    protected $FileUploader;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Status = new Error();
        $this->custom_validator = new CustomRequestValidator();
        $this->FileUploader = new FileUploader();
        $this->ApiKey = new ApiKeyManager();
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()
            ->current();

    }
    public function apiHandleSet($user_id, $user_token, $api_key)
    {
        return true;
        $userOwnsKey = $this
            ->ApiKey
            ->HasApiKey($user_id, $user_token);
        if (!$userOwnsKey) {
            $this
                ->Status
                ->setError(["The access key is not valid"], -1);
            return $this
                ->Status
                ->getError();
        }
        $apiKeyDetails = $this
            ->ApiKey
            ->getKeyDetails($user_id, $user_token);
        if ($apiKeyDetails[0]->api_key !== $api_key) {
            $this
                ->Status
                ->setError(['Invalid api key']);
            return $this
                ->Status
                ->getError();
        }
        $this
            ->ApiKey
            ->setRequest($apiKeyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
        return true;
    }
    public function getCompanyData(Request $request)
    {
        $rules = ["host" => "required|string|in:comp", "platform" => "required|integer|in:1"];
        $valid_request = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this
            ->custom_validator
            ->isNotValidRequest($valid_request);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        if (!$request->cookie("iliua") || !$request->cookie("is_browser")) {
            $this
                ->Status
                ->setError(["Authentication data not complete"]);
            return $this
                ->Status
                ->getError();
        } else if ($request->cookie("host_type") !== "comp") {
            $this
                ->Status
                ->setError(["The authentication host type is not valid"]);
            $this->forgetAuthenticationCookies();
            return $this
                ->Status
                ->getError();
        }
        $host_id = $request->cookie("host_id");
        $host_token = $request->cookie("host_token");

        if (!$host_id || !$host_token) {
            $this
                ->Status
                ->setError(["Authentication data is not set"]);
            $this->forgetAuthenticationCookies();
            return $this
                ->Status
                ->getError();
        }
        $data = companydataModel::where([["comp_id", $host_id], ["comp_token", $host_token]])->get();

        if ($data->count() <= 0) {
            $this
                ->Status
                ->setError(["Authentication failed. Could not get company
			information. Please log in back"]);
            $this->forgetAuthenticationCookies();
            return $this
                ->Status
                ->getError();
        }
        $type = $data[0]->type;
        $address = $data[0]->address;
        if ($data[0]->license === null) {
            $hasLicense = $data[0]->hasLicense = false;
        } else {
            $hasLicense = $data[0]->hasLicense = true;
        }

        $verification_data = $data[0]->verificationData;
        if ($verification_data === null || $verification_data->count() <= 0) {
            $is_verified = $data[0]->is_verified = false;
        } else if ($verification_data->is_revoked) {
            $is_verified = $data[0]->is_verified = false;
        } else {
            $is_verified = $data[0]->is_verified = true;
        }

        // $domain = substr($data[0]->comp_email,
        //     strpos($data[0]->comp_email, "@"),  -1);
        // $numrepeat = str_repeat("*", (strlen($data[0]->comp_email)-
        //     strlen($domain)));
        // $hidden_email = $numrepeat.$domain;
        // $data[0]->comp_email = $hidden_email;
        // $numrepeat = str_repeat("*",strlen($data[0]->comp_phone) - 4);
        // $hidden_phone = $numrepeat.substr($data[0]->comp_phone, -5, -1);
        // $data[0]->comp_phone = $hidden_phone;
        $comp_matched_needs = $data[0]->matchedNeeds;
        $Company = ["comp_id" => $data[0]->comp_id, "comp_token" => $data[0]->comp_token, "comp_email" => $data[0]->comp_email, "comp_phone" => $data[0]->comp_phone, "comp_logo" => $data[0]->comp_logo, "comp_name" => $data[0]->comp_name, "hasLicense" => $hasLicense, "is_verified" => $is_verified, "matched_needs" => [], "updated_at" => $data[0]->updated_at, "address" => $address, "type" => $type];
        // $data[0]->needs= [];
        foreach ($comp_matched_needs as $key => $match) {
            // code...
            $need = $match->needsData;
            $user_data = $need->needUserData;
            $user_address = $user_data->userLocation;
            // array_push($data[0]->needs, $need);
            $Company["matched_needs"][$key] = $need;
        }
        $this
            ->Status
            ->setSuccess($Company);
        return $this
            ->Status
            ->getSuccess();

    }
    public function companyLogin(Request $request)
    {
        $rules = [
			"company_email" => "required|email",
			"company_password" => "required|string", 
			"guest_id" => "required|integer", 
			"guest_token" => "required|string", 
			"api_key" => "required|string"];

        $messages = ["required" => "The :attribute is required"];

        $valid_request = Validator::make($request->all(), $rules, $messages);
        if ($notValid = $this->isNotValidRequest($valid_request)) {
            return $notValid;
        }

        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $data = companydataModel::where([["comp_email", "=", $request
                ->company_email]])
                ->get();
        if ($data === null || $data->count() <= 0) {
            $this->setError(["The company phone and password do not match "]);
            return $this->error;
        } else if (Hash::check($request->company_password, $data[0]->comp_pass)) {
            if ($data[0]->type === null || $data[0]->address === null) {
                $this->setError(["The company registration is not complete"]);
                $id = $data[0]->comp_id;
                $data[0]->delete();
                $phone = phoneVerificationModel::where("target_phone", $data[0]->comp_phone);
                if ($phone->count() !== 0) {
                    $phone[0]->delete();
                }

                if ($data[0]->type !== null) {
                    $type = companyTypeModel::where("comp_id", $id)->get();
                    $type[0]->delete();
                }
                if ($data[0]->address !== null) {
                    $address = companyTypeModel::where("comp_id", $id)->get();
                    $address[0]->delete();
                }

                return $this->error;
            }
            $suspensions = $data[0]->companySuspensions;
            if ($suspensions !== null && $suspensions->count() > 0) {
                foreach ($suspensions as $suspension) {
                    if (!$suspension->is_revoked) {
                        $this
                            ->Status
                            ->setError(["This company is suspended, and cannot access the account"]);
                        return $this
                            ->Status
                            ->getError();
                    }
                }
            }
            $data[0]->address;
            $data[0]->type;
            $data[0]->products;
            $data[0]->companyStatus;
            if ($data[0]->license !== null) {
                $data[0]->hasLicense = true;
            } else {
                $data[0]->hasLicense = false;
            }

            $this
                ->ApiKey
                ->updateKeys($request->guest_id, $request->guest_token, $data[0]->comp_id, $data[0]->comp_token, "comp");

            // $this->ApiKey->successFullRequest();
            $this->setSucces($data);
            if ($request->cookie("is_browser")) {
                $min = 24 * 60 * 360;
                $response = response($this->success)
                    ->cookie("host_id", $data[0]->comp_id, $min)->cookie("host_token", $data[0]->comp_token, $min)->cookie("host_type", "comp", $min)->cookie("iliua", true, $min);
                return $response;
            }
            return $this->success;
        } else {
            $this->setError(["The company password and phone do not match "]);
            return $this->error;
        }

    }
    public function companyTypeRegistration(Request $request)
    {
		$rules = [
			"company_type" => "required|string|max:75", 
			"company_subtype" => "required|string|max:50", 
			"company_description" => "required|string|min:45|max:1200", 
			"company_token" => "required|string|max:330", 
			"api_key" => "required|string", 
			"company_id" => "required|integer"];
        $messages = ["required" => "The :attribute is required", "max:" => "The :attribute exceeds the allowed length", "min" => "The :attribute must be at least 45 characters"];

        $valid_request = Validator::make($request->all(), $rules, $messages);
        if ($notValid = $this->isNotValidRequest($valid_request)) {
            return $notValid;
        }

        $is_tracked_well = $this->registrationCheckTrack($request, "address");
        if ($is_tracked_well === false) {
            return $this->error;
        }

        $apiset = $this->apiHandleSet($request->company_id, $request->company_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $company_id = companydataModel::where('comp_token', $request->company_token)
            ->get();
        if ($company_id->count() === 0) {
            $this->setError(["Invalid company type is being added"]);
            return $this->error;
        }
        if ($company_id === null || $company_id->count() !== 1) {
            $this->setError(["The multiple companies retrieved. Please contact support for assistance"]);
            return $this->error;
        }
        if ($request->company_type === "Other" || $request->company_subtype === "Other") {
            $input = $request->all();
            if (!$request->has('comp_customType') || !$request->has('comp_customSubType')) {
                $this
                    ->Status
                    ->setError(["The company custom type or subtype is not provided"]);
                return $this
                    ->Status
                    ->getError();
            } else {
                $request->company_type = $request->comp_customType;
                $request->company_subtype = $request->comp_customSubType;
            }
        }

        try
        {

            companyTypeModel::create(["comp_id" => $company_id[0]->comp_id, "comp_type" => $request->company_type, "comp_subtype" => $request->company_subtype, "comp_description" => $request->company_description, "comp_token" => $request->company_token]);

            registrationTrackerModel::where('comp_token', $request->company_token)
                ->update(["stage" => "complete"]);

            // $this->ApiKey->successFullRequest();
            $this->setSucces(["comp_token" => $request->company_token, "process" => "final"]);
            return $this->success;
        } catch (\Illuminate\Database\QueryException $exception) {
            $this->setError([$exception->errorInfo]);
            return $this->error;

        } catch (Exception $exception) {
            $this->setError([$exception->errorInfo]);
            return $this->error;
        }
    }
    public function addressRegistration(Request $request)
    {
        $rules = [
			"company_address_one" => "required|string|max:75", 
			"company_province" => "required|string|max:50", 
			"company_country" => "required|string|max:45", 
			"company_token" => "required|string|max:330", 
			"company_id" => "required|integer", 
			"api_key" => "required|string"];
        $messages = ["required" => "The :attribute is required", "max:" => "The :attribute exceeds the allowed length"];

        $valid_request = Validator::make($request->all(), $rules, $messages);
        if ($notValid = $this->isNotValidRequest($valid_request)) {
            return $notValid;
        }

        $is_tracked_well = $this->registrationCheckTrack($request);
        if ($is_tracked_well === false) {
            return $this->error;
        }

        $apiset = $this->apiHandleSet($request->company_id, $request->company_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $company_id = companydataModel::where('comp_token', $request->company_token)
            ->get();
        if ($company_id === null || $company_id->count() !== 1) {
            $this->setError(["The multiple companies retrieved. Please contact support for assistance"]);
            return $this->error;
        }

        try
        {

            companyAddressModel::create([
				"comp_id" => $company_id[0]->comp_id, 
				"comp_addr_one" => $request->company_address_one, 
				"comp_addr_two" => $request->company_address_two, 
				"comp_city" => $request->company_country, 
				"comp_province" => $request->company_province, 
				"comp_token" => $request->company_token]);

            registrationTrackerModel::where('comp_token', $request->company_token)
                ->update(["stage" => "address"]);
            // $this->ApiKey->successFullRequest();
            $this->setSucces(["comp_token" => $request->company_token, "process" => "page3"]);
            return $this->success;
        } catch (\Illuminate\Database\QueryException $exception) {
            $this->setError([$exception->errorInfo]);
            return $this->error;

        } catch (Exception $exception) {
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
			"company_password_verification" => "required|string|min:8|same:company_password", 
			"company_email" => "required|email", 
			"verification_code" => "required|integer", 
			"guest_id" => "required|integer", 
			"guest_token" => "required|string", 
			"api_key" => "required|string",

        ];
        $messages = ["required" => "The :attribute is required", "string" => "The :attribute type is not valid", "email" => "The :attribute is not valid"];
        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        if (($notValid = $this->isNotValidRequest($is_valid_request))) {
            return $notValid;
        }

        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        if ($this->phone_exists($request->company_phone)) {
            $this->setError(["The given company telephone cannot be used for registration"]);
            return $this->error;
        } else if (companydataModel::where('comp_email', $request->comp_email)
            ->exists()) {
            $this->setError(["The given company email cannot be used for registration"]);
            return $this->error;
        }

        //isvalid code
        $verification_code = phoneVerificationModel::where([['target_phone', $request
                ->company_phone]])
				->get();
        if ($verification_code === null || $verification_code->count() <= 0) {
			$verification_code = \App\models\companies\compEmailVerificationModel::where([
				["verification_code" , $request->verification_code],
				['comp_email', $request->company_email],
				['is_expired', false]
			])->get();
			if($verification_code === null || $verification_code->count() <= 0)
            {
				$this->setError(['Please verify your email or phone before continuing']);
            	return $this->error;
			}
			else if($verification_code->count() < 0)
			{
				foreach($verification_code as $key => $code)
				{
					if($key === 0)
						continue;
					$code->delete();
				}
			}


        } else if ($verification_code->count() > 1) {
            //collsion verification code
            $existing = phoneVerificationModel::where('target_phone', $request->company_phone)
                ->get();
            foreach ($existing as $key => $excode ) {

				if($key === 0)
					continue;
                $excode->delete();
            }

            // // $existing->delete();
            // $this->setError(['Please verify your phone again before continuing']);
            // return $this->error;
        } else if ($verification_code[0]->verification_code !== (int) $request->verification_code) {

            $this->setError(['The verification code is not valid ']);
            return $this->error;
        }
        try
        {
            $comp_token = hash('md5', time());
            $dir = "uploads/comp/" . $comp_token . "/profile/";
            if (env("APP_ENV") === "local") {
                $publicpath = public_path($dir);
            } else {
                $publicpath = env("APP_ROOT") . $dir;
            }

            $filename = "profile_" . hash("md5", time()) . "_pic.";

            $this
                ->FileUploader
                ->setFilePath($publicpath);
            $this
                ->FileUploader
                ->setFileDirectory($dir); //path with url
            $this
                ->FileUploader
                ->setFileName($filename);

            $logo_url = $this
                ->FileUploader
                ->uplaodJsonFile($request->company_logo);
            if (!$logo_url) {
                return $this
                    ->FileUploader
                    ->getError();
            }

            companydataModel::create([
				"comp_name" => $request->company_name, 
				"comp_email" => $request->company_email, 
				"comp_phone" => $request->company_phone, 
				"comp_token" => $comp_token, 
				"comp_pass" => Hash::make($request->company_password), 
				"comp_logo" => $logo_url]);
            registrationTrackerModel::create(["comp_token" => $comp_token, "stage" => 'basicinfo']);
            phoneVerificationModel::where([['target_phone', $request->company_phone], ['verification_code', $request
                    ->verification_code]])
                    ->update(['is_verified' => true]);
            $data = companydataModel::where([["comp_phone", $request->company_phone], ["comp_token", $comp_token]])->get();
            $this->setSucces(["comp_token" => $comp_token, "comp_id" => $data[0]->comp_id, "process" => "page2"]);
            // $this->ApiKey->updateKeys($request->guest_id, $request->guest_token, $data[0]->comp_id, $data[0]->comp_token, "comp");
            // $this->ApiKey->successFullRequest();
            return $this->success;
        } catch (\Illuminate\Database\QueryException $exception) {
            $this->setError([$exception->errorInfo]);
            return $this->error;

        } catch (Exception $exception) {
            $this->setError([$exception->errorInfo]);
            return $this->error;
        }

    }

    public function sendConfirmationText(Request $request)
    {
        $rules = ["telephone" => "required|string|max:14", "guest_id" => "required|integer", "guest_token" => "required|string", "api_key" => "required|string"];
        $messages = ["required" => "The :attribute is required"];

        $is_valid_phone = Validator::make($request->all(), $rules, $messages);

        if ($is_valid_phone->fails()) {
            $errors = $is_valid_phone->errors();
            $error_list = [];
            foreach ($errors->all() as $error) {
                array_push($error_list, $error);
            }

            return json_encode(array(
                "errorMessage" => $error_list,
                "isSuccess" => false,
                "successMessage" => null,
                "data" => [],
                "extra" => "I am cause 1"
            ));
        }
        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        if ($this->phone_exists($request->telephone)) {
            $this
                ->Status
                ->setError(["The phone number cannot be used for registration of new company"]);
            return $this
                ->Status
                ->getError();
        }

        $codeExist = phoneVerificationModel::where([["target_phone", $request
                ->telephone]])
                ->get();

        if ($codeExist !== null && $codeExist->count() > 0) {
            foreach ($codeExist as $key => $code) {
                $code->delete();
            }
        }

        $new_code = phoneVerificationModel::generateVerifCode();
        phoneVerificationModel::create(["target_phone" => $request->telephone, "verification_code" => $new_code]);
        $body = "[AtoC] " . $new_code . " is your verification code. This code will expire in 5 minutes.
				Please do not disclose it for security purposes.";

        Mail::to(["noor@drongo.tech", "neud@drongo.tech"])->send(new \App\Mail\companies\registrationCodeMail($new_code, $request->telephone));
        return $this->twilioSendMessage($request->telephone, $body);

    }
    public function twilioSendMessage($telephone, $body)
    {
        $TwilioClient = new Client(env('TWILIO_SID'), env('TWILIO_AUTH'));
        try
        {

            $TwilioClient
                ->messages
                ->create($telephone, ["body" => $body, "from" => env('TWILIO_NUMBER')]);
            Log::info("message_sent_to: " . $telephone);
            // $this->ApiKey->successFullRequest();
            return json_encode(["errorMessage" => null, "successMessage" => "success", "isSuccess" => true, "data" => [], "extra" => "I am cause 3"]);
        } catch (TwilioException $e) {
            return json_encode(["errorMessage" => ["Failed: Could not send verification code.", $e], "successMessage" => null, "isSuccess" => false, "data" => [], "extra" => "I am cause 4"]);
        }
    }
    public function sendVerificationMail(Request $request)
    {
		$rules = [
			"email_address" => "required|email|max:75",
		];
		$is_valid = Validator::make($request->all(), $rules, []);
		$isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid);
		if($isNotValidRequest)
			return $isNotValidRequest;
		
		$email_taken = companydataModel::where([
			['comp_email' , $request->email_address]
		])->exists();
		
		$email_register_to_user = \App\models\normalUsersModel::where([
			["user_email" , $request->email_address]
		])->exists();
		if($email_taken || $email_register_to_user)
		{
			$this->Status->setError(["The email address has been taken and is not valid"]);
			return $this->Status->getError();
		}
		$has_existing_code = \App\models\companies\compEmailVerificationModel::where([
			['comp_email', $request->email_address],
			['is_expired', false]
		])->get();
		if($has_existing_code !== null && $has_existing_code->count() > 0)
		{
			$code = $has_existing_code[0]->verification_code;
		}
		else
		{
			$token = hash('md5', time());
			$code = phoneVerificationModel::generateVerifCode();
			\App\models\companies\compEmailVerificationModel::create([
				'verification_token' => $token,
				'verification_code' => $code,
				'comp_email' => $request->email_address,
			]);
		}	

		$Mailer = new \App\Http\Controllers\companies\sentCompanyEmailsController();
		
		$mail_sent = $Mailer->sendVerificationEmail($request->email_address, $code);

		if($mail_sent !== true)
			return $mail_sent;
		$this->Status->setSuccess(["Email confirmation code has been sent"]);
		return $this->Status->getSuccess();
    }
    protected function isNotValidRequest($validator)
    {
        if ($validator->fails()) {
            $errors = $validator->errors();
            $error_list = [];
            foreach ($errors->all() as $error) {
                array_push($error_list, $error);
            }

            return json_encode(["errorMessage" => $error_list, "isSuccess" => false, "successMessage" => null, "data" => []]);
        }
        return false;
    }

    protected function phone_exists($phone)
    {
        return companydataModel::where('comp_phone', $phone)->exists();
    }
    protected function setError($error)
    {
        $this->error = ["errorMessage" => $error, "isSuccess" => false, "successMessage" => null];
    }
    protected function setSucces($data)
    {
        $this->success = ["errorMessage" => null, "isSuccess" => true, "successMessage" => "success", "data" => $data];
    }

    protected function registrationCheckTrack($request, $stage = "basicinfo")
    {
        $is_registering = registrationTrackerModel::where('comp_token', $request->company_token)
            ->get();
        if ($is_registering->count() <= 0) {
            $this->setError(["Cannot continue to this stage, please register the basic information first"]);
            return false;
        } else if ($is_registering->count() > 1) {
            registrationTrackerModel::where('comp_token', $request->company_token)
                ->delete();
            companydataModel::where('comp_token', $request->company_token)
                ->delete();
            companyAddressModel::where('comp_token', $request->company_token)
                ->delete();
            $this->setError(["The company registration cannot be continued at this stage, please restart your registration"]);
            return false;
        }
        if ($is_registering[0]->stage !== $stage) {
            $this->setError(["You are already registered with basic info, please log in to finish registering"]);
            return false;
        }
        return true;
    }
    protected function uploadCompProfile($request, $model)
    {
        $comp_token = $request->company_token;
        $dir = 'uploads/comp/' . $comp_token . '/profile/';
        if (env("APP_ENV") === "local") {
            $publicpath = public_path($dir);
        }
        //full path
        else {
            $publicpath = env("APP_ROOT") . $dir;
        }

        $filename = 'profile_' . hash('md5', time()) . '_pic.';
        $this
            ->FileUploader
            ->setFilePath($publicpath);
        $this
            ->FileUploader
            ->setFileDirectory($dir); //path with url
        $this
            ->FileUploader
            ->setFileName($filename);

        $file_url = $this
            ->FileUploader
            ->uplaodJsonFile($request->company_target_change);
        if ($file_url === false) {
            $this
                ->Status
                ->setError($this
                        ->FileUploader
                        ->getError());
            return false;
        } else {
            return  $file_url;
        }
    }
    protected function doCheckAndUpdate($targetField, $request, $model)
    {
        $is_valid_request = $this->checkUpdateFields($request, $targetField);
        if ($is_valid_request) {
            if ($targetField === "comp_profile") {
                $file_url = $this->uploadCompProfile($request, $model);
                if ($file_url === false) {
                    return $this
                        ->Status
                        ->getError();
                } else {
                    $targetField = "comp_logo";
                    $request->company_target_change = $file_url;
                }
            } else if ($targetField === "comp_email") {
                $existingEmail = companydataModel::where("comp_email", $request->company_target_change)
                    ->exists();
                if ($existingEmail) {
                    $this
                        ->Status
                        ->setError(["The email is already taken"]);
                    return $this
                        ->Status
                        ->getError();
                }
            }
            $is_updated = $this->updateField($targetField, $request, $model);
            if ($is_updated) {
                return $this
                    ->Status
                    ->getSuccess();
            } else {
                return $this
                    ->Status
                    ->getError();
            }

        } else {
            return $this
                ->Status
                ->getError();
        }

    }
    public function updateCompName(Request $request)
    {
        return $this->doCheckAndUpdate("comp_name", $request, new companydataModel);

    } //done
    public function updateCompProfile(Request $request)
    {
        return $this->doCheckAndUpdate("comp_profile", $request, new companydataModel); //different

    }
    public function updateCompPassword(Request $request)
    {
        return $this->doCheckAndUpdate("comp_pass", $request, new companydataModel);
    } //done
    public function updateCompPhone(Request $request)
    {
        return $this->doCheckAndUpdate("comp_phone", $request, new companydataModel);
    } //done
    public function updateCompAddressOne(Request $request)
    {
        return $this->doCheckAndUpdate("comp_addr_one", $request, new companyAddressModel);
    } //done
    public function updateCompAddressTwo(Request $request)
    {
        return $this->doCheckAndUpdate("comp_addr_two", $request, new companyAddressModel);
    } //done
    public function updateCompCity(Request $request)
    {
        return $this->doCheckAndUpdate("comp_city", $request, new companyAddressModel);
    } //done
    public function updateCompProvince(Request $request)
    {
        return $this->doCheckAndUpdate("comp_province", $request, new companyAddressModel);
    } //done
    public function updateCompEmail(Request $request)
    {
        return $this->doCheckAndUpdate("comp_email", $request, new companydataModel); //different...needs to verify email

    }
    public function updateCompDescription(Request $request)
    {
        return $this->doCheckAndUpdate("comp_description", $request, new companyTypeModel); //different...needs to verify email

    }
    protected function checkUpdateFields($request, $targetField = '')
    {
        $rules = ["company_id" => "required|integer", "company_token" => "required|string|max:330|min:20", "company_target_change" => "required|string|min:6", "company_password" => "required|string", "api_key" => "required|string"];
        $valid_request = Validator::make($request->all(), $rules, []);
        if ($notValid = $this
            ->custom_validator
            ->isNotValidRequest($valid_request)) {
            $this
                ->Status
                ->setError(json_decode($notValid)->errorMessage);
            return false;
        }

        $apiset = $this->apiHandleSet($request->company_id, $request->company_token, $request->api_key);
        if ($apiset !== true) {
            $this
                ->Status
                ->setError(json_decode($apiset)->errorMessage);
            return false;
        }
        if ($targetField === "comp_phone") {
            $new_value = phoneVerificationModel::where('verification_code', $request->company_target_change)
                ->get();
            if ($new_value == null || $new_value->count() <= 0) {
                $this
                    ->Status
                    ->setError(["The verification code provided is not valid"]);
                return false;
            }
            $request->company_target_change = $new_value[0]->target_phone;
        }
        $data = companydataModel::where('comp_token', $request->company_token)
            ->get();
        if ($data == null || $data->count() <= 0) {
            $this
                ->Status
                ->setError(["The company token is not valid "]);
            return false;
        } else if (Hash::check($request->company_password, $data[0]->comp_pass)) {
            return true;
        } else {
            $this
                ->Status
                ->setError(["The company password and token do not match "]);
            return false;
        }
    }
    protected function updateField($targetField, $request, $model)
    {
        try
        {
            $current_data = $model::where('comp_token', $request->company_token)
                ->get();
            if ($current_data == null || $current_data->count() <= 0) {
                $this
                    ->Status
                    ->setError(["Failed to get the current value for the target change"]);
                return false;
            }
            $current_value = $current_data[0][$targetField];
            if ($current_value === $request->company_target_change) {
                $this
                    ->Status
                    ->setError(['Please provide a different value than the existing ']);
                return false;
            }
            $new_value = $request->company_target_change;
            if ($targetField === "comp_pass") {
                $new_value = Hash::make($new_value);
            }

            $model::where('comp_token', $request->company_token)
                ->update([$targetField => $new_value]);
            if ($targetField === "comp_phone") {
                phoneVerificationModel::where('target_phone', $new_value)->update(['is_verified' => true]);
            }

            companyChangesModel::create(["comp_token" => $request->company_token, "change_field" => $targetField, "changed_from" => $current_value, "changed_to" => $new_value]);
            if ($targetField === "comp_pass") {
                $new_value = "sensitive";
            }

            $this
                ->Status
                ->setSuccess(["change_value" => $new_value]);
            return true;
        } catch (\Illuminate\Database\QueryException $exception) {
            $this
                ->Status
                ->setError([$exception->errorInfo]);
            return false;
        } catch (Exception $exception) {
            $this
                ->Status
                ->setError([$exception->errorInfo]);
            return false;
        }

    }

    public function getMyPosts(Request $request)
    {
        $rules = ["comp_id" => "required|integer", "comp_token" => "required|string", "from" => "required|integer"];

        $isNotValidRequest = $this
            ->custom_validator
            ->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $statusData = compStatusModel::where([["comp_id", $request->comp_id], ["comp_token", $request
                ->comp_token]])
                ->get();

        foreach ($statusData as $key => $eachStatus) {
            $status = array(
                "status" => $eachStatus,
                "files" => $eachStatus->Status_Files,
                "companyProfile" => $eachStatus->companyData,
                "num_comments" => $eachStatus
                    ->comments
                    ->count(),
                "num_likes" => $eachStatus
                    ->likes
                    ->count(),
            );
            $comments = $eachStatus->comments;
            $likes = $eachStatus->likes;
            foreach ($comments as $comment) {
                $status["comments"] = ["comment" => $comment, "details" => $comment->personProfile];
            }
            foreach ($likes as $like) {
                $status["likes"] = ["like" => $like, "details" => $like->personProfile];
            }

            $statusData[$key]["num_comments"] = $comments->count();
            $statusData[$key]["num_likes"] = $likes->count();

        }
        $this
            ->Status
            ->setSuccess($statusData);
        return $this
            ->Status
            ->getSuccess();
    }
    public function forgetAuthenticationCookies()
    {
        \Cookie::queue(\Cookie::forget("iliua"));
        \Cookie::queue(\Cookie::forget("host_id"));
        \Cookie::queue(\Cookie::forget("host_token"));
        \Cookie::queue(\Cookie::forget("host_type"));
    }
}
