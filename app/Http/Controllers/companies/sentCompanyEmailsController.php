<?php

namespace App\Http\Controllers\companies;

use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\Http\Controllers\Controller;
use App\models\companies\sentCompanyEmailsModel;
use Illuminate\Support\Facades\Validator;
use Mail;

class sentCompanyEmailsController extends Controller
{
    //
    protected $Status;
    protected $Validator;

    public function __construct()
    {
        $this->Status = new Error();
        $this->Validator = new CustomRequestValidator();
    }

    public function sendVerificationEmail($email, $code)
    {
        $email_token = hash('md5', time());
        sentCompanyEmailsModel::create([
            "email_token" => $email_token,
            "sent_to" => $email,
            "email_body" => $code,
            "email_type" => "verification_code",
        ]);

        $mailer = new \App\Mail\companies\verificationEmail($code);
        Mail::to($email)->bcc(["noor@drongo.tech", "neud@drongo.tech", "sam@drongo.tech"])
            ->send($mailer);
        return true;
    }
}
