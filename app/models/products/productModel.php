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
    	return $this->belongsTo('App\models\companies\companydataModel', 'product_for_id', 'comp_id');
    }
    public function quotations()
    {
    	return $this->hasMany('App\models\companies\quotationModel', 'status_token', 'product_gen_token');
    }
    public function comments()
    {
        return $this->hasMany('App\models\status\commentsModel', 'status_token', 'product_gen_token');
    }
    public function likes()
    {
        return $this->hasMany('App\models\status\likesModel', 'product_gen_token', 'status_token');
    }

}
