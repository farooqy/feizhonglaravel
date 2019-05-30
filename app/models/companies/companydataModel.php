<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companydataModel extends Model
{
    //
    protected $table = "companydata";
    public $fillable = ["comp_name", "comp_logo",
     "comp_email", "comp_phone", "comp_pass", "comp_token"];
    public $hidden = ["comp_pass"];

    public function address()
    {
    	return $this->hasOne('App\models\companies\companyAddressModel', 'comp_id', 'comp_id');
    }
    public function type()
    {
    	return $this->hasOne('App\models\companies\companyTypeModel', 'comp_id', 'comp_id');
    }
    public function chats()
    {
    	return $this->hasMany('App\models\chats\chatUserModel', 'comp_id', ['chat_destination_id', 'chat_destination_id'])->orWhere('chat_origin_id', $this->chat_origin_id);
    }
    public function companyStatus ()
    {
    	return $this->hasMany('App\models\compStatusModel', 'comp_id', 'comp_id');
    }
    public function products()
    {
        return $this->hasMany('App\models\products\productModel', 'product_for_id', 'comp_id');
    }
    public function registrationStatus()
    {
    	return $this->hasMany('App\models\registrationTrackerModel', 'comp_token', 'comp_token');
    }
}
