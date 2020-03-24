<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'img' => $faker->imageUrl,
        'title' => $faker->sentence,
        'author' => $faker->name,
        'body' => $faker->text($maxNbChars = 1000) 
    ];
});
