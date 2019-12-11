<?php

namespace App\Mail\products;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class quotationGeneratedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $target_name;
    public $quotation_file;
    public function __construct($name, $file)
    {
        //
        $this->target_name = $name;
        $this->quotation_file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('AtoC — New Quotation')->view('mails.products.quotationGenerated')
            ->attach($this->quotation_file['url'], [
                'as' => $this->quotation_file['name'],
                'mime' => 'application/pdf',
            ]);
    }
}
