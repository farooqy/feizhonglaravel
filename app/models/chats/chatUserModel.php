<?php

namespace App\models\chats;

use Illuminate\Database\Eloquent\Model;

class chatUserModel extends Model
{
    //
    protected $table = "chat_users";
    public $fillable = ["chat_origin_id", "chat_destination_id", "chat_token"];

    public function chats()
    {
    	return $this->hasOne('App\models\chats\chatModel', 'chat_id', 'chat_id');
    }
    public function companyChat()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', ['chat_origin_id', 'chat_destination_id'], 'comp_id');
    }
    public function userChats()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', 'chat_origin_id', 'comp_id');
    }
}
