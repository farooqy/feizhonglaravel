<?php

namespace App\Http\Controllers\misc;

use App\customClass\Error;
use App\Http\Controllers\Controller;
use App\models\misc\SupplierCountryPrefereneModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupplierCountryController extends Controller
{
    //
    protected $StatusHandler;
    public function __construct()
    {
        $this->StatusHandler = new Error();
    }
    public function registerHostSupplierLocation(Request $request)
    {
        $SupplierPreferenceModel = new SupplierCountryPrefereneModel();
        $locations = implode(",", $SupplierPreferenceModel->list_supplier_locations);
        $rules = [
            "prefered_supplier_location" => "required|in:$locations",
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $this->StatusHandler->setError($validator->errors()->first());
            return $this->StatusHandler->getError();
        }

        $isSaved = $SupplierPreferenceModel->registerHostSupplierLocation($request);
        if ($isSaved) {
            $this->StatusHandler->setSuccess([]);
            return $this->StatusHandler->getSuccess();
        }

        // $this->StatusHandler->setError($SupplierPreferenceModel->errorMessage);
        $this->StatusHandler->setError(['Failed to set your supplier location preference.']);
        return $this->StatusHandler->getError();
    }

    public function getSupplierPreferredLocation(Request $request)
    {

        $preferredLocations = SupplierCountryPrefereneModel::where([
            ["host_id", $request->host_id],
            ["host_token", $request->host_token],
            ["host_type", $request->host_type]
        ])->get();
        if ($preferredLocations == null || $preferredLocations->count() <= 0) {
            $preferredLocations = ["prefered_supplier_location" => 0];
        }
        $this->StatusHandler->setSuccess($preferredLocations);
        return $this->StatusHandler->getSuccess();
    }
}
