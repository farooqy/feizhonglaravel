<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class verifiedCompaniesModel extends Model
{
    //
    protected $table = "verified_companies";
    protected $fillable =[""];

    public function companyData()
    {
        return $this->belongsTo('App\models\companies\companydataModel',
            'comp_id','comp_id', 'comp_token','comp_token');
    }
}
