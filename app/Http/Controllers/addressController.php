<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\FileUploader;
use App\customClass\ApiKeyManager;

use App\models\userAddressModel;

class addressController extends Controller
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
    }

    public function getAddressOfUser($user_id, $user_token)
    {
        $address =  userAddressModel::where([
            ["user_id", $user_id],
            ["user_token", $user_token]
        ])->get();

        return $address;
    }
}
