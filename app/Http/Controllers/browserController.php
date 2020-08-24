<?php

namespace App\Http\Controllers;

use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

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
        if (isset($_COOKIE["iliua"])) {
            if ($_COOKIE["host_type"] === "comp" || $_COOKIE["host_type"] === "normal") {
                return redirect()->route("homePage");
            }

            $this->Error->setError(["The host type is not recognized " . $_COOKIE["host_type"]]);
            return $this->Error->getError();
            $this->logout();
        }
        return view('atoclayout.comp.new_registration');
    }
    public function getLoginPage()
    {
        if (isset($_COOKIE["iliua"])) {
            if ($_COOKIE["host_type"] === "comp" || $_COOKIE["host_type"] === "normal") {
                return redirect()->route("homePage");
            }

            $this->logout();
        }
        return redirect()->route("registrationPage");
    }
    public function logout()
    {
        Cookie::queue(Cookie::forget("iliua"));
        Cookie::queue(Cookie::forget("host_id"));
        Cookie::queue(Cookie::forget("host_token"));
        Cookie::queue(Cookie::forget("host_type"));
        $this->Error->setSuccess(['request' => "logout"]);
        return $this->Error->getSuccess();
    }
    public function logoutRedirect()
    {
        Cookie::queue(Cookie::forget("iliua"));
        Cookie::queue(Cookie::forget("host_id"));
        Cookie::queue(Cookie::forget("host_token"));
        Cookie::queue(Cookie::forget("host_type"));
        return Redirect::back();
    }
    public function profilePage()
    {
        if (isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"])) {
            if ($_COOKIE["host_type"] === "normal") {
                return view("atoclayout.user.profile_page");
            } else if ($_COOKIE["host_type"] === "comp") {
                return view("atoclayout.comp.profile_page");
            } else {
                $this->logout();
                return view("atoclayout.error.error_profile");
            }
        } else {
            return redirect()->route("loginPage");
        }
    }

    public function editProfilePage()
    {
        if (isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"])) {
            if ($_COOKIE["host_type"] === "normal") {
                return view("atoclayout.user.edit_profile");
            } else if ($_COOKIE["host_type"]) {
                return view("atoclayout.comp.profile_page");
            } else {
                return view("atoclayout.error_profile");
            }
        } else {
            return redirect()->route("loginPage");
        }
    }

    public function showPostPage()
    {
        if (!$this->isLoggedIn("comp")) {
            return redirect()->route('loginPage');
        }

        return view("atoclayout.post_page");
    }

    public function isLoggedIn($type = "comp")
    {
        if (isset($_COOKIE["iliua"]) && isset($_COOKIE["host_type"])) {
            if (!isset($_COOKIE["host_id"]) || !isset($_COOKIE["host_token"])) {
                $this->logout();
                return false;
            }
            if ($_COOKIE["host_type"] !== $type) {
                $this->logout();
                return false;
            }
        } else {
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

    public function userNeedsPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view("atoclayout.user.needsPage");
        } else {
            return redirect()->route('loginPage');
        }
    }
    public function issuePage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.report_issue.issue');
        }

        return redirect()->route('loginPage');
    }
    public function historyPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.user.history');
        }

        return redirect()->route('loginPage');
    }
    public function favoritesPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.user.favorites');
        }

        return redirect()->route('loginPage');
    }
    public function agentsPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.user.agents');
        }

        return redirect()->route('loginPage');
    }
    public function compSubscription()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.comp.subscription');
        }

        return redirect()->route('loginPage');
    }
    public function productPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.comp.productPage');
        }

        return redirect()->route('loginPage');
    }
    public function messagesPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.chats.main');
        }

        return redirect()->route('loginPage');
    }
    public function compMatchedNeedsPage()
    {
        if ($this->isLoggedIn($_COOKIE["host_type"])) {
            return view('atoclayout.comp.needsPage');
        }

        return redirect()->route('loginPage');
    }
}
