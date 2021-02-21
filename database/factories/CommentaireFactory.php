<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentaire;
use Faker\Generator as Faker;

$factory->define(Commentaire::class, function (Faker $faker) {
    return [
        "blog_id" => rand(1,10),
        "content" => $faker->sentence(20)
    ];
});
