<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class matchedNeedsModel extends Model
{
    //
    protected $table = "matched_needs";

    protected $fillable =["match_token", "matched_comp_id", "matched_comp_token",
                            "matched_need_id", "matched_need_token", "match_revoked",
                            "matched_by_staff_id", "matched_by_staff_token"];
    public function NeedsData()
    {
        return $this->belongsTo('App\models\users\userNeedsModel',
            'matched_need_id','id',  'matched_need_token', 'need_token');
    }
    public function needCompData()
    {
        return $this->belongsTo('App\models\companies\companydataModel',
                'matched_comp_id','comp_id', 'matched_comp_token', 'comp_token');
    }
}
