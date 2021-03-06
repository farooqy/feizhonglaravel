<?php

namespace App\models\companies;

use Illuminate\Database\Eloquent\Model;

class companydataModel extends Model
{
    //
    protected $table = "companydata";
    protected $primaryKey = "comp_id";
    public $fillable = [
        "comp_name", "comp_logo",
        "comp_email", "comp_phone", "comp_pass", "comp_token"
    ];
    public $hidden = ["comp_pass"];

    public function verificationData()
    {
        return $this->hasOne(
            'App\models\companies\verifiedCompaniesModel',
            'comp_id',
            'comp_id',
            'comp_token',
            'comp_token'
        );
    }
    public function matchedNeeds()
    {
        return $this->hasMany(
            'App\models\companies\matchedNeedsModel',
            'matched_comp_id',
            'comp_id',
            'matched_comp_token',
            'comp_token'
        );
    }
    public function address()
    {
        return $this->hasOne('App\models\companies\companyAddressModel', 'comp_id', 'comp_id');
    }
    public function type()
    {
        return $this->hasOne('App\models\companies\companyTypeModel', 'comp_id', 'comp_id');
    }
    public function chats()
    {
        return $this->hasMany('App\models\chats\chatUserModel', 'comp_id', ['chat_destination_id', 'chat_destination_id'])->orWhere('chat_origin_id', $this->chat_origin_id)->latest();
    }
    public function companyStatus()
    {
        return $this->hasMany('App\models\compStatusModel', 'comp_id', 'comp_id');
    }
    public function products()
    {
        return $this->hasMany('App\models\products\productModel', 'product_for_id', 'comp_id');
    }
    public function registrationStatus()
    {
        return $this->hasMany('App\models\registrationTrackerModel', 'comp_token', 'comp_token');
    }

    public function favoritedby()
    {
        return $this->hasMany('App\models\favoritesModel', 'comp_id', 'favorited_comp_id');
    }
    public function likedStatuses()
    {
        return $this->hasMany('App\models\status\likesModel', 'host_id');
    }
    public function commentedStatuses()
    {
        return $this->hasMany('App\models\status\commentsModel', 'host_id');
    }
    public function License()
    {
        return $this->hasOne("App\models\companies\companyLicenseModel", "comp_id", "comp_id")->latest();
    }
    public function isCompany($comp_id)
    {
        $comp = companydataModel::where("comp_id", $comp_id)->get();
        if ($comp !== null && $comp->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function searchCompanies($keywords)
    {
        $items = companydataModel::with("type", "address")->where("comp_name", "LIKE", "%" . $keywords . "%")->orWhere([
            ["comp_phone", "LIKE", "%" . $keywords . "%"],
        ])->orWhere([
            ["comp_email", "LIKE", "%" . $keywords . "%"],
        ])->whereHas("type", function ($q) use ($keywords) {
            $q->where("comp_description", "LIKE", "%" . $keywords . "%");
        })
            // ->orWhere("type", function($q) use($keywords){
            //     $q->where("comp_description" , "LIKE" , "%".$keywords."%");
            // })

            // ->orWhere("address", function($q) use($keywords){
            //     $q->where("comp_addr_one", "LIKE" , "%".$keywords."%")->orWhere([
            //         ["comp_addr_two", "LIKE" , "%".$keywords."%"],
            //         ["comp_city", "LIKE" , "%".$keywords."%"],
            //         ["comp_province", "LIKE" , "%".$keywords."%"],
            //     ]);
            // })
            ->get();
        return $items;

        if ($items === null || $items->count() <= 0) {
            return [];
        } else {
            return $items;
        }
    }

    public function freePackagePlan()
    {
        return $this->hasOne(
            'App\models\plans\freePackagePlanModel',
            'comp_id',
            'comp_id',
            'comp_token',
            'comp_token'
        );
    }
    public function companySuspensions()
    {
        return $this->hasMany(
            'App\models\companies\suspendedCompaniesModel',
            'comp_id',
            'comp_id',
            'comp_token',
            'comp_token'
        );
    }
    public function isSuspended($comp_id)
    {
        return \App\models\companies\suspendedCompaniesModel::where([
            ["comp_id", $comp_id],
            ["is_revoked", false],
        ])->exists();
    }
    public function isWithHeld($comp_id)
    {
        return \App\models\companies\withHeldCompaniesModel::where([
            ["with_held_comp_id", $comp_id],
            ["is_active", true],
        ])->exists();
    }
    public function isPopulated($comp_id, $comp_token)
    {
        return populatedCompaniesModel::where([
            ["comp_id", $comp_id],
            ["comp_token", $comp_token],
        ])->exists();
    }

    public function companyQuotations()
    {
        return $this->hasMany(quotationModel::class, "comp_id", "comp_id");
    }
}
