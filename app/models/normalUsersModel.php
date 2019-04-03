<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\chatModel;
class normalUsersModel extends Model
{
    //

	protected $table = "normal_user";

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
}
