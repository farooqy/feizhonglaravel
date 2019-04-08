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
    public function companyMessages()
    {
        return $this->belongsTo('App\models\chatModel', 'message_host', 'comp_token');
    }

    public function favoritedby()
    {
        return $this->hasMany('App\models\favoritesModel', 'comp_id', 'favorited_comp_id');
    }
}
