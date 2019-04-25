<?php

namespace App\models\products;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    //
    protected $table = "products";
    public function Product_Files()
    {
    	return $this->hasMany('App\models\products\productFilesModel', 'product_gen_token','product_gen_token');
    }
    public function companydata()
    {
    	return $this->belongsTo('App\models\companydata_model', 'product_for_id', 'comp_id');
    }
}
