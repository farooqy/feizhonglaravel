<?php

use Faker\Generator as Faker;

$factory->define(App\models\products\productModel::class, function (Faker $faker) {
    $units = [
        "Kg(s)",
        "unit(s)",
        "piece(s)",
        "container(s)",
        "Gram(s)",
        "pound(s)"
    ];
    $selected_unit = $units[rand(0,6)];
    $generated_token = "default_token";
    $comp_id = -1;
    return [
        "product_gen_token" => $generated_token,
        "product_for_id" => $comp_id,
        "product_name" => $faker->name,
        "product_description" => $faker->paragraph(50,300),
        "product_measure_unit" =>$selected_unit,
        "product_measure_currency" => "RMB",
        "product_price" => rand(7,100),
        "product_isactive" => true,
    ];
});
