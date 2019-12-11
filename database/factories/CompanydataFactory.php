<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\models\companies\companydataModel::class, function (Faker $faker) {
    $company_modes = [
        "LLC", "LTD", "", "Industries", "CO.",
    ];

    $comp_token = hash('md5', time() * rand(0, 99999));
    $phonenumber = str_replace("-", '', $faker->unique()->phoneNumber());
    if (env("APP_ENV") === "local") {
        $path = public_path("/uploads/comp/" . $comp_token . "/profile");
    } else {
        $path = env("APP_ROOT") . "uploads/comp/" . $comp_token . "/profile";
    }

    if (!is_dir($path)) {
        mkdir($path, 0765, true);
    }

    $filename = "/profile_me_" . rand(0, 99999) . "_.png";
    $urlpath = env('APP_URL') . "/uploads/comp/" . $comp_token . "/profile/";
    return [
        "comp_token" => $comp_token,
        "comp_name" => $faker->company(),
        "comp_email" => $faker->email,
        "comp_phone" => "+86" . str_replace('+', '', $phonenumber),
        "comp_pass" => '$2y$10$QkuhomOWgB7UTP/IKMBkNe6lGD.y4LUVgwkMq51.sA.1Vy5ziYzPq',
        "comp_logo" => $urlpath . $faker->image($path, 640, 480, 'business', false),
    ];
});
