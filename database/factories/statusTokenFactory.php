<?php

use Faker\Generator as Faker;
use App\models\companies\companydataModel;
$factory->define(App\models\tokenStatusGeneratorModel::class, function (Faker $faker) {
  $token = hash('md5', time().rand(0,9999));
  $companies = companydataModel::get();
  $random_comp = rand(0, $companies->count());
  $comp_id = $companies[$random_comp]->comp_id;
  $comp_token = $companies[$random_comp]->comp_token;

    return [
        'generated_token' => $token,
        'generated_for_id' => $comp_id,
        'generated_for_type' => 'comp',
        'generated_for_token' => $comp_token,
    ];
});
