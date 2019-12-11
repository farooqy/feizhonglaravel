<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class companyStatusFilesModel extends Model
{
    //
    protected $table = 'company_status_files';
    protected $fillable = ["status_id", "file_id"];
    public function company_status()
    {
    	return $this->belongsTo('App\models\compStatusModel');
    }
    public function file_details()
    {
    	return $this->belongsTo('App\models\allFilesModel', 'status_id');
    }
}
