<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\companies\companydataModel;
use App\customClass\Error;
class generalController extends Controller
{
    //
	protected $Error;
	public function __construct()
	{
    	$this->Error = new Error();
	}
    public function listCompanies()
    {
    	$list = companydataModel::skip(0)->take(10)->get();
    	if($list === null || $list->count() <=0 )
    	{
    		$this->Error->setError(["Failed to get the list. Empty database could be the reason"]);
    		return $this->Error->getError();
    	}
    	else
    	{
    		$comp_list = [];
    		foreach($list as $company)
    			array_push($comp_list, ["data" => $company, "address" => $company->address, "type" => $company->type]);
    		$this->Error->setSuccess($list);
    		return $this->Error->getSuccess();
    	}

    }
    public function notAllowedMethod()
    {
    	$this->Error->setError(['The method is not allowed']);
    	return $this->Error->getError();
    }
    public function showQuote()
    {
    	return view('quotation.quotation');
    }
}
