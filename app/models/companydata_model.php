<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class companydata_model extends Model
{
    //
    protected $table = 'companydata';
    public function companyStatus ()
    {
    	return $this->hasMany('App\models\compStatusModel', 'comp_id', 'comp_id');
    }
}
