<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        "animate" => "fadeInLeft",
        "img" => "/images/za.jpg",
        "date" => "20 avril 2020",
        "titre" => $faker->sentence(2),
        "title" => $faker->sentence(5),
        "content" => $faker->sentence(20)
    ];
});
