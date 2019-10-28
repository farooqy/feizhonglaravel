<?php

namespace App\models\session;

use Illuminate\Database\Eloquent\Model;

class SessionModel extends Model
{
    //
    protected $table = "sessions";
    public $fillable = ["user_id", "host_id", "host_token", "host_type",
    "api_key", "iliua", "is_browser", "ip_address", "user_agent", "payload",
    "last_activity"];
    public $timestamps = false;
}
