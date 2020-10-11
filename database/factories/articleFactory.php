<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\article;
use Faker\Generator as Faker;

$factory->define(article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
       // 'image' => str::random(10)
        'image' => $faker-> image('public/images',500,500,null,false)
    ];
});
