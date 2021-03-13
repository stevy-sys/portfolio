<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Http\Models\Education;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'content' => $faker->sentence(20)
    ];
});
