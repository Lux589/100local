<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Companies;
use App\Services;
use App\Ratings;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->bs,
        'visits' => $faker->randomDigit,
        'active' => $faker->boolean($chanceOfGettingTrue= 50),
        'address_line_1' => $faker->buildingNumber,
        'address_line_2' => $faker->streetAddress,
        'city_town' => $faker->city,
        'postal_code' => $faker->postcode,
        'category_id' => factory(Categories::class),
        'ratings_id' => factory(Ratings::class),
        'services_id' => factory(Services::class)
    ];
});
