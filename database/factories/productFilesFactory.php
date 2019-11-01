<?php

use Faker\Generator as Faker;

$factory->define(App\models\products\productFilesModel::class, function (Faker $faker) {
    $comp_id = -1;
    $generated_token = "default_token";
    $file_url = "default_url";
    return [
        "file_uploaded_by_id" => $comp_id,
        "product_gen_token" => $generated_token,
        "file_url" => $file_url,
        "file_type" => "img",
    ];
});
