<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class compEmailVerificationModel extends Model
{
    //
    protected $table = 'comp_email_verification';
    protected $fillable = [
        'verification_token', 'verification_code', 'comp_email', 'is_expired'
    ];
}
