<?php

namespace App\models\misc;

use Exception;
use Illuminate\Database\Eloquent\Model;

class SupplierCountryPrefereneModel extends Model
{
    //
    protected $table = 'supplier_country_preference';

    protected $filled = [
        'id',
        'host_id',
        'host_token',
        'host_type',
        'prefered_supplier_location',
    ];

    public $errorMessage = null;
    public $errorStatus = false;
    public $list_supplier_locations = [
        'All Countries',
        'China',
        'United Arab Emirates',
    ];
    public function registerHostSupplierLocation($host_data)
    {
        try {
            $existingPrerence = $this->ExistingPreference($host_data->host_id, $host_data->host_token);
            if ($existingPrerence != null && $existingPrerence->count() >= 1) {
                $key = array_search($host_data->prefered_supplier_location, $this->list_supplier_locations);
                $existingPrerence[0]->update([
                    'prefered_supplier_location' => $key == false ? 0 : $key
                ]);
            } else {
                return $this->create([
                    'host_id' => $host_data->host_id,
                    'host_token' => $host_data->host_token,
                    'host_type' => $host_data->host_type,
                    'prefered_supplier_location' => $host_data->prefered_supplier_location,

                ]);
            }
        } catch (Exception $e) {
            $this->errorStatus = true;
            $this->errorMessage = $e->getMessage();
            return $this->errorStatus;
        }
    }

    public function ExistingPreference($host_id, $host_token)
    {
        return $this->where([
            ["host_id", $host_id],
            ["host_token", $host_token]
        ])->get();
    }

    public function preferredLocationString()
    {
        return $this->list_supplier_locations[$this->prefered_supplier_location];
    }
}
