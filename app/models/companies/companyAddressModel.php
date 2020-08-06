<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companyAddressModel extends Model
{
    //
    protected $table = "comp_address";
    public $fillable = [
        "comp_id", "comp_addr_one", "comp_addr_two",
        "comp_city", "comp_province", "comp_token", 'comp_country'
    ];
    public function companydata()
    {
        return $this->belongsTo('App\models\companies\companydataModel', 'comp_id', 'comp_id');
    }
}
