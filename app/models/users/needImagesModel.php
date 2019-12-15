<?php

namespace App\models\users;

use Illuminate\Database\Eloquent\Model;

class needImagesModel extends Model
{
    //
    protected $table = "need_images";
    protected $fillable = [
        "need_id", "need_token", "file_type", "file_url",
    ];

    public function needData()
    {
        return $this->belongs('App\models\users\needImagesModel',
            'id', 'need_id', 'need_token', 'need_token');
    }
}
