<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\models\companies\companyTypeModel::class, function (Faker $faker) {

    $comp_token = hash('md5', time() * rand(0, 99999));
    $comp_type = [
        "Aerospace industry",
        "Agriculture",
        "Beauty Product",
        "Chemical industry",
        "Computer industry",
        "Construction industry",
        "Defense industry",
        "Education industry",
        "Energy industry",
        "Entertainment industry",
        "Financial services industry",
        "Food production",
        "Health care industry",
        "Hospitality industry",
        "Manufacturing",
        "Mass media",
        "Mining",
        "Telecommunications industry",
        "Transport industry",
        "Water industry",
        "Direct Selling industry",

    ];
    $comp_subtypes = [
        [
            "Civil Aircraft",
            "General Aviation Aircraft",
            "Commercial Heavy Aircraft",
            "Military Aircaft",
            "Helicopters",
            "Unmanned aerial vehicles",
            "Missiles",
            "Space launchers",
            "Spacecraft",
            "Airships",
            "Propulsion",
            "Avionics",
        ],
        [
            "Fishing industry",
            "Timer Industry",
            "Tobacco Industry",
        ],
        [
            "Face make up",
            "Slim products",
        ],
        [
            "Pharmaceutical Industry",
        ],
        [
            "Software Industry",
        ],
        [
            "Metals",
            "Bricks",
        ],
        [
            "Arms industry",
        ],
        [
            "Books",
            "Pens",
        ],
        [
            "Electrical Power",
            "Petroleum Industry",

        ],
        [
            "Dj Equeipments",
        ],
        [
            "Insurance industry",
        ],
        [
            "Fruit Production",
        ],
        [
            "Hospital facilities",
        ],
        [
            "Motion industry",
        ],
        [
            "Automotive Industry",
            "Electronic Industry",
            "Pulp and paper",
            "Steel Industry",
            "Ship building",
        ],
        [
            "Broadcasting",
            "Film Industry",
            "Music Industry",
            "News Media",
            "Publishing",
            "World Wide Web",
        ],
        [
            "Gold mining",
            "Mineral mining",
        ],
        [
            "Internet",
            "Signal Boosters",
        ],
        [
            "Brigdes",
            "Road staff",
        ],
        [
            "Water bottles",
            "Drinks",
        ],
        [
            "Heavy products",
        ],
    ];

    $randomint = rand(0, count($comp_type) - 1);
    $randomtype = $comp_type[$randomint];
    $randomintsubtype = rand(0, count($comp_subtypes[$randomint]) - 1);
    $randomsubtype = $comp_subtypes[$randomint][$randomintsubtype];
    return [
        "comp_id" => rand(500, 700),
        "comp_token" => hash('md5', 'default'),
        "comp_type" => $randomtype,
        "comp_subtype" => $randomsubtype,
        "comp_description" => $faker->sentence(10),
    ];
});
