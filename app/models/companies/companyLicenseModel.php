<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companyLicenseModel extends Model
{
    //
    protected $table = "company_license";
    public $fillable = ["comp_id", "comp_token", "license_url", "is_expired"];
    public function companydata()
    {
    	return $this->belongsTo("App\models\companies\companydataModel", "comp_id", "comp_id");
    }
}
