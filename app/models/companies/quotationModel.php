<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class quotationModel extends Model
{
    //
    protected $table = "quotations";
    public $fillable = ["comp_id", "comp_token", "user_token",
        "user_id", "product_id", "quantity", "product_token", "description",
        "demand_price", "who_initiated", "quotation_file", "product_type"];

    public function products()
    {
        return $this->belongsTo('App\models\products\productModel', 'product_id');
    }

}
