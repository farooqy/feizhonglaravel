<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class emailVerificationModel extends Model
{
    //
    protected $table = "email_verification";
    public $fillable = ["user_id", "user_token", "user_type", "verification_code"];


    public function generateVerifCode($user_id, $user_token)
    {
    	$new_code = mt_rand(100000, 99999999);
    	if(emailVerificationModel::code_exists($new_code, $user_id, $user_token))
    		generateVerifCode();
    	return $new_code;
    }

    private function code_exists($code, $id, $token)
    {
    	return emailVerificationModel::where([
    		['verification_code', $code],
    		['user_id', $id],
    		['user_token', $token],
    	])->exists();
    }
}
