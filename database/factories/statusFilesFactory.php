<?php

use Faker\Generator as Faker;

$factory->define(App\models\uploadedFilesModel::class, function (Faker $faker) {
  $file_url = 'defaultseaderurl';
  $comp_id = 0;
  $comp_token = 'defaultseedertokenfiles';
  $generated_token = 'defaultseedertokengenerate';
    return [
        'file_url' => $file_url,
        'file_uploaded_by_id' => $comp_id,
        'file_uploaded_by_who' => $comp_token,
        'file_generated_token' => $generated_token,
    ];
});
