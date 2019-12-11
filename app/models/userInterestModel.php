<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class userInterestModel extends Model
{
    //
    protected $table = "user_interests";
    public $fillable = ["interest_user_token", "interest_user_id", "interest_cat", "interest_value"];
    
}
