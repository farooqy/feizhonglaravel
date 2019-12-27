<?php

namespace App\Http\Controllers\plans;

use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\Http\Controllers\Controller;
use App\models\companies\companydataModel;
use App\models\plans\featuredPlanModel;
use App\models\plans\packageUploadsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class featuredPackagePlan extends Controller
{
    //
    public function __construct()
    {
        $this->Status = new Error();
        $this->FileUploader = new FileUploader();
        $this->CustomValidator = new CustomRequestValidator();

    }
    public function subscribeToPlan(Request $request)
    {
        $rules = [
            "comp_id" => "required|integer",
            "comp_token" => "required|string|max:330",
            "file_src" => "required|file|mimes:jpg,png,jpeg,mp4,mpeg4,webm",
            "file_type" => "required|integer|in:0,1",
        ];
        $is_valid = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->CustomValidator->isNotValidRequest($is_valid);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $comp_valid = companydataModel::where([
            ["comp_id", $request->comp_id],
            ["comp_token", $request->comp_token],
        ])->get();

        if ($comp_valid === null || $comp_valid->count() <= 0) {
            $this->Status->setError(["The company profile could not be verified"]);
            return $this->Status->getError();
        }
        $existingplan = featuredPlanModel::where([
            ["comp_id", $request->comp_id],
            ["comp_token", $request->comp_token],
            ["is_active", true],
        ])->exists();
        if ($existingplan) {
            $this->Status->setError(["The company already has an active featured plan"]);
            return $this->Status->getError();
        }
        $dir = "uploads/comp/" . $request->comp_token . "/plan/";
        $filename = time() . "_featured_";
        if (env("APP_ENV") === "production") {
            $path = env("APP_ROOT") . $dir;
        } else {
            $path = public_path($dir);
        }

        $this->FileUploader->setFilePath($path);
        $this->FileUploader->setFileDirectory($dir);
        $this->FileUploader->setFileName($filename);
        $this->FileUploader->setFileExtension(["jpg", "jpeg", "png", "mp4", "mpeg4", "webm"]);

        $is_uploaded = $this->FileUploader->uploadFileDirect($request);
        if ($is_uploaded) {
            $token = hash('md5', time());
            featuredPlanModel::create([
                "comp_id" => $request->comp_id,
                "comp_token" => $request->comp_token,
                "plan_token" => $token,
                "end_date" => Carbon::now()->toDateTimeString(),
            ]);
            $plan = featuredPlanModel::where([
                ["plan_token", $token],
                ["comp_token", $request->comp_token],
                ["comp_id", $request->comp_id],
            ])->get();
            if ($plan === null || $plan->count() <= 0) {
                $this->Status->setError("Failed to get the plan information ");
                return $this->Status->getError();
            }
            packageUploadsModel::create([
                "plan_id" => $plan[0]->id,
                "plan_token" => $plan[0]->plan_token,
                "file_url" => env("APP_URL") . "/$dir" . $this->FileUploader->getFileName(),
                "file_type" => $request->file_type,
            ]);

            $this->Status->setSuccess(["successfully subscribed to the featured plan"]);
            return $this->Status->getSuccess();

        } else {
            return $this->FileUploader->getError();
        }
    }

    public function getSubscribedToPlan(Request $request)
    {
        $companies = featuredPlanModel::where("is_active", true)->limit(10)->latest()->get();
        foreach ($companies as $comp) {
            $plan_uploads = $comp->planUploads;
            $comp->compData;
            $comp->compData->comp_phone = '';
            $comp->compData->comp_email = '';
            $comp->compData->created_at = null;
            $comp->compData->updated_at = null;
        }
        $this->Status->setSuccess($companies);
        return $this->Status->getSuccess();
    }

}
