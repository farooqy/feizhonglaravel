<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\models\companies\companydataModel::class, function (Faker $faker) {
	$company_modes = [
		"LLC", "LTD", "", "Industries", "CO."
	];

	$comp_token = hash('md5', time()*rand(0,99999));
  $phonenumber = str_replace( "-",'', $faker->unique()->phoneNumber());
	if(env("APP_URL") ==="local")
  	$path = public_path("/uploads/comp/".$comp_token."/profile");
	else
		$path = env("APP_ROOT")."uploads/comp/profile/".$comp_token."/profile";
	if(!is_dir($path))
		mkdir($path,0765, true);
  $filename = "/profile_me_".rand(0, 99999)."_.png";
	$urlpath = "/uploads/comp/".$comp_token."/";
    return [
      "comp_token" => $comp_token,
      "comp_name" => $faker->company(),
      "comp_email" => $faker->email,
      "comp_phone" => "+86". str_replace('+', '', $phonenumber),
      "comp_pass" => '$2y$10$eEoHjf8i0izYV9ubeJgKyONzv0PE2OV7fv5GEcig1eJQlmJ0ScQOO',
      "comp_logo" => $urlpath . $faker->image($path, 640, 480, 'business', false),
    ];
});
