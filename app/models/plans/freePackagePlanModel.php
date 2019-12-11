<?php

namespace App\models\plans;

use Illuminate\Database\Eloquent\Model;

class freePackagePlanModel extends Model
{
    //
    protected $table = "free_package_plan";
    protected $fillable = [
        "comp_id", "comp_token", "plan_token",
         "setby_staff_id", "setby_staff_token", "is_active_plan"
    ];
    
    public function companyData()
    {
        return $this->belongsTo('App\models\companies\companydataModel', 
        'comp_id', 'comp_id', 'comp_token', 'comp_token');
    }
}
