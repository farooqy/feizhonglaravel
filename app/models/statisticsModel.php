<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use App\customClass\Error;

class statisticsModel extends Model
{
    //
    protected $table = "company_visits";
    protected $fillable = ["comp_id", "comp_token", "host_id",
     "host_token", "host_type",
     //fillable for product_stats
     "product_id", "product_gen_token", "visit_type" 
 	];
 	protected $guarded = [];

    public function __construct($table = "company_visits")
    {
    	// $this->Error = new Error();
    	$this->table = $table;
    }
    public function setProfileVisit( $request)
    {
    	// return $request["comp_id"];
    	try
    	{
    		// // statisticsModel::create($request);
    		// statisticsModelcomp_id = $request["comp_id"];
    		// statisticsModel->comp_token = $request["comp_token"];
    		// statisticsModel->host_type = $request["host_type"];
    		// statisticsModel->host_id = $request["host_id"];
    		// statisticsModel->host_token = $request["host_token"];
    		// statisticsModel->save();

	    	return true;
    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{
    		return $exception->errorInfo;
    	}
	    	
    }
    public function setProductVisitAndLike( $request)
    {
    	// return $request;
    	try
    	{
    		statisticsModel::create($request);

	    	return true;
    	}
    	catch(\Illuminate\Database\QueryException $exception)
    	{
    		return $exception->errorInfo;
    	}
	    	
    }
}
