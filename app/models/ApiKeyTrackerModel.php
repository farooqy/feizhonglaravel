<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ApiKeyTrackerModel extends Model
{
    //
    protected $table = "api_tracker";
    public $fillable = ["api_id", "api_request_route", "api_host_ipaddress", "is_successful_request"];
}
