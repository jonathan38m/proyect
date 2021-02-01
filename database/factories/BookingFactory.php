<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'students'    => 2,
        'title'       => $faker->title,
        'lname'       => $faker->lastName,
        'fname'       => $faker->firstName,
        'email'       => $faker->email,
        'country_id'  => 1,
        'address'     => $faker->address,
        'city'        => $faker->city,
        'meetAirport' => 0,
        'total'       => 300.20,
        'payment_id'  => 1,
        'terms'       => 1,
        'token'       => '',

    ];
});
