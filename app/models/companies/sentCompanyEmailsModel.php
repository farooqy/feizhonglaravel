<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class sentCompanyEmailsModel extends Model
{
    //
    protected $table = 'sent_company_email';
    protected $fillable = [
        "email_token", "sent_to", "email_body", "email_type",
    ];
}
