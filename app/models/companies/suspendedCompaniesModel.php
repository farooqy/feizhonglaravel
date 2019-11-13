<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class suspendedCompaniesModel extends Model
{
    //
    protected $table = "suspended_companies";
    protected $fillable = [
        "suspend_token", "comp_id", "comp_token", "is_revoked",
        "suspendedby_staff_id", "suspendedby_staff_token", "suspended_reason"
    ];
}
