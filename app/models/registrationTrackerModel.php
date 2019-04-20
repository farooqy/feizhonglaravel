<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class registrationTrackerModel extends Model
{
    //
    protected $table = "registration_tracker";
    public $fillable = ["comp_token", "stage"];
}
