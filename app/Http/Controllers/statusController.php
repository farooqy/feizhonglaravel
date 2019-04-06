<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companydata_model;
use App\models\normalUsersModel;
use App\models\compStatusModel;
use App\models\companyStatusFilesModel;
use App\models\uploadedFilesModel;
use App\models\tokenStatusGeneratorModel;

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
        foreach($statusData as $eachStatus)
        {
            $status = array(
                "status" => $eachStatus,
                "files" => $eachStatus->Status_Files
            );
        }
    	return $statusData;

    }
    public function uploadFile(Request $fileForm)
    {
        $rules = [
            "file_value" => 'required|mimes:jpg,jpeg,png,avi,web,mp4',
            'host_id' => 'required|integer',
            'host_token' => 'required|string',
            'host_type' => 'required|in:normal,comp',
            "generated_token" => "required|string"
        ];
        $messages = [
            "mimes" => "The :attribute type is not valid",
            "required" => "The :attribute is required"
        ];
        $validation = Validator::make($fileForm->all(), $rules, $messages);

        if($validation->fails())
        {
            $errors =$validation->errors();
            $listerrors = [];
            foreach($errors->all() as $error)
                array_push($listerrors, $error);
            return json_encode(array("error_message" => $listerrors, "error_status" => true));
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
                "comp_id" => "The company id and company token do not match",
                "comp_token" => "The company token and company id do not match",
            ]);
            return $errors;
        }
        else
        {
            if(!is_dir(public_path('uploads/comp/'.$fileForm->host_token)))
            {
                if(!mkdir(public_path('uploads/comp/'.$fileForm->host_token), 0765, true))
                    return json_encode($errors = array('file_value' => 'Failed to create directory for the user' ));
            }
            $fileUrl = 'uploads/comp/'.$fileForm->host_token.'/status_image_'.hash('md5', time()).'.'.$fileForm->file_value->getClientOriginalExtension();
            $filepath = public_path($fileUrl);
            Image::make($fileForm->file('file_value'))->save($filepath);
            $fileModel = new uploadedFilesModel;
            $fileModel->file_url = env('APP_URL').$fileUrl;
            $fileModel->file_uploaded_by_id = $fileForm->host_id;
            $fileModel->file_uploaded_by_who = $fileForm->host_type;
            $fileModel->file_generated_token = $fileForm->generated_token;

            $fileModel->save();
            $fileId = $fileModel::where('file_url', env('APP_URL').$fileUrl)->get()[0]->id;

            return json_encode(array('success'=>true, 'file_id' => $fileId));
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
            $errors =$validation->errors();
            $listerrors = [];
            foreach($errors->all() as $error)
                array_push($listerrors, $error);
            return json_encode(array("error_message" => $listerrors, "error_status" => true));
        }
        else if($statusForm->num_files <= 0)
        {
            return json_encode(array(
                "error_message" => ["An image/video must be uplaoded"],
                "error_status" => true
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
                "error_message" => ["The host id and token do not match "],
                "error_status" => true
            ));
        }
        // end check host 

        //check files
        $fileIds = explode("|", $statusForm->statusFiles);
        // return $fileIds;
        if(count($fileIds) !== (integer)$statusForm->num_files)
        {
            return json_encode(array(
                "error_message" => "The file list and given files, do not match",
                "error_status" => true
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
                        "error_message" => "The files you are trying to add to the status don't exist. Please retry again",
                        "error_status"  => true
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
                "successMessage" => "success "
            ));

            return $success;
        }
        catch(\Illuminate\Database\QueryException $exception)
        {
            $error = json_encode(array(
                'error_message' => array($exception->errorInfo),
                "error_status" => true
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
                "error_message" => ["The provided status token is not valid",],
                "error_status" => true
            ))
            ];
        }
        else if($valid_generated_token[0]->generated_completed)
        {
            return[
                false,
                json_encode(array(
                    "error_message" => ["The status token has expired. "],
                    "error_status" => true
                ))
         ];
        }
        else
            return [true, null];
    }

}
