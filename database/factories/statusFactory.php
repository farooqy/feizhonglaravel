<?php

use Faker\Generator as Faker;

$factory->define(App\models\compStatusModel::class, function (Faker $faker) {
  $generated_token = hash('md5', time());
  $comp_id = 0;
  $comp_token = 'defaultokenfromseeder';
  $num_files = rand(2,8);
    return [
        "status_generated_token" => $generated_token,
        "comp_id" => $comp_id ,
        "comp_token" => $comp_token,
        "status_content" => $faker->paragraph(50,330),
        "has_files" => true,
        "num_files" => $num_files
    ];
});
