<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companyTypeModel extends Model
{
    //
    protected $table = "comp_type";
    public $fillable = [
    	"comp_id", "comp_token","comp_type",
    	"comp_subtype", "comp_description"
    ];
    public function companydata()
    {
    	return $this->belongsTo('App\models\companies\companydataModel', 'comp_id');
    }
}
