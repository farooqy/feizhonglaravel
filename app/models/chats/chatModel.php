<?php

namespace App\models\chats;

use Illuminate\Database\Eloquent\Model;

class chatModel extends Model
{
    //
    protected $table = "chat";
    public $fillable = ["chat_id", "message", "message_type", "message_status", "message_target_id", "message_target_token"];

    public function chatUsers()
    {
    	return $this->belongsTo('App\models\chats\chatUserModel', 'chat_id', 'chat_id');
    }
}
