<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companyAddressModel extends Model
{
    //
    protected $table = "comp_address";
    public $fillable = [
    	"comp_id", "comp_addr_one", "comp_addr_two",
    	"comp_city", "comp_province", "comp_token"
    ];

}
