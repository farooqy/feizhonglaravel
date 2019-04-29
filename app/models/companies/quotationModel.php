<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;
class quotationModel extends Model
{
    //
    protected $table = "quotations";
    public $fillable = ["comp_id", 
    "user_id", "product_id","quantity", 
    "demand_price", "who_initiated", "quotation_file"];

    public function products()
    {
    	return $this->belongsTo('App\models\products\productModel', 'product_id');
    }

}
