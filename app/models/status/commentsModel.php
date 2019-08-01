<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;

use App\customClass\Error;
class commentsModel extends Model
{
    //
    public function __construct()
    {
        $this->Error = new Error();
    }
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

            $this->Error->setSuccess(["success"]);
            return $this->Error->getSuccess();
    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{

            $this->Error->setError([$exception->errorInfo]);
            return $this->Error->getError();
    	}

	    	
    }
    public static function deleteComment($status_id, $host_id, $host_type, $comment_text)
    {
        try
        {
            $comment = commentsModel::where([
                ["status_id" => $status_id],
                ["host_type" => $host_type],
                ["host_id" => $host_id]
            ])->get();
            foreach ($comment as $c) {
                $c->delete();
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
