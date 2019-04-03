<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatController extends Controller
{
    //


    public function getHistory(Request $reqForm)
    {
    	$validation = $reqForm->validate([
    		'given_token' => 'required|string',
    		'given_type' => 'required|in:company,user'
    	]);
    	if($validation->fails)
    	{
    		return $validation->errors()->toJson();
    	}
    	else
    	{
    		return json_encode(array('success', 'wagwan'));
    	}
    }
}
