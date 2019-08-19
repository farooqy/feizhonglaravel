<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class phoneVerificationModel extends Model
{
    //
    protected $table = "phone_verification";
    public $fillable =[
    	"target_phone","verification_code"
    ];

    public static function generateVerifCode()
    {
    	$new_code =  mt_rand(100000, 99999999);
    	if(phoneVerificationModel::code_exists($new_code))
    		generateVerifCode();
    	return $new_code;
    }

    private static function code_exists($code)
    {
    	return phoneVerificationModel::where('verification_code', $code)->exists();
    }
}
