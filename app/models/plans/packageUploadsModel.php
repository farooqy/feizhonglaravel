<?php

namespace App\models\plans;

use Illuminate\Database\Eloquent\Model;

class packageUploadsModel extends Model
{
    //
    protected $table = "package_uploads";
    protected $fillable = [
        "plan_id", "plan_token", "file_url", "file_type"
    ];

    public function planDetails()
    {
        return $this->belongsTo('App\models\plans\featuredPlanModel', 'id', 'plan_id', 'plan_token', 'plan_token');
    }
}
