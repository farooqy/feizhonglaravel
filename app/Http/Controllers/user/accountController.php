<?php

namespace App\Http\Controllers\user;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\Http\Controllers\Controller;
use App\Mail\generalMailHandler;
use App\Mail\userVerificationMail;
use App\models\emailVerificationModel;
use App\models\normalUsersModel;
use App\models\userAddressModel;
use App\models\userInterestModel;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Mail;

class accountController extends Controller
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
    }
    public function apiHandleSet($user_id, $user_token, $api_key)
    {
        return true;
        $userOwnsKey = $this->ApiKey->HasApiKey($user_id, $user_token);
        if (!$userOwnsKey) {
            $this->Error->setError(["The access key is not valid"], -1);
            return $this->Error->getError();
        }
        $apiKeyDetails = $this->ApiKey->getKeyDetails($user_id, $user_token);
        if ($apiKeyDetails[0]->api_key !== $api_key) {
            $this->Error->setError(['Invalid api key']);
            return $this->Error->getError();
        }
        $this->ApiKey->setRequest($apiKeyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
        return true;
    }
    public function resetPassword(Request $request)
    {
        $rules = [
            "host_email" => "required|email",
            "guest_id" => "required|integer",
            "guest_token" => "required|string",
            "api_key" => "required|string",
        ];

        $isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        if (normalUsersModel::where("user_email", $request->host_email)->exists()) {
            $account = normalUsersModel::where("user_email", $request->host_email)->latest()->get();
            $user_id = $account[0]->user_id;
            $user_token = $account[0]->user_token;
            $user_type = "normal";
            $userEmail = $request->host_email;
            $hasCode = emailVerificationModel::where([
                ["user_id", $user_id],
                ["user_token", $user_token],
                ["user_type", $user_type],
                ["is_expired", false],
            ])->latest()->get();
            if ($hasCode !== null && $hasCode->count() > 0) {
                $data = ["reset_code" => $hasCode[0]->verification_code];
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

            if ($VerifierModel->save()) {
                $data = ["reset_code" => $verification_code];
                Mail::to($userEmail)->send(new generalMailHandler("passwordReset", $data));
                $this->Error->setSuccess($account);
                // $this->ApiKey->successFullRequest();
                return $this->Error->getSuccess();
            } else {
                $this->Error->setError(["Failed to save the reset code generated"]);
                return $this->Error->getError();
            }
        } else {
            $this->Error->setError(["The account given is invalid"]); //d0oesnt exist
            return $this->Error->getError();
        }
    }

    public function verifyUser(Request $request)
    {

        $rules = [
            "host_email" => "required|email",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "verification_code" => "required|integer",
            "verification_type" => "required|string|in:reset,confirm",
            "api_key" => "required|string",
        ];

        $isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $isValidCode = emailVerificationModel::where([
            ["user_id", $request->host_id],
            ["user_token", $request->host_token],
            ["user_type", $request->host_type],
            ["verification_code", $request->verification_code],
        ])->get();
        if ($isValidCode === null || $isValidCode->count() === 0) {
            $this->Error->setError(["Invalid verification code"]);
            return $this->Error->getError();
        } else if ($isValidCode->count() > 1) {
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
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["The user account is not valid"]);
            return $this->Error->getError();
        } else if ($isValidCode[0]->is_expired) {
            $this->Error->setError(["The user verification is not valid or has expired"]);
            return $this->Error->getError();
        }
        if ($request->verification_type === "confirm") {
            if ($user[0]->is_verified) {
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
            // $this->ApiKey->successFullRequest();
            return $this->Error->getSuccess();
        } else {
            $this->Error->setSuccess([$user]);
            return $this->Error->getSuccess();
        }
    }
    public function getUserData(Request $request)
    {
        $rules = [
            "platform" => "required|integer|in:1,2",
            "host" => "required|string|in:normal,comp",
        ];
        $isvalid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        if (!$request->cookie("iliua") && $request->platform === 1) {
            $this->Error->setError(["Authentication error. Please login "]);
            return $this->Error->getError();
        } else if ((int)$request->platform === 2) {
            if ($request->user_id == null || $request->user_token === null) {
                $this->Error->setError(["Authentication error. Provide user id and user token"]);
                return $this->Error->getError();
            }
            $user_id = $request->user_id;
            $user_token = $request->user_token;
        } else {
            $user_id = $request->cookie("host_id");
            $user_token = $request->cookie("host_token");
        }

        if ($user_id === null || $user_token === null) {
            $this->Error->setError(["Authentication details incomplete. Please login"]);
            return $this->Error->getError();
        }
        $data = normalUsersModel::Where([
            ["user_id", $user_id],
            ["user_token", $user_token],
        ])->get();
        if ($data === null || $data->count() <= 0) {
            $this->Error->setError(["The Authentication details is invalid "]);
            return $this->Error->getError();
        }
        $data[0]->num_quotations = $data[0]->numberOfQuotations($data[0]->user_id);
        $this->Error->setSuccess($data);
        return $this->Error->getSuccess();
    }
    public function userLogin(Request $request)
    {
        $rules = [
            "user_email" => "required|email",
            "user_password" => "required|string",
            "guest_id" => "required|integer", //api key purpose
            "guest_token" => "required|string", //api key purpose,
            "api_key" => "required|string",
        ];
        $messages = [
            "required" => "The :attribute is required",
        ];
        // $hashpass = hash('md5', $request->user_password);

        $hashpass = Hash::make($request->user_password);
        $valid_request = Validator::make($request->all(), $rules, $messages);
        if ($notValid = $this->custom_validator->isNotValidRequest($valid_request)) {
            return $notValid;
        }

        //once user logs in his api_id and api_token will be overwritten
        //with user api_id and api_token
        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $data = normalUsersModel::where([
            ["user_email", "=", $request->user_email],
        ])->get();
        if ($data === null || $data->count() <= 0) {
            $this->Error->setError(["The user email and password do not match "]);
            return $this->Error->getError();
        } else if (Hash::check($request->user_password, $data[0]->user_password)) {
            $this->Error->setSuccess($data);
            // $this->ApiKey->successFullRequest();
            $this->ApiKey->updateKeys($request->guest_id, $request->guest_token, $data[0]->user_id, $data[0]->user_token, "normal");
            if ($request->cookie("is_browser")) {
                $min = 60 * 24 * 360;
                $data[0]->api_key = $request->cookie("api_key");
                $response = response(
                    $this->Error->getSuccess()
                )
                    ->cookie("host_id", $data[0]->user_id, $min)
                    ->cookie("host_token", $data[0]->user_token, $min)
                    ->cookie("host_type", "normal", $min)
                    ->cookie("iliua", true, $min);
                return $response;
            }
            return $this->Error->getSuccess();
        } else {
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
            "guest_id" => "required|integer",
            "guest_token" => "required|string",
            "api_key" => "required|string",
        ];

        $messages = [];

        $validator = Validator::make($request->all(), $rules, $messages);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($validator);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }
        $apiset = $this->apiHandleSet($request->guest_id, $request->guest_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $normalUsersModel = new normalUsersModel;
        $normalUsersModel->user_fname = $request->user_firstName;
        $normalUsersModel->user_sname = $request->user_lastName;
        $normalUsersModel->user_email = $request->user_email;
        $normalUsersModel->user_phone = $request->user_phone;
        $normalUsersModel->user_password = Hash::make($request->password);
        $normalUsersModel->user_token = hash('md5', time() . "" . $request->user_email);
        $normalUsersModel->user_profile = env('APP_URL') . '/img/user_icon.png';

        if ($normalUsersModel->save()) {
            $data = normalUsersModel::where("user_email", $request->user_email)->get();
            $this->ApiKey->updateKeys($request->guest_id, $request->guest_token, $data[0]->user_id, $data[0]->user_token, "normal");
            // $this->ApiKey->successFullRequest();
            $min = 24 * 60 * 360;
            if ($request->cookie("is_browser")) {
                $response = response(
                    $this->sendConfirmationEmail($request->user_email, $data[0]->user_id, $data[0]->user_token, "normal")
                )
                    ->cookie("host_id", $data[0]->user_id, $min)
                    ->cookie("host_token", $data[0]->user_token, $min)
                    ->cookie("host_type", "normal", $min)
                    ->cookie("iliua", true, $min);
                return $response;
            }

            return $this->sendConfirmationEmail($request->user_email, $data[0]->user_id, $data[0]->user_token, "normal");
            // $this->Error->setSuccess($data[0]);
            // return $this->Error->getSuccess();
        } else {
            $this->Error->setError(["Failed to register the user "]);
            return $this->Error->getError();
        }
    }

    public function emailConfirmation(Request $request)
    {
        $rules = [
            "host_email" => "required|email",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string",
        ];

        $isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        return $this->sendConfirmationEmail($request->host_email, $request->host_id, $request->host_token, $request->host_type);
    }

    public function sendConfirmationEmail($userEmail, $user_id, $user_token, $user_type)
    {

        $isValidUser = normalUsersModel::where([
            ["user_id", $user_id],
            ["user_token", $user_token],
            ["user_email", $userEmail],
        ])->get();
        if ($isValidUser === null || $isValidUser->count() <= 0) {
            $this->Error->setError(["The user account doest not exist"]);
            return $this->Error->getError();
        }
        $hasCode = emailVerificationModel::where([
            ["user_id", $user_id],
            ["user_token", $user_token],
            ["user_type", $user_type],
            ["is_expired", false],
        ])->latest()->get();
        if ($hasCode !== null && $hasCode->count() > 0) {
            if (!$hasCode[0]->is_expired) {
                Mail::to($userEmail)->send(new userVerificationMail($hasCode[0]->verification_code, $isValidUser[0]->user_fname));
                // $this->ApiKey->successFullRequest();
                $this->Error->setSuccess([$isValidUser]);
                return $this->Error->getSuccess();
            }
        }

        if ($isValidUser[0]->is_verified) {
            $this->Error->setError(["This account email is already verified"]);
            return $this->Error->getError();
        }
        $VerifierModel = new emailVerificationModel;
        $verification_code = $VerifierModel->generateVerifCode($user_id, $user_token);

        $VerifierModel->user_id = $user_id;
        $VerifierModel->user_token = $user_token;
        $VerifierModel->user_type = $user_type;
        $VerifierModel->verification_code = $verification_code;

        if ($VerifierModel->save()) {
            Mail::to($userEmail)->send(new userVerificationMail($verification_code, $isValidUser[0]->user_fname));
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess($isValidUser);
            return $this->Error->getSuccess();
        } else {
            $this->Error->setError(["Failed to save the verification code generated"]);
            return $this->Error->getError();
        }
    }

    public function getUserQuotations(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp",
        ];
        $is_valid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $is_valid_user = normalUsersModel::where([
            ["user_id", $request->host_id],
            ["user_token", $request->host_token],
        ])->get();
        if ($is_valid_user === null || $is_valid_user->count() <= 0) {
            $this->Error->setError(["The user profile could not be verified to get quotations"]);
            return $this->Error->getError();
        }
        $quotations = $is_valid_user[0]->userQuotations;

        $this->Error->setSuccess([$quotations]);
        return $this->Error->getSuccess();
    }

    public function updateUserInfo(Request $request)
    {
        $rules = [
            "updateField" => "required|string|in:userFirstName,userLastName,userPhoneNumber,userEmail,userPassword",
            "updateValue" => "required|string|min:4",
            "userToken" => "required|string",
            "userId" => "required|integer",
            "api_key" => "required|string",
        ];
        $isNotValidRequest = $this->custom_validator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->userId, $request->userToken, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        switch ($request->updateField) {
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
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["Could not verify your profile "]);
            return $this->Error->getError();
        } else if ($user[0]->user_fname === $request->updateValue) {
            $this->Error->setError(["You provided same name "]);
            return $this->Error->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->userId],
                ["user_token", $request->userToken],
            ])->update(["user_fname" => $request->updateValue]);
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
            return $this->Error->getSuccess();
        }
    }
    public function updateLastName($request)
    {
        $user = $this->getDataOfUser($request->userId, $request->userToken);
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["Could not verify your profile "]);
            return $this->Error->getError();
        } else if ($user[0]->user_sname === $request->updateValue) {
            $this->Error->setError(["You provided same name "]);
            return $this->Error->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->userId],
                ["user_token", $request->userToken],
            ])->update(["user_sname" => $request->updateValue]);
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
            return $this->Error->getSuccess();
        }
    }

    public function updateEmail($request)
    {
        $user = $this->getDataOfUser($request->userId, $request->userToken);
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["Could not verify your profile "]);
            return $this->Error->getError();
        } else if ($user[0]->user_email === $request->updateValue) {
            $this->Error->setError(["You provided same email "]);
            return $this->Error->getError();
        }
        $existingEmail = normalUsersModel::where(
            "user_email",
            $request->updateValue
        )->exists();
        if ($existingEmail) {
            $this->Error->setError(["The updated email cannot be used"]);
            return $this->Error->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->userId],
                ["user_token", $request->userToken],
            ])->update(["user_email" => $request->updateValue, "is_verified" => false]);
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
            return $this->Error->getSuccess();
        }
    }
    public function updatePhone($request)
    {
        $user = $this->getDataOfUser($request->userId, $request->userToken);
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["Could not verify your profile "]);
            return $this->Error->getError();
        } else if ($user[0]->user_phone === $request->updateValue) {
            $this->Error->setError(["You provided same phone number "]);
            return $this->Error->getError();
        }
        $existingphone = normalUsersModel::where(
            "user_phone",
            $request->updateValue
        )->exists();
        if ($existingphone) {
            $this->Error->setError(["The phone number provided cannot be used"]);
            return $this->Error->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->userId],
                ["user_token", $request->userToken],
            ])->update(["user_phone" => $request->updateValue]);
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
            return $this->Error->getSuccess();
        }
    }
    public function updatePassword($request)
    {
        $user = $this->getDataOfUser($request->userId, $request->userToken);
        $hashpass = Hash::make($request->updateValue);
        if ($user === null || $user->count() !== 1) {
            $this->Error->setError(["Could not verify your profile "]);
            return $this->Error->getError();
        } else if (Hash::check($data[0]->user_password, $hashpass)) {
            $this->Error->setError(["You provided same phone number "]);
            return $this->Error->getError();
        } else {
            normalUsersModel::where([
                ["user_id", $request->userId],
                ["user_token", $request->userToken],
            ])->update(["user_password" => $hashpass]);
            $data = ["name" => $user[0]->user_fname];
            Mail::to($user[0]->user_email)->send(new generalMailHandler("passwordChanged", $data));
            // $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["fieldName" => $request->updateField, "fieldValue" => $request->updateValue]);
            return $this->Error->getSuccess();
        }
    }

    public function getDataOfUser($userId, $userToken)
    {
        return normalUsersModel::where([
            ["user_id", $userId],
            ["user_token", $userToken],
        ])->get();
    }

    public function updateUserAddress(Request $request)
    {
        $rules = [
            "address" => "required|string",
            "province_state" => "required|string|max:56",
            "city" => "required|string|max:46",
            "country" => "required|string|max:46",
            "postal_code" => "required|string|max:8",
            "user_id" => "required|integer",
            "user_token" => "required|string",
        ];

        $isValidUser = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isValidUser);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        } else if ($request->cookie("is_browser") === null || $_COOKIE["is_browser"] === null) {
            if (
                $request->cookie("iliua") === null || $request->cookie("host_id") === null ||
                $request->cookie("host_token") === null
            ) {
                $this->Error->setError(["Authentication error, user details not set"]);
                return $this->Error->getError();
            } else if (
                $request->cookie("host_id") !== $request->user_id ||
                $request->cookie("host_token") !== $request->host_token
            ) {
                $this->Error->setError(["Authentication data not valid"]);
                return $this->Error->getError();
            }
        }

        $userAddress = userAddressModel::where([
            ["user_id", $request->user_id],
            ["user_token", $request->user_token],
        ])->get();
        if ($userAddress->count() <= 0) {
            userAddressModel::create([
                "address" => $request->address,
                "province_state" => $request->province_state,
                "city" => $request->city,
                "country" => $request->country,
                "postal_code" => $request->postal_code,
                "about_user" => '',
                "user_id" => $request->user_id,
                "user_token" => $request->user_token,
            ]);
            $this->Error->setSuccess([]);
            return $this->Error->getSuccess();
        } else {
            userAddressModel::where([
                ["user_id", $request->user_id],
                ["user_token", $request->user_token],
            ])->update([
                "address" => $request->address,
                "province_state" => $request->province_state,
                "city" => $request->city,
                "country" => $request->country,
                "postal_code" => $request->postal_code,
            ]);
            $this->Error->setSuccess([]);
            return $this->Error->getSuccess();
        }
    }
    public function updateUserAboutMe(Request $request)
    {
        $rules = [
            "user_id" => "required|integer",
            "user_token" => "required|string",
            "about_me" => "required|string|max:600",
        ];
        $isValidUser = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isValidUser);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        } else if ($request->cookie("is_browser") === null || $_COOKIE["is_browser"] === null) {
            if (
                $request->cookie("iliua") === null || $request->cookie("host_id") === null ||
                $request->cookie("host_token") === null
            ) {
                $this->Error->setError(["Authentication error, user details not set"]);
                return $this->Error->getError();
            } else if (
                $request->cookie("host_id") !== $request->user_id ||
                $request->cookie("host_token") !== $request->host_token
            ) {
                $this->Error->setError(["Authentication data not valid"]);
                return $this->Error->getError();
            }
        }
        $userAddress = userAddressModel::where([
            ["user_id", $request->user_id],
            ["user_token", $request->user_token],
        ])->get();
        if ($userAddress->count() <= 0) {
            userAddressModel::create([
                "about_user" => '',
                "user_id" => $request->user_id,
                "user_token" => $request->user_token,
            ]);
            $this->Error->setSuccess([]);
            return $this->Error->getSuccess();
        } else {
            userAddressModel::where([
                ["user_id", $request->user_id],
                ["user_token", $request->user_token],
            ])->update([
                "about_user" => $request->about_me,
            ]);
            $this->Error->setSuccess([]);
            return $this->Error->getSuccess();
        }
    }
    public function setUserInterest(Request $request)
    {
        $rules = [
            "user_token" => "required|string",
            "user_id" => "required|integer",
            "user_interests" => "required|string",
            "api_key" => "required|string",
        ];

        $isvalid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isvalid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $isValidUser = normalUsersModel::where([
            ["user_id", $request->user_id],
            ["user_token", $request->user_token],
        ])->exists();
        if (!$isValidUser) {
            $this->Error->setError(['The user is not yet registered, or details are not valid']);
            return $this->Error->getError();
        }
        $apiset = $this->apiHandleSet($request->user_id, $request->user_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $interests = explode(",", $request->user_interests);
        // $subInterest = explode("|", $intereset);

        if ($interests === false) {
            $this->Error->setError(["The interest data format is not valid"]);
            return $this->Error->getError();
        }
        foreach ($interests as $interest) {
            $subInterest = explode("|", $interest);
            if ($subInterest === false) {
                $this->Error->setError(["The sub-interest data format is not valid"]);
                return $this->Error->getError();
            }
            foreach ($subInterest as $skey => $subInt) {
                if ($skey === 0) {
                    continue;
                }
                //the first one is the interest category and is saved as the category
                $interestExist = userInterestModel::where([

                    ["interest_user_id", $request->user_id],
                    ["interest_user_token", $request->user_token],
                    ["interest_cat", $subInterest[0]],
                    ["interest_value", $subInt],
                ])->exists();
                if ($interestExist) {
                    continue;
                }

                userInterestModel::create([
                    "interest_user_id" => $request->user_id,
                    "interest_user_token" => $request->user_token,
                    "interest_cat" => $subInterest[0],
                    "interest_value" => $subInt,
                ]);
            }
        }
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();
    }
    public function getUserAddress(Request $request)
    {
        $rules = [
            "user_id" => "required|integer",
            "user_token" => "required|string",
        ];

        $isValidUser = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($isValidUser);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $address = userAddressModel::where([
            ["user_id", $request->user_id],
            ["user_token", $request->user_token],
        ])->get();
        if ($address === null) {
            $this->Error->setError(["Could not fetch the address of the user"]);
            return $this->Error->getError();
        }
        $this->Error->setSuccess($address);
        return $this->Error->getSuccess();
    }

    public function updateUserProfile(Request $request)
    {
        $rules = [
            "profile_picture" => "required|string",
            "user_id" => "required|integer",
            "user_token" => "required|string",
        ];

        $is_valid_request = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->custom_validator->isNotValidRequest($is_valid_request);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        } else if ($request->cookie("is_browser") === null || $_COOKIE["is_browser"] === null) {
            if (
                $request->cookie("iliua") === null || $request->cookie("host_id") === null ||
                $request->cookie("host_token") === null
            ) {
                $this->Error->setError(["Authentication error, user details not set"]);
                return $this->Error->getError();
            } else if (
                $request->cookie("host_id") !== $request->user_id ||
                $request->cookie("host_token") !== $request->host_token
            ) {
                $this->Error->setError(["Authentication data not valid"]);
                return $this->Error->getError();
            }
        }
        $dir = "uploads/users/" . $request->user_token . "/profile/";
        if (env("APP_ENV") === "local") {
            $user_directory = public_path($dir);
        } else {
            $user_directory = env("APP_ROOT") . $dir;
        }

        $filename = hash('md5', time()) . "_profile_.";

        $this->FileUploader->setFilePath($user_directory);
        $this->FileUploader->setFileDirectory($dir); //path with url
        $this->FileUploader->setFileName($filename);

        $file_url = $this->FileUploader->uplaodJsonFile($request->profile_picture);
        if ($file_url === false) {
            $this->Error->setError($this->FileUploader->getError());
            return false;
        } else {
            normalUsersModel::where([
                ["user_id", $request->user_id],
                ["user_token", $request->user_token],
            ])->update([
                "user_profile" => $file_url,
            ]);
            $this->Error->setSuccess(["user_profile" => $file_url]);
            return $this->Error->getSuccess();
        }
    }

    /*********************************************/
    /*********************************************/
    // these are new apis that require api key V2
    /*********************************************/
    /*********************************************/
    /*********************************************/
    /*********************************************/
    public function updateUserPassword(Request $request)
    {
        $rules = [
            "host_id" => "required|integer|exists:normal_user,user_id",
            "host_token" => "required|string|exists:normal_user,user_token",
            "old_password" => "required|string|max:255",
            "password" => "required|string|max:255|confirmed",
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $this->Error->setError([$validator->errors()->first()]);
            return $this->Error->getError();
        }

        $user = normalUsersModel::where([
            ["user_id", $request->host_id],
            ["user_token", $request->host_token],
        ])->get();

        if ($user == null || $user->count() <= 0) {
            $this->Error->setError(["Could not verify your account. Failed to change password"]);
            return $this->Error->getError();
        }
        $user = $user[0];
        $validated = $validator->validated();

        if (!Hash::check($validated["old_password"], $user->user_password)) {
            $this->Error->setError(["The old password is not correct"]);
            return $this->Error->getError();
        }

        $new_password = Hash::make($validated["password"]);

        $user->update([
            "user_password" => $new_password
        ]);

        $this->Error->setSuccess();
        return $this->Error->getSuccess();
    }


    public function updateUserInfoV2(Request $request)
    {
        $rules = [
            "updateField" => "required|string|in:userFirstName,userLastName,userPhoneNumber,userEmail,userPassword",
            "updateValue" => "required|string|min:4",
            "userToken" => "required|string",
            "userId" => "required|integer",
            "api_key" => "required|string",
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $this->Error->setError([$validator->errors()->first()]);
            return $this->Error->getError();
        }


        switch ($request->updateField) {
            case "userFirstName":
                return $this->updateFirstName($request);
            case "userLastName":
                return $this->updateLastName($request);
            case "userEmail":
                return $this->updateEmail($request);
            case "userPhoneNumber":
                return $this->updatePhone($request);
            default:
                $this->Error->setError(["The update field type is not valid"]);
                return $this->Error->getError();
        }
    }
    public function userLoginV2(Request $request)
    {
        $rules = [
            "user_email" => "required|email",
            "user_password" => "required|string",
            "guest_id" => "required|integer", //api key purpose
            "guest_token" => "required|string", //api key purpose,
        ];
        $messages = [
            "required" => "The :attribute is required",
        ];
        // $hashpass = hash('md5', $request->user_password);

        $hashpass = Hash::make($request->user_password);
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $this->Error->setError([$validator->errors()->first()]);
            return $this->Error->getError();
        }

        $data = normalUsersModel::where([
            ["user_email", "=", $request->user_email],
        ])->get();
        if ($data === null || $data->count() <= 0) {
            $this->Error->setError(["The user email and password do not match "]);
            return $this->Error->getError();
        } else if (Hash::check($request->user_password, $data[0]->user_password)) {
            $this->Error->setSuccess($data);

            return $this->Error->getSuccess();
        } else {
            $this->Error->setError(["The user password and email do not match "]);
            return $this->Error->getError();
        }
    }
}
