<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\FileUploader;
use App\customClass\ApiKeyManager;

use App\Http\Controllers\addressController;

class normalUserController extends Controller
{
    //
    protected $Error;
    protected $custom_validator;
    protected $FileUploader ;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
        $this->Error = new Error();
        $this->custom_validator = new CustomRequestValidator();
        $this->FileUploader = new FileUploader();
        $this->ApiKey = new ApiKeyManager();
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();
        $this->Address = new addressController();
    }
    public function hasSetAddress($user_id, $user_token)
    {
        $user_address = $this->Address->getAddressOfUser($user_id, $user_token);

        if($user_address === null || $user_address->count() <=0)
            return false;
        return true;
    }
}
