<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $icon = ['bulb','outline','data','phone3'];
    return [
        'color' => rand(1,4),
        'icon' => $icon[rand(0,3)],
        'title' => $faker->sentence(3),
        'content' => $faker->sentence(20),
    ];
});
