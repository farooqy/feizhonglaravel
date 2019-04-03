<?php

namespace App\Http\Controllers\file_controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\uploadedFilesModel;
use Auth;
class statusFilesController extends Controller
{
    //

    public function uplaodFile(Request $fileForm)
    {
    	$fileForm->validate([
    		'file' => 'required|file|mimes:jpg,png,jpeg|max:4000'
    	]);

    	$file_path = "uploads/status_files/";
    	$filename = hash('md5', time()).'_status_file';
    	$file_directory = $file_path.$filename;

    }
}
