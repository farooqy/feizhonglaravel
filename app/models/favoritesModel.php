<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class favoritesModel extends Model
{
    //
    protected $table = "company_favorites";

    public function companyData()
    {
    	return $this->belongsTo('App\models\companies\companyDataModel','favorited_comp_id', 'comp_id');
    }
}
