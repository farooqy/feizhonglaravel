<?php

namespace App\models\status;

use Illuminate\Database\Eloquent\Model;

use App\customClass\Error;
class commentsModel extends Model
{
    //
    protected $table = "status_comments";
    protected $fillable = ["status_id", "status_token",
      "host_id","host_token", "host_type", "comment_text",
      "comment_token", "comment_type", "is_active"];
    public function status()
    {
    	return $this->belonsTo('App\models\compStatusModel', 'status_generated_token', 'status_token');
    }
    public function products()
    {
        return $this->belongsTo('App\models\products\productModel', 'product_gen_token', 'status_token');
    }
    public function personProfile()
    {
    	return $this->belongsTo('App\models\normalUsersModel', 'host_id', 'user_id');
    }
    public function compProfile()
    {
    	return $this->belongsTo('App\models\companydata_model','host_id', 'comp_id');
    }
}
