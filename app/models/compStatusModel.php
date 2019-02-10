<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class compStatusModel extends Model
{
    //

    protected $table = 'company_status';
    public function status_files() 
    {
    	return $this->hasMany('App\models\companyStatusFilesModel', 'status_id');
    }
    public function companyData()
    {
    	return $this->belongsTo('App\models\companydata_model', 'comp_id', 'comp_id');
    }
}
