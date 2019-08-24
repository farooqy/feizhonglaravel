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
use App\models\companies\companyLicenseModel;
use App\models\products\productModel;
use App\customClass\Error;
use App\customClass\CustomRequestValidator;
use App\customClass\ApiKeyManager;

use Illuminate\Support\Facades\Validator;
// use Intervention\Image\Facades\Image as Image;
use Image;
class statusController extends Controller
{
    //
    protected $ApiKey;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new 
    }
    public function apiHandleSet($user_id, $user_token, $api_key)
    {
        $userOwnsKey =$this->ApiKey->HasApiKey($user_id, $user_token);
        if(!$userOwnsKey)
        {
            $this->Error->setError(["The access key is not valid"], -1);
            return $this->Error->getError();
        }
        $apiKeyDetails = $this->ApiKey->getKeyDetails($user_id, $user_token);
        if($apiKeyDetails[0]->api_key !== $api_key)
        {
            $this->Error->setError(['Invalid api key']);
            return $this->Error->getError();
        }
        $this->ApiKey->setRequest($apiKeyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
        return true;
    }
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
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp",
            "api_key" => "required|string"
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->CustomRequestValidato->isNotValidRequest($validity);
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
    	$statusData = compStatusModel::where([['status_status' ,'=', 'active']])->latest()->get();

        $products = productModel::get();
        $listProducts = $statusData->merge($products);
        $listProducts = array_reverse(array_sort($listProducts, function ($value) {
          return $value['created_at'];
        }));
        $status = [];
        $statusCount = 0;
        foreach($listProducts as $key => $eachStatus)
        {
            // return $eachStatus;
            if($eachStatus->product_gen_token)
            {
                $listProducts[$key]->type = "product";

                $eachStatus->companydata;
                
            }    
            else
            {
                $listProducts[$key]->type = "status";

                    $status = array(
                    "status" => $eachStatus,
                    "files" => $eachStatus->Status_Files,
                    "companyProfile" => $eachStatus->companyData,
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

                $statusData[$statusCount]["num_comments"] = $comments->count();
                $statusData[$statusCount]["num_likes"] = $likes->count();
            }    
            

        }
    	// return json_encode(["isSuccess"=> true, "errorMessage"=> null,
     //     "successMessage"=>"success", "data"=>$statusData]);
        $this->ApiKey->successFullRequest();
        $this->Error->setSuccess($listProducts);
        return $this->Error->getSuccess();

    }
    public function uploadFile(Request $fileForm)
    {
        $rules = [
            "file_value" => 'required|string',
            'host_id' => 'required|integer',
            'host_token' => 'required|string',
            'host_type' => 'required|in:normal,comp',
            "generated_token" => "required|string",
            "api_key" => "required|string"
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
            // return json_encode([
            //     'errorMessage' => $listerrors, 
            //     'isSuccess' => false, 
            //     'successMessage' => null
            // ]);
            $this->Error->setError($listerrors);
            return $this->Error->getError();

        } 
        $apiset = $this->apiHandleSet($$request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;   
        //check if has uplaoded license
        if(!$this->hasUploadedLicense($fileForm->host_id, $fileForm->host_token))
        {
            $this->Error->setError(["Your company is not verified. Please upload license to be verified"]);
            return $this->Error->getError();
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
            // $errors = json_encode([
            //     'errorMessage' => ["The company id and company token do not match"],
            //     'isSuccess' => false, 
            //     'successMessage' => null
            // ]);
            // return $errors;
            $this->Error->setError(["The company id and company token do not match"]);
            return $this->Error->getError();
        }
        else
        {
            if(!is_dir(public_path('uploads/comp/'.$fileForm->host_token)))
            {
                if(!mkdir(public_path('uploads/comp/'.$fileForm->host_token), 0765, true))
                {    // return json_encode([
                    //     'errorMessage' => ["Failed to create directory for the status file"],
                    //     'isSuccess' => false, 
                    //     'successMessage' => null
                    // ]);
                    $this->Error->setError(["Failed to create directory for the status file"]);
                    return $this->Error->getError();
                }
            }
            $allowed_file_types = ["image/jpeg", "image/png", "image/jpg", "video/mp4"];
            $file_extension = ["jpeg", "png", "jpg", "mp4"];
            $file_type =  substr($fileForm->file_value,(strpos($fileForm->file_value, "data:")+5),
             (strpos($fileForm->file_value, ";")-5));
            if(($type_key = array_search($file_type, $allowed_file_types)) === false)
            {
                // return json_encode([
                //     'errorMessage' => "The file type provided is not valid",
                //     'isSuccess' => false, 
                //     'successMessage' =>null
                // ]);
                $this->Error->setError(["The file type provided is not valid"]);
                return $this->Error->getError();
            }
            else
                $extenstion = $file_extension[$type_key];
            $fileForm->file_value = str_replace("data:".$file_type.";base64", '', $fileForm->file_value);
            $fileForm->file_value = base64_decode($fileForm->file_value);
            $filename = 'status_image_decoded_'.hash('md5', time()).'.'.$extenstion;
            $fileUrl = 'uploads/comp/'.$fileForm->host_token.'/'.$filename;
            $filepath = public_path($fileUrl);
            // Image::make($fileForm->file('file_value'))->save($filepath);
            \File::put($filepath, $fileForm->file_value);
            $fileModel = new uploadedFilesModel;
            $fileModel->file_url = env('APP_URL').'feizhonglaravel/public/uploads/comp/'.$fileForm->host_token.'/'.$filename;
            $fileModel->file_uploaded_by_id = $fileForm->host_id;
            $fileModel->file_uploaded_by_who = $fileForm->host_type;
            $fileModel->file_generated_token = $fileForm->generated_token;

            $fileModel->save();
            $fileId = $fileModel::where('file_url', env('APP_URL').'feizhonglaravel/public/uploads/comp/'.$fileForm->host_token.'/'.$filename)->get()[0]->id;

            // return json_encode([
            //     'errorMessage' => null,
            //     'isSuccess' => true, 
            //     'successMessage' => "success",
            //     "data" => ["file_id" => $fileId]
            // ]);
            $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["file_id" => $fileId]);
            return $this->Error->getSuccess();
        }
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
            "status_files" => "required|string",
            "status_type" => "required|string|in:status,product",
            "status_generated_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string"
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
                "errorMessage" => $errors_list,
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        else if($statusForm->num_files <= 0)
        {
            return json_encode(array(
                "errorMessage" => ["An image/video must be uplaoded"],
                "isSuccess" => false,
                "successMessage" => null,
            ));
        }
        if(!$this->hasUploadedLicense($statusForm->host_id, $statusForm->host_token))
        {
            $this->Error->setError(["Your company is not verified. Please upload license to be verified"]);
            return $this->Error->getError();
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
            $this->ApiKey->successFullRequest();

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
            "host_token" => "required|string",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
            "comment_text" => "required|string|min:2",
            "api_key" => "required|string"
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
        $apiset = $this->apiHandleSet($$request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
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
        $cModel = new commentsModel;
        $cModel->status_id = $request->status_id;
        $cModel->host_id = $request->host_id;
        $cModel->host_type = $request->host_type;
        $cModel->comment_text = $request->comment_text;
        if($cModel->save())
        {
            $this->ApiKey->successFullRequest();
            $this->Error->setSuccess(["success"]);
            return $this->Error->getSuccess();
        }
        else
        {
            $this->Error->setError(["Failed to send the comment"]);
            return $this->Error->getError();
        }
    }
    public function likeStatus(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
            "api_key" => "required|string"
        ];
        $messages = [
            "min" => "The :attribute value provided is less than 2 characters",
            "in" => "The :attribute value given is not valid"
        ];

        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($is_valid_request);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        
        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if($status_valid === null || $status_valid->count() <= 0)
        {    
            
            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydata_model::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
        {    
            
            $this->Error->setError(["The host provided is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $likedbefore = likesModel::where([
            ["status_id", $request->status_id],
            ["host_id", $request->host_id],
            ["host_type", $request->host_type],
        ])->exists();
        if($likedbefore)
        {
            $this->Error->setError(["You  already liked before"]);
            return $this->Error->getError();
        }
        $lModel = new likesModel;
        $lModel->status_id = $request->status_id;
        $lModel->host_id = $request->host_id;
        $lModel->host_type = $request->host_type;

        if(!$lModel->save())
        {
            $this->Error->setError(["Failed to set the like for the status "]);
            return $this->Error->getError();
        }
        $this->Error->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();
    }

    public function unlikeStatus(Request $request)
    {
        $rules = [
            "status_id" => "required|integer",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string"
        ];
        $messages = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if($status_valid === null || $status_valid->count() <= 0)
        {
            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }

        //is it valid host
        if($request->host_type === "normal")
        {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        }
        else
            $host_is_valid = companydata_model::where('comp_id', $request->host_id)->get();

        if($host_is_valid === null || $host_is_valid->count() <= 0)
        {
            $this->Error->setError(["The host provided is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $status = likesModel::where([
            ["status_id" => $status_id],
            ["host_id" => $host_id],
            ["host_type" => $host_type]
        ])->get();
        foreach ($status as $s) {
            $s->delete();
        }
        $this->ApiKey->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getError();


    }
    public function deleteComment(Request $request)
    {
        $rules = [
            "comment_id" => "required|integer",
            "status_id" => "required|integer",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string"
        ];
        $messages = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
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
        $comment = commentsModel::where([
            ["id" => $request->comment_id],
            ["status_id" => $status_id],
            ["host_type" => $host_type],
            ["host_id" => $host_id]
        ])->get();
        foreach ($comment as $c) {
            $c->delete();
        }
        $this->Error->setSuccess(["success"]);
        $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();

    }

    public function removePost(Request $request)
    {
        $rules = [
            "status_id" => "required|integer",
            "status_generated_token" => "required|string",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:comp",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->CustomRequestValidator->isNotValidRequest($validity);
        if($isNotValidRequest)
            return $isNotValidRequest;
        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if($apiset !== true)
            return $apiset;
        $status_valid = compStatusModel::where([
            ['id', $request->status_id],
            ["comp_id", $request->host_id],
            ["comp_token", $request->host_token],
            ["status_generated_token", $request->status_generated_token],
            ["status_status", "active"],
        ])->get();
        if($status_valid === null || $status_valid->count() <= 0)
        {
            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $status_valid[0]->delete();

        //is it valid host
        $this->Error->setSuccess([]);
        $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();
    }

    public function hasUploadedLicense($comp_id, $comp_token)
    {
        return companyLicenseModel::where([
            ["comp_id", $comp_id],
            ["comp_token", $comp_token],
            ["is_expired", false],
        ])->exists();
    }

}
