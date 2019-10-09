<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\apiKeyModel;

class browserController extends Controller
{
    //
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    public function __construct()
    {
    	$this->Error = new Error();
    	$this->customValidator = new CustomRequestValidator();
    }
    public function getIndexPage()
    {
      return view("atoc_index");
    }
    public function getRegisterPage(Request $request)
    {
      //Is Logged In User Account = ILIUA
      if(isset($_COOKIE["iliua"]))
      {
        return redirect()->route("homePage");
      }
      else
        return view('atoclayout.register_supplier');
    }
    public function getLoginPage()
    {
      if(isset($_COOKIE["iliua"]))
      {
        return view("atoc_index");
      }
      else
        return redirect()->route("homePage");
    }
    public function logout()
    {
      \Cookie::queue(\Cookie::forget("iliua"));
      \Cookie::queue(\Cookie::forget("host_id"));
      \Cookie::queue(\Cookie::forget("host_token"));
      \Cookie::queue(\Cookie::forget("host_type"));
      $this->Error->setSuccess([]);
      return $this->Error->getSuccess();
    }
}
