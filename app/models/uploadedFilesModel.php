<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class uploadedFilesModel extends Model
{
    //

    protected $table = "uploaded_files";

    public function Statuses()
    {
    	return $this->belongsTo('App\models\compStatusModel', 'file_generated_token','status_generated_token');
    }
   
}
