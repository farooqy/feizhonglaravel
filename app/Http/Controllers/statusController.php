<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\compStatusModel;
use App\models\companyStatusFilesModel;
use Illuminate\Support\Facades\Validator;
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
    	$statusData = compStatusModel::where([['status_status' ,'=', 'active']])->get()->all();
    	return $statusData;

    }
    public function setFiles(Request $fileForm)
    {
        return $fileForm;
    }
    public function setStatus (Request $statusForm)
    {
        // $statusForm->validate([
        //     'comp_id' => "required|"
        // ]);

        $rules = [
            "comp_id" => "required|integer|min:1",
            "status_content" => "required|string|max:1001",
            "comp_token" => "required|string|min:30",
            "has_files" => "required|in:0,1|",
            "num_files" => "required|integer|min:0|max:10",
            // "files" => "mimes:jpg, jpeg, png, avi, web, mp4"
            "statusFiles" => "string",
            "status_type" => "required|string|in:status,product"
        ];
        $messages = [
            "required" => "The :attribute field is required",
            "min" => "The :attribute field content is below the minimum",
            "string" => "The :attribute type is not valid",
            "integer" => "The :attribute type must be integer",
            "mimes" => "The :attribute file type(s) is not valid"
        ];
        $validation = Validator::make($statusForm->all(), $rules, $messages);
        $statusFilesObject = [];
        if($validation->fails())
            return $validation->errors()->toJson();
        else if($statusForm->num_files > 0)
        {
            if($statusForm->num_files > 1)
                $filesCount = explode('|', $statusForm->statusFiles);
            else
                $filesCount = [$statusForm->statusFiles];
            if(!is_array($filesCount))
            {
                $error = json_encode(array(
                    'statusFiles' => array(
                        'The files submitted are not valid'
                    ),
                ));
                return $error;
            }
            else if((integer) $statusForm->num_files !== count($filesCount))
            {
                $error = json_encode(array(
                    'statusFiles' => array(
                        'The files is not same length as number of files '.$statusForm->num_files." ".count($filesCount)
                    ),
                ));
                return $error;
            }
            else if(empty($statusForm->statusFiles))
            {
                $error = json_encode(array(
                    'statusFiles' => array(
                        'The files object is empty '
                    ),
                ));
                return $error;
            }

            $lastStatusId = compStatusModel::get()->last()->id;
            foreach (range(0, (integer)$statusForm->num_files) as $fileIndex ) 
            {
                $filevalue = $filesCount[$fileIndex];
                if(!filter_var($filevalue, FILTER_VALIDATE_INT))
                {
                    $error = json_encode(array(
                        'statusFiles' => array(
                            'The files contains invalid content '
                        ),
                ));
                return $error; 
                }
                $fileObject = array(
                        "status_id" => ($lastStatusId+1),
                        "file_id" => $filevalue,
                    );
                array_push($fileObject,
                    $statusFilesObject);
            }
            companyStatusFilesModel::insert($statusFilesObject);
        }

        try
        {
            $compStatusModel = new compStatusModel;
            $compStatusModel->comp_id = $statusForm->comp_id;
            $compStatusModel->comp_token = $statusForm->comp_token;
            $compStatusModel->status_content = $statusForm->status_content;
            $compStatusModel->has_files = $statusForm->has_files;
            $compStatusModel->num_files = $statusForm->num_files;
            $compStatusModel->save();
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
                'statusFiles' => array(
                    'Error in query: '.$exception->errorInfo
                ),
            ));
            return $error;
        }  
        // if($filesSaved)
        // {
        
        // }
        // else
        // {   

        //     $error = json_encode(array(
        //         'statusFiles' => array(
        //             'Failed to save the files '
        //         ),
        //     ));
        //     return $error;
        // }
            

            
    }
}
