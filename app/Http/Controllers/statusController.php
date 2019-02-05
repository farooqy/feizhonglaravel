<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\compStatusModel;
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
    public function setStatus (Request $statusForm)
    {
        $statusForm->validate([
            'comp_id' => "required|"
        ]);

        $rules = [
            "comp_id" => "required|integer|min:1",
            "status_content" => "required|string|max:1001",
            "comp_token" => "required|string|min:30",
            "has_files" => "required|in:0,1|",
            "num_files" => "required|min:0|max:10",
            "files" => "mimes:jpg, jpeg, png, avi, web, mp4"
        ];
        $messages = [
            "required" => "The :attribute field is required",
            "min" => "The :attribute field content is below the minimum",
            "string" => "The :attribute type is not valid",
            "integer" => "The :attribute type must be integer",
            "mimes" => "The :attribute file type(s) is not valid"
        ];
        $validation = Validator::make($statusForm->all(), $rules, $messages);
        if($validation->fails())
            return $validation->errors()->toJson();
        else
            return $statusForm;
    }
}
