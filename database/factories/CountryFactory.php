<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    //$faker = $faker->unique();
    return [
        'name' => $faker->country,
        'code' => $faker->countryCode,
    ];
});
