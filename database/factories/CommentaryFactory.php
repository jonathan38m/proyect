<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentary;
use Faker\Generator as Faker;

$factory->define(Commentary::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'nationality' => $faker->country,
        'start_date'  => now(),
        'finish_date' => now(),
        'program'     => 'Quito',
        'commentary'  => $faker->text,
    ];
});
