<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companydata_model;
use App\models\normalUsersModel;
use App\models\compStatusModel;
use App\models\companyStatusFilesModel;
use App\models\uploadedFilesModel;
use App\models\tokenStatusGeneratorModel;
use App\models\status\commentsModel;
use App\models\status\likesModel;

use Illuminate\Support\Facades\Validator;
// use Intervention\Image\Facades\Image as Image;
use Image;
class statusController extends Controller
{
    //

    public function index()
    {
    	$json = json_encode(array(
    		'errorMessage' => null, 
    		'isSuccess' => false, 
    		'successMessage' => null));
    	return $json;
    }
    public function getStatus (Request $request)
    {
    	$statusData = compStatusModel::where([['status_status' ,'=', 'active']])->get();
        $status = [];
        foreach($statusData as $key => $eachStatus)
        {
            $status = array(
                "status" => $eachStatus,
                "files" => $eachStatus->Status_Files,
                
                "num_comments" => $eachStatus->comments->count(),
                
                "num_likes" => $eachStatus->likes->count(),
            );
            $comments = $eachStatus->comments;
            $likes = $eachStatus->likes;
            foreach($comments as $comment)
            {
                $status["comments"] = ["comment"=>$comment, "details"=> $comment->personProfile];
            }   
            foreach( $likes as  $like)
            {
                $status["likes"] = ["like"=>$like, "details"=> $like->personProfile];
            }

            $statusData[$key]["num_comments"] = $comments->count();
            $statusData[$key]["num_likes"] = $likes->count();

        }
    	return json_encode(["isSuccess"=> true, "errorMessage"=> null,
         "successMessage"=>"success", "data"=>$statusData]);

    }
    public function uploadFile(Request $fileForm)
    {
        $rules = [
            "file_value" => 'required|string',
            'host_id' => 'required|integer',
            'host_token' => 'required|string',
            'host_type' => 'required|in:normal,comp',
            "generated_token" => "required|string"
        ];
        $messages = [
            "required" => "The :attribute is required"
        ];
        $validation = Validator::make($fileForm->all(), $rules, $messages);

        if($validation->fails())
        {
            $errors =$validation->errors();
            $listerrors = [];
            foreach($errors->all() as $error)
                array_push($listerrors, $error);
            return json_encode([
                'errorMessage' => $listerrors, 
                'isSuccess' => false, 
                'successMessage' => null
            ]);
        }    

        //check generated token
        $isvalid_token = $this->is_valid_generated_token($fileForm->generated_token,
            $fileForm->host_id,$fileForm->host_token, $fileForm->host_type);
        if(!$isvalid_token[0])
        {
            return $isvalid_token[1];
        }
        // return $isvalid_token;
        // end checking generated token

        if($fileForm->host_type === "comp")
        {
            $searchModel = new companydata_model;
            $isExisting = $searchModel::where([['comp_id', '=', $fileForm->comp_id],['comp_token', '=', $fileForm->comp_token]]);
        }
        else
        {
            $searchModel = new normalUsersModel;
            $isExisting = $searchModel::where([['user_id', '=', $fileForm->comp_id],['user_token', '=', $fileForm->comp_token]]);
        }
        if($isExisting === null)
        {
            $errors = json_encode([
                'errorMessage' => ["The company id and company token do not match"],
                'isSuccess' => false, 
                'successMessage' => null
            ]);
            return $errors;
        }
        else
        {
            if(!is_dir(public_path('uploads/comp/'.$fileForm->host_token)))
            {
                if(!mkdir(public_path('uploads/comp/'.$fileForm->host_token), 0765, true))
                    return json_encode([
                        'errorMessage' => ["Failed to create directory for the status file"],
                        'isSuccess' => false, 
                        'successMessage' => null
                    ]);
            }
            $allowed_file_types = ["image/jpeg", "image/png", "image/jpg", "video/mp4"];
            $file_extension = ["jpeg", "png", "jpg", "mp4"];
            $file_type =  substr($fileForm->file_value,(strpos($fileForm->file_value, "data:")+5),
             (strpos($fileForm->file_value, ";")-5));
            if(($type_key = array_search($file_type, $allowed_file_types)) === false)
            {
                return json_encode([
                    'errorMessage' => "The file type provided is not valid",
                    'isSuccess' => false, 
                    'successMessage' =>null
                ]);
            }
            else
                $extenstion = $file_extension[$type_key];
            $fileForm->file_value = str_replace("data:".$file_type.";base64", '', $fileForm->file_value);
            $fileForm->file_value = base64_decode($fileForm->file_value);
            $fileUrl = 'uploads/comp/'.$fileForm->host_token.'/status_image_decoded_'.hash('md5', time()).'.'.$extenstion;
            $filepath = public_path($fileUrl);
            // Image::make($fileForm->file('file_value'))->save($filepath);
            \File::put($filepath, $fileForm->file_value);
            $fileModel = new uploadedFilesModel;
            $fileModel->file_url = env('APP_URL').$fileUrl;
            $fileModel->file_uploaded_by_id = $fileForm->host_id;
            $fileModel->file_uploaded_by_who = $fileForm->host_type;
            $fileModel->file_generated_token = $fileForm->generated_token;

            $fileModel->save();
            $fileId = $fileModel::where('file_url', env('APP_URL').$fileUrl)->get()[0]->id;

            return json_encode([
                'errorMessage' => null,
                'isSuccess' => true, 
                'successMessage' => "success",
                "data" => ["file_id" => $fileId]
            ]);
        }
        return $fileForm;
    }
    public function setStatus (Request $statusForm)
    {
        // $statusForm->validate([
        //     'comp_id' => "required|"
        // ]);

        $rules = [
            "host_id" => "required|integer|min:1",
            "status_content" => "required|string|max:1001",
            "host_token" => "required|string|min:30",
            "has_files" => "required|in:0,1|",
            "num_files" => "required|integer|min:0|max:10",
            // "files" => "mimes:jpg, jpeg, png, avi, web, mp4"
            "statusFiles" => "required|string",
            "status_type" => "required|string|in:status,product",
            "status_generated_token" => "required|string",
            "host_type" => "required|in:normal,comp"
        ];
        $messages = [
            "required" => "The :attribute field is required",
            "min" => "The :attribute field content is below the minimum",
            "string" => "The :attribute type is not valid",
            "integer" => "The :attribute type must be integer",
            "mimes" => "The :attribute file type(s) is not valid"
        ];
        // validation form
        $validation = Validator::make($statusForm->all(), $rules, $messages);
        $statusFilesObject = [];
        if($validation->fails())
        {
            $errors = $validation->errors();
            $errors_list = [];
            foreach($errors->all() as $error)
                array_push($errors_list, $error);
            return json_encode(array(
                "errorMessage" => $list_errors,
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        else if($statusForm->num_files <= 0)
        {
            return json_encode(array(
                "errorMessage" => ["An image/video must be uplaoded"],
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        // end validation form

        // check the token is in the database and not used
        $isvalid_token = $this->is_valid_generated_token($statusForm->status_generated_token,
            $statusForm->host_id,$statusForm->host_token, $statusForm->host_type);
        if(!$isvalid_token[0])
        {
            return $isvalid_token[1];
        }
            
        // generated token end

        //check host exist in the database
        if($statusForm->host_type === "normal")
        {
            $hostModel = new normalUsersModel;
            $validHost = $hostModel::where([
                ["user_id", "=", $statusForm->host_id],
                ["user_token", "=", $statusForm->host_token]
            ])->get();
        }    
        else
        {
            $hostModel = new companydata_model;
            $validHost = $hostModel::where([
                ["comp_id", "=", $statusForm->host_id],
                ["comp_token", "=", $statusForm->host_token]
            ])->get();
        }    
        if($validHost === null)
        {
            return json_encode(array(
                "errorMessage" => ["The host id and token do not match "],
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        // end check host 

        //check files
        $fileIds = explode("|", $statusForm->statusFiles);
        // return $fileIds;
        if(count($fileIds) !== (integer)$statusForm->num_files)
        {
            return json_encode(array(
                "errorMessage" => "The file list and given files, do not match",
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        else 
        {
            foreach($fileIds as $fileId)
            {
                $is_valid_file = uploadedFilesModel::where([
                    ['id', $fileId],
                    ['file_uploaded_by_id', $statusForm->host_id],
                    ['file_uploaded_by_who', $statusForm->host_type],
                    ['file_generated_token', $statusForm->status_generated_token]
                ])->get();
                if($is_valid_file == null || $is_valid_file->count() <= 0)
                {
                    return json_encode(array(
                        "errorMessage" => "The files you are trying to add to the status don't exist. Please retry again",
                        "isSuccess" => false,
                        "successMessage" => null,
                    ));
                }
            }
        }
        // end checking file
        try
        {

            $compStatusModel = new compStatusModel;
            $compStatusModel->comp_id = $statusForm->host_id;
            $compStatusModel->comp_token = $statusForm->host_token;
            $compStatusModel->status_content = $statusForm->status_content;
            $compStatusModel->has_files = $statusForm->has_files;
            $compStatusModel->num_files = $statusForm->num_files;
            $compStatusModel->status_generated_token = $statusForm->status_generated_token;

            $compStatusModel->save();

            tokenStatusGeneratorModel::where([
                ['generated_token',$statusForm->status_generated_token],
                ['generated_for_id', $statusForm->host_id]
            ])->update(['generated_completed' => true]);
            // companyStatusFilesModel::insert($statusFilesObject);
            $success = json_encode(array(
                "isSuccess" => true,
                "successMessage" => "success",
                "errorMessage" => null
            ));

            return $success;
        }
        catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;
        }  
    }

    public function is_valid_generated_token($generated_token, $host_id, $host_token, $host_type)
    {
        $valid_generated_token = tokenStatusGeneratorModel::where([
            ['generated_token', '=', $generated_token],
            ['generated_for_id', '=', $host_id],
            ['generated_for_token', '=', $host_token],
            ['generated_for_type', '=', $host_type]
        ])->get();
        
        if($valid_generated_token == null || $valid_generated_token->count() <= 0)
        {
            return [
                false,
                json_encode(array(
                "errorMessage" => ["The provided status token is not valid",],
                "isSuccess" => false,
                "successMessage" => null,
            ))
            ];
        }
        else if($valid_generated_token[0]->generated_completed)
        {
            return[
                false,
                json_encode(array(
                    "errorMessage" => ["The status token has expired. "],
                    "isSuccess" => false,
                    "successMessage" => null,
                ))
         ];
        }
        else
            return [true, null];
    }

    public function writeComment(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
            "comment_text" => "required|string|min:2"
        ];
        $messages = [
            "min" => "The :attribute value provided is less than 2 characters",
            "in" => "The :attribute value given is not valid"
        ];

        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        if($is_valid_request->fails())
        {
            $error_list = [];
            $errors = $is_valid_request->errors();
            foreach($errors->all() as $error)
                array_push($error_list, $error);

            $json = json_encode(array(
                'errorMessage' => $error_list, 
                'isSuccess' => false, 
                'successMessage' => null));
            return $json;
        }
        //is valid status
        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if($status_valid === null || $status_valid->count() <= 0)
            return json_encode([
                "errorMessage" => ["The target status is not valid or doesn't exist"],
                "isSuccess" => false,
                "successMessage" => null,
                "data" => []
            ]);
        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydata_model::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
            return json_encode([
                "errorMessage" => ["The host provided is not valid or doesn't exist"],
                "isSuccess" => false,
                "successMessage" => null,
                "data" => []
            ]);
        return commentsModel::saveComment($request->status_id,
            $request->host_id,$request->host_type, $request->comment_text);
    }
    public function likeStatus(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
        ];
        $messages = [
            "min" => "The :attribute value provided is less than 2 characters",
            "in" => "The :attribute value given is not valid"
        ];

        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        if($is_valid_request->fails())
        {
            $error_list = [];
            $errors = $is_valid_request->errors();
            foreach($errors->all() as $error)
                array_push($error_list, $error);

            $json = json_encode(array(
                'errorMessage' => $error_list, 
                'isSuccess' => false, 
                'successMessage' => null));
            return $json;
        }
        //is valid status
        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if($status_valid === null || $status_valid->count() <= 0)
            return json_encode([
                "errorMessage" => ["The target status is not valid or doesn't exist"],
                "isSuccess" => false,
                "successMessage" => null,
                "data" => []
            ]);
        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydata_model::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
            return json_encode([
                "errorMessage" => ["The host provided is not valid or doesn't exist"],
                "isSuccess" => false,
                "successMessage" => null,
                "data" => []
            ]);
        return likesModel::saveLike($request->status_id,
            $request->host_id,$request->host_type);
    }

}
