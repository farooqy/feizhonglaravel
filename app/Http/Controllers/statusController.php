<?php

namespace App\Http\Controllers;

use App\customClass\ApiKeyManager;
use App\customClass\CustomRequestValidator;
use App\customClass\Error;
use App\customClass\FileUploader;
use App\models\companies\companyLicenseModel;
use App\models\companies\suspendedCompaniesModel;
use App\models\companydata_model;
use App\models\compStatusModel;
use App\models\normalUsersModel;
use App\models\products\productModel;
use App\models\status\commentsModel;
use App\models\status\likesModel;
use App\models\tokenStatusGeneratorModel;
use App\models\uploadedFilesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Intervention\Image\Facades\Image as Image;

class statusController extends Controller
{
    //
    protected $Error;
    protected $customValidator;
    protected $ApiKey;
    protected $ip_address;
    protected $requestUrl;
    protected $FileUploader;
    public function __construct()
    {
        $this->Error = new Error();
        $this->customValidator = new CustomRequestValidator();
        $this->ApiKey = new ApiKeyManager;
        $this->ip_address = \Request::ip();
        $this->requestUrl = url()->current();
        $this->FileUploader = new FileUploader();
    }
    public function apiHandleSet($user_id, $user_token, $api_key)
    {
        return true;
        $userOwnsKey = $this->ApiKey->HasApiKey($user_id, $user_token);
        if (!$userOwnsKey) {
            $this->Error->setError(["The access key is not valid"], -1);
            return $this->Error->getError();
        }
        $apiKeyDetails = $this->ApiKey->getKeyDetails($user_id, $user_token);
        if ($apiKeyDetails[0]->api_key !== $api_key) {
            $this->Error->setError(['Invalid api key']);
            return $this->Error->getError();
        }
        $this->ApiKey->setRequest($apiKeyDetails[0]->api_id, $this->ip_address, $this->requestUrl);
        return true;
    }
    public function index()
    {
        $json = json_encode(array(
            'errorMessage' => null,
            'isSuccess' => false,
            'successMessage' => null
        ));
        return $json;
    }
    //gets owners statuses
    public function getSimpleStatusDetails(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($validity);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $is_suspended = suspendedCompaniesModel::where([
            ["comp_id", $request->host_id],
            ["comp_token", $request->host_token],
            ["is_revoked", false],
        ])->exists();
        if ($is_suspended) {
            $this->Error->setError(["The company is suspended. Cannot view its information"]);
            return $this->Error->geError();
        }
        $statusData = compStatusModel::where([
            ['status_status', '=', 'active'],
            ['comp_id', $request->host_id],
            ['comp_token', $request->host_token],
        ])->latest()->get();
        foreach ($statusData as $key => $status) {
            $status->Status_Files;
            $status->companyData;
            $status->comments->count();
            $status->likes->count();
        }
        $this->Error->setSuccess($statusData);
        return $this->Error->getSuccess();
    }
    //gets the status for the homepage -- all users, logged in or not
    public function simpleDetailedStatus(Request $request)
    {

        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($validity);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $statusData = compStatusModel::where([
            ['status_status', '=', 'active'],
        ])->latest()->get();
        $status_list = [];
        $status_count = 0;
        foreach ($statusData as $key => $status) {
            $is_suspended = false;
            $company_profile = $status->companyData;
            if ($company_profile === null && $company_profile->count() <= 0) {
                continue;
            }

            $suspensions = $company_profile->companySuspensions;
            if ($suspensions !== null && $suspensions > 0) {
                foreach ($suspensions as $key => $suspension) {
                    if (!$suspension->is_revoked) {
                        $is_suspended = true;
                        break;
                    }
                }
            }
            if ($is_suspended) {
                continue;
            }

            $comments = $status->comments;
            $status_list[$status_count]["comments"] = $comments;
            $likes = $status->likes;
            $status_list[$status_count]["likes"] = $likes;
            foreach ($comments as $ckey => $comment) {
                if ($comment->host_type === "comp") {
                    $status_list[$status_count]["comp_profile"] = $comment->compProfile;
                } else {
                    $status_list[$status_count]["person_profile"] = $comment->personProfile;
                }
            }
            $status_list[$status_count]["files"] = $status->Status_Files;
            $status_list[$status_count]["company_profile"] = $status->companyData;

            $status_count += 1;
        }

        $this->Error->setSuccess($status_list);
        return $this->Error->getSuccess();
    }
    public function getStatus(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|string|in:normal,comp,guest",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($validity);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $statusData = compStatusModel::where('status_status', 'active')->latest()->get();
        $products = productModel::where('product_isactive', true)->latest()->get();
        // $listProducts = $products->merge($statusData);
        // return $products;
        $collection = collect();
        foreach ($statusData as $key => $status) {
            $status->type = "status";
            $profile = $status->companydata;
            $is_suspended = $profile->isSuspended($profile->comp_id);
            $is_with_held = $profile->isWithHeld($profile->comp_id);
            if ($is_suspended || $is_with_held) {
                continue;
            }

            $status->company_data = $profile;
            $status->status__files = $status->Status_Files;
            // $collection->push($status);
            // array_push($collection, $status);
        }
        foreach ($products as $key => $product) {
            $product->type = "product";

            $profile = $product->companydata;
            $is_suspended = $profile->isSuspended($profile->comp_id);
            $is_with_held = $profile->isWithHeld($profile->comp_id);
            if ($is_suspended || $is_with_held) {
                continue;
            }

            $product->company_data = $profile;
            $product->product_files = $product->Product_Files_By_Token_Id($product->product_gen_token, $profile->comp_id);
            $collection->push($product);
            // array_push($collection, $product);
        }
        // $listProducts = array_reverse($collection, function ($value) {
        //     return $value['created_at'];
        // $listProducts = ksort()
        $listProducts = $collection->sortBy('created_at');
        // });
        // $listProducts = array_so
        $status = [];
        $statusList = [];
        $statusCount = 0;
        foreach ($listProducts as $key => $eachStatus) {
            // return $eachStatus;
            // $listProducts[$key]->companydata = $eachStatus->companydata;

            $comments = $eachStatus->comments;
            $likes = $eachStatus->likes;
            $list_comments = [];

            $listProducts[$key]->num_likes = $likes->count();
            $listProducts[$key]->num_comments = $comments->count();

            foreach ($comments as $ckey => $comment) {
                if ($comment->host_type === "comp") {
                    $comment->compProfile;
                } else {
                    $comment->personProfile;
                }

                //get children of comments or replies to this comment
                $children = commentsModel::where([
                    ['status_token', $comment->comment_token],
                    ['status_id', $comment->id],
                    ['comment_type', 'comment'],
                ])->get();
                foreach ($children as $childkey => $childcomment) {
                    if ($childcomment->host_type === "comp") {
                        $childcomment->compProfile;
                    } else {
                        $childcomment->personProfile;
                    }
                }
                $listProducts[$key]["comments"][$ckey]->comment_replies = $children;
            }
            foreach ($likes as $like) {
                $status["likes"] = ["like" => $like, "details" => $like->personProfile];
                if ($like->host_type === $request->host_type && $like->host_id === $request->host_id && $request->host_token) {
                    $listProducts[$key]->hasLiked = true;
                } else {
                    $listProducts[$key]->hasLiked = false;
                }
            }
            array_push($statusList, $listProducts[$key]);
            // if ($eachStatus->type === "product") {
            //     $listProducts[$key]->product_files = $eachStatus->Product_Files_By_Token_Id($);
            // } else {
            //     $listProducts[$key]->status__files = $eachStatus->Status_Files;

            // }

        }
        // return json_encode(["isSuccess"=> true, "errorMessage"=> null,
        //     "successMessage"=>"success", "data"=>$statusData]);
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess($statusList);
        return $this->Error->getSuccess();
    }
    public function uploadFile(Request $request)
    {
        $rules = [
            "file_value" => 'required|string',
            'host_id' => 'required|integer',
            'host_token' => 'required|string',
            'host_type' => 'required|in:comp',
            "generated_token" => "required|string",
            "api_key" => "required|string",
            "has_files" => "required|integer", //number of saved fils
        ];
        $messages = [
            "required" => "The :attribute is required",
        ];
        $validation = Validator::make($request->all(), $rules, $messages);

        $isNotValidRequest = $this->customValidator->isNotValidRequest($validation);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        // $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        // if($apiset !== true)
        //     return $apiset;
        //check if has uplaoded license
        if (!$this->hasUploadedLicense($request->host_id, $request->host_token)) {
            $this->Error->setError(["Your company is not verified. Please upload license to be verified"]);
            return $this->Error->getError();
        }
        //check generated token
        $isvalid_token = $this->is_valid_generated_token(
            $request->generated_token,
            $request->host_id,
            $request->host_token,
            $request->host_type
        );
        if (!$isvalid_token[0]) {
            return $isvalid_token[1];
        }
        // return $isvalid_token;
        // end checking generated token
        $searchModel = new companydata_model;
        $isExisting = $searchModel::where([['comp_id', '=', $request->comp_id], ['comp_token', '=', $request->comp_token]]);

        if ($isExisting === null) {
            $this->Error->setError(["The company id and company token do not match"]);
            return $this->Error->getError();
        }
        $dir = 'uploads/comp/' . $request->host_token . '/status/';
        if (env("APP_ENV") === "local") {
            $publicpath = public_path($dir);
        } else {
            $publicpath = env("APP_ROOT") . $dir;
        }

        $filename = 'status_' . hash('md5', time() . rand(0, 9999)) . '_image.';

        $this->FileUploader->setFilePath($publicpath);
        $this->FileUploader->setFileDirectory($dir); //path with url
        $this->FileUploader->setFileName($filename);

        $file_url = $this->FileUploader->uplaodJsonFile($request->file_value);
        if (!$file_url) {
            $this->Error->setError(["Failed to upload file"]);
            return $this->FileUploader->getError();
        }
        uploadedFilesModel::create([
            "file_url" => $file_url,
            "file_uploaded_by_id" => $request->host_id,
            "file_uploaded_by_who" => $request->host_token,
            "file_generated_token" => $request->generated_token,
        ]);
        // $this->ApiKey->successFullRequest();
        $file_id = uploadedFilesModel::where([
            ["file_uploaded_by_who", $request->host_token],
            ["file_generated_token", $request->generated_token],
        ])->get()[0]["id"];
        $this->Error->setSuccess([
            "file_id" => $file_id,
            "file_index" => $request->has_files,
            "file_src" => $file_url,
        ]);
        return $this->Error->getSuccess();
    }
    public function setStatus(Request $request)
    {
        // $request->validate([
        //     'comp_id' => "required|"
        // ]);

        $rules = [
            "host_id" => "required|integer|min:1",
            "status_content" => "required|string|max:1001",
            "host_token" => "required|string|min:30",
            "status_type" => "required|string|in:status,product",
            "status_generated_token" => "required|string",
            "host_type" => "required|in:comp",
            "api_key" => "required|string",
            "has_files" => "required|integer", //number of saved fils
        ];
        // validation form
        $validation = Validator::make($request->all(), $rules, []);

        $isNotValidRequest = $this->customValidator->isNotValidRequest($validation);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        // $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        // if($apiset !== true)
        //     return $apiset;

        if (!$this->hasUploadedLicense($request->host_id, $request->host_token)) {
            $this->Error->setError(["Your company is not verified. Please upload license to be verified"]);
            return $this->Error->getError();
        }
        // end validation form

        // check the token is in the database and not used
        $isvalid_token = $this->is_valid_generated_token(
            $request->status_generated_token,
            $request->host_id,
            $request->host_token,
            $request->host_type
        );
        if (!$isvalid_token[0]) {
            return $isvalid_token[1];
        }

        // generated token end

        //check host exist in the database
        if ($request->host_type === "normal") {
            $hostModel = new normalUsersModel;
            $validHost = $hostModel::where([
                ["user_id", "=", $request->host_id],
                ["user_token", "=", $request->host_token],
            ])->get();
        } else {
            $hostModel = new companydata_model;
            $validHost = $hostModel::where([
                ["comp_id", "=", $request->host_id],
                ["comp_token", "=", $request->host_token],
            ])->get();
        }
        if ($validHost === null) {
            $this->Error->setError(["The host id and token do not match "]);
            return $this->Error->getError();
        }
        $uploaded_files = uploadedFilesModel::where([
            ["file_uploaded_by_who", $request->host_token],
            ["file_generated_token", $request->status_generated_token],
        ])->get();
        if ($uploaded_files === null || $uploaded_files->count() <= 0) {
            $this->Error->setError(["The post files haven't been uploaded"]);
            return $this->Error->getError();
        } else if ($uploaded_files->count() !== $request->has_files) //index 0
        {
            $this->Error->setError(["The uploaded files and saved files mismatch.
          Please try again"]);
            foreach ($uploaded_files as $key => $file) {
                $file->delete();
            }
            return $this->Error->getError();
        }
        compStatusModel::create([
            "comp_id" => $request->host_id,
            "comp_token" => $request->host_token,
            "status_content" => $request->status_content,
            "has_files" => true,
            "num_files" => $uploaded_files->count(),
            "status_generated_token" => $request->status_generated_token,
        ]);

        tokenStatusGeneratorModel::where([
            ['generated_token', $request->status_generated_token],
            ['generated_for_id', $request->host_id],
        ])->update(['generated_completed' => true]);
        // companyStatusFilesModel::insert($statusFilesObject);

        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();
    }

    public function is_valid_generated_token($generated_token, $host_id, $host_token, $host_type)
    {
        $valid_generated_token = tokenStatusGeneratorModel::where([
            ['generated_token', '=', $generated_token],
            ['generated_for_id', '=', $host_id],
            ['generated_for_token', '=', $host_token],
            ['generated_for_type', '=', $host_type],
        ])->get();

        if ($valid_generated_token == null || $valid_generated_token->count() <= 0) {
            $this->Error->setError(["The provided status token is not valid"]);
            return [
                false, $this->Error->getError(),
            ];
        } else if ($valid_generated_token[0]->generated_completed) {
            $this->Error->setError(["The status token has expired. "]);
            return [
                false, $this->Error->getError(),
            ];
        } else {
            return [true, null];
        }
    }

    public function likeStatus(Request $request)
    {
        $rules = [
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:comp,normal",
            "status_id" => "required|integer",
            "api_key" => "required|string",
        ];
        $messages = [
            "min" => "The :attribute value provided is less than 2 characters",
            "in" => "The :attribute value given is not valid",
        ];

        $is_valid_request = Validator::make($request->all(), $rules, $messages);
        $isNotValidRequest = $this->customValidator->isNotValidRequest($is_valid_request);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if ($status_valid === null || $status_valid->count() <= 0) {

            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        //is it valid host
        if ($request->host_type === "normal") {
            $host_is_valid = normalUsersModel::where([
                ['user_id', $request->host_id],
                ['user_token', $request->host_token],
            ])->get();
        } else {
            $host_is_valid = companydata_model::where([
                ['comp_id', $request->host_id],
                ['comp_token', $request->host_token],
            ])->get();
        }

        if ($host_is_valid === null || $host_is_valid->count() <= 0) {

            $this->Error->setError(["The host provided is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $likedbefore = likesModel::where([
            ["status_id", $request->status_id],
            ["host_id", $request->host_id],
            ["host_token", $request->host_token],
            ["host_type", $request->host_type],
        ])->exists();
        if ($likedbefore) {
            $this->Error->setError(["You  already liked before"]);
            return $this->Error->getError();
        }
        $lModel = new likesModel;
        $lModel->status_id = $request->status_id;
        $lModel->host_id = $request->host_id;
        $lModel->host_token = $request->host_token;
        $lModel->host_type = $request->host_type;

        if (!$lModel->save()) {
            $this->Error->setError(["Failed to set the like for the status "]);
            return $this->Error->getError();
        }
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();
    }

    public function unlikeStatus(Request $request)
    {
        $rules = [
            "status_id" => "required|integer",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:normal,comp",
            "api_key" => "required|string",
        ];
        $messages = [];

        $isNotValidRequest = $this->customValidator->isNotValidRequest(Validator::make($request->all(), $rules, $messages));
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $status_valid = compStatusModel::where('id', $request->status_id)->get();
        if ($status_valid === null || $status_valid->count() <= 0) {
            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }

        //is it valid host
        if ($request->host_type === "normal") {
            $host_is_valid = normalUsersModel::where('user_id', $request->host_id)->get();
        } else {
            $host_is_valid = companydata_model::where('comp_id', $request->host_id)->get();
        }

        if ($host_is_valid === null || $host_is_valid->count() <= 0) {
            $this->Error->setError(["The host provided is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $status = likesModel::where([
            ["status_id", $request->status_id],
            ["host_id", $request->host_id],
            ["host_token", $request->host_token],
            ["host_type", $request->host_type],
        ])->get();
        foreach ($status as $s) {
            $s->delete();
        }
        // $this->ApiKey->successFullRequest();
        $this->Error->setSuccess([]);
        return $this->Error->getSuccess();
    }

    public function removePost(Request $request)
    {
        $rules = [
            "status_id" => "required|integer",
            "status_generated_token" => "required|string",
            "host_id" => "required|integer",
            "host_token" => "required|string",
            "host_type" => "required|in:comp",
            "api_key" => "required|string",
        ];
        $validity = Validator::make($request->all(), $rules, []);
        $isNotValidRequest = $this->CustomRequestValidator->isNotValidRequest($validity);
        if ($isNotValidRequest) {
            return $isNotValidRequest;
        }

        $apiset = $this->apiHandleSet($request->host_id, $request->host_token, $request->api_key);
        if ($apiset !== true) {
            return $apiset;
        }

        $status_valid = compStatusModel::where([
            ['id', $request->status_id],
            ["comp_id", $request->host_id],
            ["comp_token", $request->host_token],
            ["status_generated_token", $request->status_generated_token],
            ["status_status", "active"],
        ])->get();
        if ($status_valid === null || $status_valid->count() <= 0) {
            $this->Error->setError(["The target status is not valid or doesn't exist"]);
            return $this->Error->getError();
        }
        $status_valid[0]->delete();

        //is it valid host
        $this->Error->setSuccess([]);
        // $this->ApiKey->successFullRequest();
        return $this->Error->getSuccess();
    }

    public function hasUploadedLicense($comp_id, $comp_token)
    {
        return companyLicenseModel::where([
            ["comp_id", $comp_id],
            ["comp_token", $comp_token],
            ["is_expired", false],
        ])->exists();
    }
}
