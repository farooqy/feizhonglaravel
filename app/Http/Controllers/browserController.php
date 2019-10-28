<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\models\apiKeyModel;
use App\models\session\SessionModel;

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
        if($_COOKIE["host_type"] === "comp" || $_COOKIE["host_type"] === "normal")
          return redirect()->route("homePage");

        $this->logout();
      }
      return view('atoclayout.register_supplier');
    }
    public function getLoginPage()
    {
      if(isset($_COOKIE["iliua"]))
      {
        if($_COOKIE["host_type"] === "comp" || $_COOKIE["host_type"] === "normal")
          return redirect()->route("homePage");

        $this->logout();
      }
      return redirect()->route("registrationPage");
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
    public function profilePage()
    {
      if(isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"]))
      {
        if($_COOKIE["host_type"] === "normal")
          return view("atoclayout.user.profile_page");
        else if($_COOKIE["host_type"] === "comp")
        {
          return view("atoclayout.comp.profile_page");
        }
        else
        {
          $this->logout();
          return view("atoclayout.error.error_profile");
        }
      }
      else {
        return redirect()->route("loginPage");
      }
    }

    public function editProfilePage()
    {
      if(isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"]))
      {
        if($_COOKIE["host_type"] === "normal")
          return view("atoclayout.user.edit_profile");
        else if($_COOKIE["host_type"])
        {
          return view("atoclayout.comp.profile_page");
        }
        else
        {
          return view("atoclayout.error_profile");
        }
      }
      else {
        return redirect()->route("loginPage");
      }
    }

    public function showPostPage()
    {
      if(!$this->isLoggedIn("comp"))
      {
        return redirect()->route('loginPage');
      }

      return view("atoclayout.post_page");

    }

    public function isLoggedIn($type="normal")
    {
      if(isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"]))
      {
        if(!isset($_COOKIE["host_id"]) || !isset($_COOKIE["host_token"]))
        {
          $this->logout();
          return false;
        }
        if($_COOKIE["host_type"] !== $type)
        {
          $this->logout();
          return false;
        }
      }
      else {
        return false;
      }

      return true;
    }
    public function viewCompany($comp_id, $comp_token)
    {
      return view("atoclayout.comp.single_comp_view");
    }

    public function listCompanies()
    {
      return view("atoclayout.listcomp_page");
    }
}
