<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\FileUploader;

use App\models\companies\companydataModel;
use App\models\normalUsersModel;
use App\models\chats\chatModel;;
use App\models\chats\chatUserModel;
class chatController extends Controller
{
    //
    protected $Error;
    protected $customValidator;
    protected $FileUploader;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->FileUploader = new FileUploader();
    }
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
    public function sendMessage(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_type" => "required|in:comp,normal",
            "message" => "required|string",
            "message_type" => "required|in:text,video,image,document",
            "target_id" => "required|integer",
            "target_type" => "required|in:comp,normal" 
        ];
        $message = [
            "in" => "The :attribute given is not valid"
        ];

        $is_not_valid_request = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $message));
        if($is_not_valid_request)
        {
            return $is_not_valid_request;
        }
        //isvalid host
        if($request->host_type === "comp")
        {
            $hostdata = companydataModel::where('comp_id', $request->host_id)->get();
            if($hostdata === null || $hostdata->count() <= 0)
            {
                $this->Error->setError(['The host id is not valid']);
                return $this->Error->getError();
            }
        }    
        else
        {
            $hostdata = normalUsersModel::where('user_id', $request->host_id)->get();
            if($hostdata === null || $hostdata->count() <= 0)
            {
                $this->Error->setError(['The host id given is not valid']);
                return $this->Error->getError();
            }
        }
        //is valid target id
        if($request->target_type === "comp")
        {
            $hostdata = companydataModel::where('comp_id', $request->target_id)->get();
            if($hostdata === null || $hostdata->count() <= 0)
            {
                $this->Error->setError(['The target id is not valid']);
                return $this->Error->getError();
            }
        }    
        else
        {
            $hostdata = normalUsersModel::where('user_id', $request->target_id)->get();
            if($hostdata === null || $hostdata->count() <= 0)
            {
                $this->Error->setError(['The target id given is not valid']);
                return $this->Error->getError();
            }
        }
        //if there is file, handle the file
        if($request->message_type !== "text")
        {
            $is_uploaded = $this->FileUploader->uplaodJsonFile($request->message);
            if(!$is_uploaded)
                return $this->FileUploader->getError();
            $request->message = $is_uploaded;
        }
        try 
        {
            //check if previous chat existed
            $previousChat = chatUserModel::where([
                ['chat_origin_id', $request->host_id],
                ['chat_destination_id', $request->target_id]
            ])->orwhere([
                ['chat_origin_id', $request->target_id],
                ['chat_destination_id', $request->host_id]
            ])->skip(0)->take(1)->get();
            if($previousChat === null || $previousChat->count() <= 0)
            {
                $chat_token = hash('md5', time()).time();//used for geeting chat id
                chatUserModel::create([
                    "chat_origin_id" => $request->host_id,
                    "chat_destination_id" => $request->target_id,
                    "chat_token" => $chat_token,
                ]);
                $chat_id = chatUserModel::where('chat_token', $chat_token)->get();
                if($chat_id === null || $chat_id->count() <= 0)
                {
                    $this->Error->setError(['saved chat id could not be retrieved']);
                    return $this->Error->getError();
                }
            }
            else
                $chat_id = $previousChat;
            
                
            chatModel::create([
                "chat_id" => $chat_id[0]->chat_id,
                "message" => $request->message,
                "message_type" => $request->message_type,
                "message_status" => "sent",
            ]);
            $this->Error->setSuccess(['success']);
            return $this->Error->getSuccess();
        } 
        catch(\Illuminate\Database\QueryException $exception)
        {
            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();

        }
        catch (Exception $e) 
        {
            $this->Error->setError(['Failed to send  message db error',$exception->errorInfo]);
            return $this->Error->getError();
        }
    }
}
