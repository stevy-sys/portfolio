<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Http\Models\Experience;

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
