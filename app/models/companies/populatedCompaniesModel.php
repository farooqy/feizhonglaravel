<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class populatedCompaniesModel extends Model
{
    //
    protected $table = "populated_companies";
    protected $fillable = ["comp_id", "comp_token", "show_comp",
                            "created_at", "updated_at"];
}
