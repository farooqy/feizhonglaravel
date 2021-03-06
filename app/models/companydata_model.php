<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class companydata_model extends Model
{
    //
    protected $table = 'companydata';
    protected $hidden = ["comp_pass"];
    public function companyMessages()
    {
        return $this->belongsTo('App\models\chatModel', 'message_host', 'comp_token');
    }

    public function favoritedby()
    {
        return $this->hasMany('App\models\favoritesModel', 'comp_id', 'favorited_comp_id');
    }
    public function likedStatuses()
    {
        return $this->hasMany('App\models\status\likesModel', 'host_id');
    }
    public function commentedStatuses()
    {
        return $this->hasMany('App\models\status\commentsModel', 'host_id');
    }
}
