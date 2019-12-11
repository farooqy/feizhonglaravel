<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class browserDetailsModel extends Model
{
    //
    protected $table = "browser_details";
    protected $fillable = [
      "os_name", "os_version", "browser_name","browser_version",
      "navigator_userAgent", "navigator_appVersion",
      "navigator_platform", "navigator_vendor",
      "api_host_id", "api_host_token", "api_host_type",
      "api_key", "host_ip_address"
    ];
}
