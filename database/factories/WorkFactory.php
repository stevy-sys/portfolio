<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    $animate = ['fadeInLeft','fadeInRight','fadeInBottom','fadeInTop'];
    return [
        'animate' => $animate[rand(0,3)],
        'img' => 'images/za.jpg',
        'url' =>  $faker->url,
        'title' =>  $faker->sentence(3),
        'type' => $faker->sentence(5),
    ];
});
