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
    public function MarkMessageStatusRead(Request $request)
    {
        $rules = [
            "chat_id" => "required|integer",
            "message_id" => "required|integer",
            "message_target_id" => "required|integer",
            "message_target_token" => "required|string",
        ];

        if($isNotValidRequest= $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, [])))
            return $isNotValidRequest;

        chatModel::where([
            ["chat_id", $request->chat_id],
            ["id", $request->message_id],
            ["message_target_id", $request->message_target_id],
            ["message_target_token", $request->message_target_token],
        ])->update(["message_status" => "read"]);

        $this->Error->setSuccess(["success"]);
        return $this->Error->getSuccess();
    }
    public function getSpecificChat(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string|min:20",
            "host_type" => "required|in:normal,comp",
            "target_id" => "required|integer",
            "target_token" => "required|string|min:20",
            "target_type" => "required|in:normal,comp"
        ];
        if($isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, [])))
        {
            return $isNotValidRequest;
        }

        $isNotValidHost = $this->isNotValidHost($request);
        if($isNotValidHost)
            return $this->Error->getError();
        if($request->target_type === "comp")
            $isValidTarget = companydataModel::where([
                ["comp_id", $request->target_id],
                ["comp_token", $request->target_token],
            ])->get();
        else
            $isValidTarget = normalUsersModel::where([
                ["user_id", $request->target_id],
                ["user_token", $request->target_token],
            ])->get();
        if($isValidTarget === null || $isValidTarget->count() === 0)
        {
            $this->Error->setError(["Invalid target for chat"]);
            return $this->Error->getError();
        }
        $chat_id = chatUserModel::where([
            ["chat_destination_id", $request->host_id],
            ["chat_destination_token", $request->host_token],
            ["chat_origin_id", $request->target_id],
            ["chat_origin_token", $request->target_token],
        ])->orWhere([
            ["chat_destination_id", $request->target_id],
            ["chat_destination_token", $request->target_token],
            ["chat_origin_id", $request->host_id],
            ["chat_origin_token", $request->host_token],
        ])->get();
        if($chat_id === null || $chat_id->count() === 0)
        {
            $this->Error->setSuccess(["null"]);
            return $this->Error->getSuccess();
        }
        else
        {
            $conversation = chatModel::where([
                ["chat_id", $chat_id[0]->chat_id]
            ])->get();
            return $conversation;
        }


    }
    public function getChatConversation(Request $request)
    {
        $rules = [
            'host_id' => 'required|string',
            'host_token' => 'required|string',
            'host_type' => 'required|in:comp,normal',
            "chat_id" => "required|integer",
        ];
        $message = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if($isNotValidRequest)
            return $isNotValidRequest;
        //is valid host
        if($this->isNotValidHost($request))
            return $this->Error->getError();

        $chats = chatUserModel::where([
            ['chat_id', $request->chat_id],
            ["chat_origin_id", $request->host_id],
            ["chat_origin_token", $request->host_token]
        ])->orWhere([
            ['chat_id', $request->chat_id],
            ["chat_destination_id", $request->host_id],
            ["chat_destination_token", $request->host_token]
        ])->latest()->get();
        foreach($chats as $chat)
        {
            $conversation = $chat->chats;
        }
        $this->Error->setSuccess($chats);
        return $this->Error->getSuccess();
    }
    public function getHistory(Request $request)
    {
    	$rules = [
    		'host_id' => 'required|string',
            'host_token' => 'required|string',
    		'host_type' => 'required|in:comp,normal'
    	];
        $is_not_valid_request = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, []));
        if($is_not_valid_request)
            return $is_not_valid_request;
        if($this->isNotValidHost($request))
            return $this->Error->getError();
        $chats = chatUserModel::where([
            ['chat_origin_id', $request->host_id],
            ['chat_origin_token', $request->host_token],
        ])->
        orWhere([
            ['chat_destination_id', $request->host_id],
            ['chat_destination_token', $request->host_token],
        ])->get();
        foreach($chats as $chat)
        {
            $chat_company = $chat->companyChat;
            $chat_user = $chat->userChat;
            $c = $chat->lastMessage;
            $unread = $chat->unreadMessages;
        }
        $this->Error->setSuccess($chats);
        return $this->Error->getSuccess();
    }
    public function sendMessage(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string|min:10",
            "host_type" => "required|in:comp,normal",
            "message" => "required|string",
            "message_type" => "required|in:text,video,image,document",
            "target_id" => "required|integer",
            "target_token" => "required|string|min:10",
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
                    "chat_origin_token" => $request->host_token,
                    "chat_destination_id" => $request->target_id,
                    "chat_destination_token" => $request->target_token,
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
                "message_target_id" => $request->target_id,
                "message_target_token" => $request->target_token,
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

    protected function isNotValidHost($request)
    {
        if($request->host_type === "comp")
        {
            $is_valid_host = companydataModel::where([
                ['comp_id', $request->host_id],
                ['comp_token', $request->host_token]
            ])->get();
        }
        else
        {
            $is_valid_host = normalUsersModel::where([
                ['user_id', $request->host_id],
                ['user_token', $request->host_token]
            ])->get();
        }
        if($is_valid_host === null || $is_valid_host->count() <= 0)
        {
            $this->Error->setError(['The host id and token do not exist']);
            
            return true;
        }
        else 
            return false;
    }
}
