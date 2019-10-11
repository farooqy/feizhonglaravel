<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class userAddressModel extends Model
{
    //
    protected $table = "user_address";
    public $fillable = [
      "user_id", "user_token", "address", "province_state",
      "city", "country", "postal_code",
    ];
}
