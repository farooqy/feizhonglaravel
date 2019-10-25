<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tokenStatusGeneratorModel extends Model
{
    //
    protected $table = 'status_token_generator';
    protected $fillable = ["generated_token", "generated_for_id",
    "generated_for_type", "generated_for_token", "generated_completed"];

    public function statuses()
    {
    	return $this->hasOne('App\models\compStatusModel', 'status_generated_token');
    }
    public function files()
    {
    	return $this->hasMany('App\models\uploadFilesModel', 'file_generated_token');
    }
    public function products()
    {
      return $this->hasMany('App\models\products\productModel', 'product_gen_token');
    }
}
