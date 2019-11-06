<?php

namespace App\models\users;

use Illuminate\Database\Eloquent\Model;

class userNeedsModel extends Model
{
    //
    protected $table = "user_needs";
    public $fillable = [
        "host_id", "host_token", "host_type",
        "product_name", "product_description", "product_valid_until",
        "product_quantity", "product_measure_unit",
        "product_type", "product_sub_types"    , "need_token"
    ];

    public function needUserData()
    {
        return $this->belongsTo('App\models\normalUsersModel',
            'host_id','user_id', 'host_token', 'user_token');
    }
    public function needMatches()
    {
        return $this->hasMany('App\models\companies\matchedNeedsModel',
            'matched_need_id', 'id', 'matched_need_token', 'need_token');
    }
}
