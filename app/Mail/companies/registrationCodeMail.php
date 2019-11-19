<?php

namespace App\Mail\companies;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class registrationCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $new_code;
    public $phone_number;
    public function __construct($new_code, $number)
    {
        //
        $this->new_code = $new_code;
        $this->phone_number= $number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.registerCodeCompany');
    }
}
