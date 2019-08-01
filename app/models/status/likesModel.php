<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;
use App\customClass\Error;

class likesModel extends Model
{
    //
    public function __construct()
    {
        $this->Error = new Error();
    }
    protected $table = "status_likes";
    protected $fillable = ["status_id", "host_id", "host_type"];
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

    	try
    	{
    		likesModel::create([
	    		"status_id" =>  $status_id,
	    		"host_id" => $host_id,
	    		"host_type" => $host_type,
	    		]);

            $this->Error->setSuccess(["success"]);
            return $this->Error->getSuccess();

    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{


            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();
    	}
    }
    public function unlikeStatus($status_id, $host_id, $host_type)
    {
        try
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
        catch(\Illuminate\Database\QueryException $exception)
        {

            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();
        }

    }
}
