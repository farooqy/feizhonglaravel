<?php

namespace App\models\plans;

use Illuminate\Database\Eloquent\Model;

class featuredPlanModel extends Model
{
    //
    protected $table = "featured_plan";
    protected $fillable = [
        "comp_id", "comp_token", "plan_token",
        "end_date", "is_active"
    ];

    public function planUploads()
    {
        return $this->hasOne('App\models\plans\packageUploadsModel', 'plan_id', 'id', 'plan_token', 'plan_token');
    }
    public function compData()
    {
        return $this->belongsTo('App\models\companies\companydataModel','comp_id', 'comp_id', 'comp_token', 'comp_token');
    }

}
