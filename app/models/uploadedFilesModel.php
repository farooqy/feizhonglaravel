<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class uploadedFilesModel extends Model
{
    //

    protected $table = "uploaded_files";
    public $fillable = [
      "file_url", "file_uploaded_by_id", "file_uploaded_by_who",
      "file_generated_token", "file_is_active"
    ];

    public function Statuses()
    {
    	return $this->belongsTo('App\models\compStatusModel', 'file_generated_token','status_generated_token');
    }

}
