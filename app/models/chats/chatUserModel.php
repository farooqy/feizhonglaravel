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
    	return $this->hasMany('App\models\chats\chatModel', 'chat_id', 'chat_id');
    }
    public function companySent()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', 'chat_origin_id', 'comp_id');
    }
    public function companyReceived()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', 'chat_destination_id', 'comp_id');
    }
    public function companyChat()
    {
    	if($this->companySent === null)
    		return $this->companyReceived();
    	else
    		return $this->companySent();
    }
    public function userSent()
    {
    	return $this->belongsTo('App\models\normalUsersModel', 'chat_origin_id', 'user_id');
    }
    public function userReceived()
    {
    	return $this->belongsTo('App\models\normalUsersModel', 'chat_destination_id', 'user_id');
    }
    public function userChat()
    {
    	if($this->userSent === null)
    		return $this->userReceived();
    	else
    		return $this->userSent();
    }
}
