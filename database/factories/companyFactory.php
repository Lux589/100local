<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->bs,
        'visits' => $faker->randomDigit,
        'active' => $faker->boolean($chanceOfGettingTrue= 50),
        'address_line_1' => $faker->building,
        'address_line_2' => $faker->streetAddress,
        'city_town' => $faker->city,
        'postal_code' => $faker->postcode
    ];
});
