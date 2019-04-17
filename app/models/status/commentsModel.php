<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;

class commentsModel extends Model
{
    //
    protected $table = "status_comments";
    protected $fillable = ["status_id", "host_id", "host_type", "comment_text"];
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
    	return $this->belongsTo('App\models\companydata_model','host_id', 'comp_id');
    }
    public static function saveComment($status_id, $host_id, $host_type, $comment_text)
    {
    	try
    	{
    		commentsModel::create([
	    		"status_id" =>  $status_id,
	    		"host_id" => $host_id,
	    		"host_type" => $host_type,
	    		"comment_text" => $comment_text,
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
