<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class userVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $verifCode;
    public $userName;
    public function __construct($code, $userName)
    {
        //
        $this->verifCode = $code;
        $this->userName =  $userName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $code = $this->verifCode;
        $name = $this->userName;
        return $this->subject("Welcome to AtoC")->view('layouts.userMailVerification', compact("code", "name"));
    }
}
