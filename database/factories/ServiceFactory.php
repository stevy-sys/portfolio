<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Http\Models\Service;

$factory->define(Service::class, function (Faker $faker) {
    $icon = ['bulb','outline','data','phone3'];
    return [
        'color' => rand(1,4),
        'icon' => $icon[rand(0,3)],
        'title' => $faker->sentence(3),
        'content' => $faker->sentence(20),
    ];
});
