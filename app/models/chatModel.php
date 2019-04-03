<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\normalUsersModel;
class chatModel extends Model
{
    //
    protected $table = "messages";
    public $timestamnps = false;


    public function messageInfo($token, $type='company')
    {
    	if($type === 'company')
    	{
    		$companyModel = new App\models\companydata_model;
    		$info = $companyModel::where('comp_token', $token)->get();
    	}
    	else
    	{
    		$userModel = new App\models\normalUsersModel;
    		$info = $companyModel::where('user_token', $token)->get();
    	}
    	return $info;
    }

    public function userSentMessages()
    {
    	return $this->belogsTo('App\models\normalUsersModel', 'user_token', 'message_host');
    }
    public function chatHistory($userToken)
    {
    	$chatHistory = normalUsersModel::with(['userMessages' => function($q){
    		$q->orWhere('message_target', '39be7f317193084937709dfccddda836');
    	}])->get();
    }
    

}
