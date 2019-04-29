<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\chatModel;
class normalUsersModel extends Model
{
    //

	protected $table = "normal_user";
    protected $hidden = ["comp_pass"];

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
}
