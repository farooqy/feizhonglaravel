<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class allFilesModel extends Model
{
    //
    protected $table ="status_files";

    public function statusFiles()
    {
    	return $this->hasMany('App\models\companyStatusFilesModel', 'id');
    }
}
