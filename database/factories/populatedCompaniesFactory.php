<?php

use Faker\Generator as Faker;

$factory->define(App\models\companies\populatedCompaniesModel::class, function (Faker $faker) {
    $comp_id = -1;
    $comp_token = "default_token";
    return [
        "comp_id" => $comp_id,
        "comp_token" => $comp_token
    ];
});
