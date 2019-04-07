<?php

namespace App\models\products;

use Illuminate\Database\Eloquent\Model;

class productFilesModel extends Model
{
    //
    protected $table = "product_files";
    
    public function products()
    {
    	return $this->belongsTo('App\models\products\productModel', 'product_gen_token', 'product_gen_token');
    }
}
