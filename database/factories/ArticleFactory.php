<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'alias' => $faker->name,
        'view' => 'index',
        'title' => 'title',
        'keywords' => $faker->paragraph,
        'description' => $faker->paragraph,
    ];
});
