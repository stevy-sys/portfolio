<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skills;
use Faker\Generator as Faker;

$factory->define(Skills::class, function (Faker $faker) {
    $icon = ['bulb','outline','data','phone3'];
    $animate = ['fadeInLeft','fadeInRight','fadeInBottom','fadeInTop'];
    return [
        'techno' => $faker->sentence(2),
        'color' => rand(1,4),
        'pourcentage' => rand(0,100),
        'animate' => $animate[rand(0,3)],
    ];
});
