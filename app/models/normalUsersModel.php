<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\chatModel;
class normalUsersModel extends Model
{
    //

	protected $table = "normal_user";
    protected $hidden = ["user_password"];
    protected $fillable = ["user_fname", "user_sname","user_email", "user_password", "user_phone", "user_token"];

	public function messages($userToken)
	{
		$chatModel = new chatModel;

		$chats = $chatModel::where('message_host', $userToken)->orWhere('message_target' , $userToken)->get();

		return $chats;
	}
	public function sentMessages()
	{
		return $this->hasMany('App\models\chatModel', 'message_host' , 'user_token');
	}
	public function receivedMessages()
	{
		return $this->hasMany('App\models\chatModel', 'message_target' , 'user_token');
	}
	public function chatHistory()
	{
		$sentMessages = $this->sentMessages->toArray();
		$receivedMessages = $this->receivedMessages->toArray();

		$chatHistory = (array_merge($sentMessages, $receivedMessages));
		asort($chatHistory);
		return $chatHistory;

	}
	public function statusComments()
	{
		return $this->hasMany('App\models\status\commentsModel', 'host_id', 'user_id');
	}
	public function statusLikes()
	{
		return $this->hasMany('App\models\status\likesModel', 'host_id', 'user_id');
	}

	public function chats()
	{
		return $this->hasMany('App\models\chats\chatUserModel', 'comp_id', ['chat_destination_id', 'chat_destination_id'])->orWhere('chat_origin_id', $this->chat_origin_id);
	}
	public function isNormal($user_id)
	{
		$isNormal = normalUsersModel::where("user_id", $user_id)->get();
		if($isNormal !== null && $isNormal->count() > 0)
			return true;
		else
			return false;

	}

	public function searchUsers($keywords)
	{
		$items = normalUsersModel::where("user_fname", "LIKE","%$keywords%")->orWhere([
			["user_sname", "LIKE", "%keywords%"],
			["user_phone", "LIKE", "%keywords%"],
			["user_email", "LIKE", "%keywords%"],
		])->get();
		
		return $items;	
	}
}
