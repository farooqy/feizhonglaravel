<?php

namespace App\Http\Controllers\companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\companies\companydataModel;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\FileUploader;
use App\customClass\ApiKeyManager;
class matchedNeedsController extends Controller
{
    //
	public $error = null;
	public $success = null;
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
    
}
