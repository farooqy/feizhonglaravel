<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;

class likesModel extends Model
{
    //
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

    		return json_encode([
                'errorMessage' => null,
                "isSuccess" => true,
                "successMessage" => "success",
    		]);
    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{

            $error = json_encode(array(
                'errorMessage' => array($exception->errorInfo),
                "isSuccess" => false,
                "successMessage" => null,
            ));
            return $error;
    	}
    }
}
