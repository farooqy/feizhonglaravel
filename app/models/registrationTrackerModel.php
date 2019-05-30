<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class registrationTrackerModel extends Model
{
    //
    protected $table = "registration_tracker";
    public $fillable = ["comp_token", "stage"];
    public function statusCompany()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', 'comp_token', 'comp_token');
    }
}
