<?php

namespace App\Mail\companies;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class completedRegistrationMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $comp_name;
    public $comp_email;
    public $comp_phone;
    public function __construct($company)
    {
        //
        $this->comp_name = $company[0]->comp_name;
        $this->comp_email = $company[0]->comp_email;
        $this->comp_phone = $company[0]->comp_phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome — Africa to China')->view('mails.companies.welcome');
    }
}
