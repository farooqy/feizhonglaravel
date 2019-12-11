<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class withHeldCompaniesModel extends Model
{
    //
    protected $table = "withheld_companies";
    protected $guarded = [
        "with_held_comp_id", "with_held_comp_token", "with_held_by_staff_id",
        "with_held_by_staff_token", "with_held_reason", "is_active"
    ];
}
