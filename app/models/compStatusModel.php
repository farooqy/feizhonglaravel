<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class compStatusModel extends Model
{
    //

    protected $table = 'company_status';
    public $fillable = [
      "status_generated_token", "comp_id", "comp_token", "status_content",
      "has_files", "num_files", "status_status",
    ];
    public function Status_Files()
    {
    	return $this->hasMany('App\models\uploadedFilesModel', 'file_generated_token','status_generated_token');
    }
    public function companyData()
    {
    	return $this->belongsTo('App\models\companydata_model', 'comp_id', 'comp_id');
    }
    public function comments()
    {
        return $this->hasMany('App\models\status\commentsModel', 'status_token', 'status_generated_token');
    }
    public function likes()
    {
        return $this->hasMany('App\models\status\likesModel', 'status_token' );
    }
}
