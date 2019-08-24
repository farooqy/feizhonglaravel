<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;
use App\customClass\Error;

class likesModel extends Model
{
    //
    protected $table = "status_likes";
    public $fillable = ["status_id", "host_id", "host_type"];
    protected $Error;
    public function __construct()
    {
        $this->Error = new Error();
    }
    public function status()
    {
    	return $this->belonsTo('App\models\compStatusModel', 'id');
    }
    public function personProfile()
    {
    	return $this->belongsTo('App\models\normalUsersModel', 'host_id', 'user_id');
    }
    public function compProfile()
    {
    	return $this->belongsTo('App\models\companydata_model', 'host_id', 'comp_id');
    }
    public static function saveLike($status_id, $host_id, $host_type)
    {
        likesModel::create([
    		"status_id" =>  $status_id,
    		"host_id" => $host_id,
    		"host_type" => $host_type,
	    ]);

        $this->Error->setSuccess(["success"]);
        return $this->Error->getSuccess();
    }
    public function unlikeStatus($status_id, $host_id, $host_type)
    {
        $status = likesModel::where([
            ["status_id" => $status_id],
            ["host_id" => $host_id],
            ["host_type" => $host_type]
        ])->get();
        foreach ($status as $s) {
            $s->delete();
        }

        $this->Error->setSuccess(["success"]);
        return $this->Error->getSuccess();
    

    }
}
