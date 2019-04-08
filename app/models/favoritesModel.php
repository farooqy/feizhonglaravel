<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class favoritesModel extends Model
{
    //
    protected $table = "company_favorites";

    public function companydata()
    {
    	return $this->belongsTo('App\models\companydata_model','favorited_comp_id', 'comp_id');
    }
}
