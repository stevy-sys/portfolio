<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    $animate = ['fadeInLeft','fadeInRight','fadeInBottom','fadeInTop'];
    return [
        'animate' => $animate[rand(0,3)],
        'color' => rand(1,4),
        'title' => $faker->sentence(4),
        'date' => '22/11/20',
        'content' => $faker->sentence(20),
    ];
});
