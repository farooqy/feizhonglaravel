<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companydataModel extends Model
{
    //
    protected $table = "companydata";
    public $fillable = ["comp_name", "comp_logo",
     "comp_email", "comp_phone", "comp_pass", "comp_token"];
    public $hidden = ["comp_pass"];

    public function address()
    {
    	return $this->hasOne('App\models\companies\companyAddressModel', 'comp_id', 'comp_id');
    }
    public function type()
    {
    	return $this->hasOne('App\models\companies\companyTypeModel', 'comp_id', 'comp_id');
    }
}
