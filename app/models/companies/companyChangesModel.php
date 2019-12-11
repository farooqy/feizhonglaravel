<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companyChangesModel extends Model
{
    //
    protected $table = "company_changes";
    public $fillable = ["comp_token","change_field", "changed_from", "changed_to"];
}
