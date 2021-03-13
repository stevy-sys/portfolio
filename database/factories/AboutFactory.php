<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    $icon = ['bulb','outline','data','phone3'];
    $animate = ['fadeInLeft','fadeInRight','fadeInBottom','fadeInTop'];
    return [
        'icon' => $icon[rand(0,3)],
        'animate' => $animate[rand(0,3)],
        'color' => rand(1,4),
        'taille' => 'icon2',
        'qualite' => $faker->sentence(15),
    ];
});
