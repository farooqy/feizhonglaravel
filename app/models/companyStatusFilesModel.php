<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class companyStatusFilesModel extends Model
{
    //
    protected $table = 'status_files';
    public function company_status()
    {
    	return $this->belongsTo('App\models\compStatusModel');
    }
}
