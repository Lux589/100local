<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ratings;
use Faker\Generator as Faker;

$factory->define(Ratings::class, function (Faker $faker) {
    return [
        'rating' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
