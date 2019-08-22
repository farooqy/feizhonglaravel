<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class apiKeyModel extends Model
{
    //
    protected $table = "apikey";
    public $fillable = ["api_key", "is_expired", "api_host_id", "api_host_token", "api_host_type",
						"phone_serial_number", "phone_model_number", "phone_id_number", "phone_manufacture",
						"phone_brand", "phone_type", "phone_user", "phone_base", "phone_sdk_version",
						"phone_host", "phone_fingerprint", "phone_release", "phone_ip_address", "phone_mac_address"];
}
