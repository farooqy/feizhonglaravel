<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class generalMailHandler extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mailType;
    public $data;
    public function __construct($mailType, $data)
    {
        //
        $this->mailType = $mailType;
        $this->data= $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->mailType === "passwordChanged")
        {
            $name = $this->data["name"];
            return $this->subject("Password Changed")->view('layouts.passwordChanged', compact("name"));
        }
        else if($this->mailType === "passwordReset")
        {
            $code = $this->data["reset_code"];
            return $this->subject("Password Changed")->view('layouts.passwordReset', compact("code"));
        }
    }
}
