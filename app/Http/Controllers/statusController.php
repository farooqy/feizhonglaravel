<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\compStatusModel;
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
    public function getStatus ()
    {
    	$statusData = compStatusModel::where([['status_status' ,'=', 'active']])->get()->all();
    	return $statusData;

    }
}
