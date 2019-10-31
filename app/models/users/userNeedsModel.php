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
}
