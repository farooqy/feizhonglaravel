<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\models\companies\companyAddressModel::class, function (Faker $faker) {
	$comp_token = hash('md5', time()*rand(0,99999));

	return [
		"comp_id" => rand(100,300),
		"comp_token" => $comp_token,
		"comp_addr_one" => $faker->address(),
		"comp_addr_two" => $faker->address(),
		"comp_city" => $faker->city(),
		"comp_province" => $faker->state(),
	];
});
