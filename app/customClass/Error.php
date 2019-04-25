<?php
namespace App\customClass;

class Error{
	protected $error;
	protected $success;

	public function __construct()
	{
		$this->error = null;
		$this->success = null;
	}

	public function setError($error=[])
	{
    	$this->error = [
    		"errorMessage" => $error,
    		"isSuccess" => false,
    		"successMessage" => null,
    	];
	}
	public function setSuccess($data=[])
	{
    	$this->success = [
    		"errorMessage" => null,
    		"isSuccess" => true,
    		"successMessage" => "success",
    		"data" => $data,
    	];
	}
	public function getError()
	{
		return $this->error;
	} 
	public function getSuccess()
	{
		return $this->success;
	} 
} 
?>