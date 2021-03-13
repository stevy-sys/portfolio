<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Http\Models\Commentaire;

$factory->define(Commentaire::class, function (Faker $faker) {
    return [
        "blog_id" => rand(1,10),
        "user_id" => rand(1,10),
        "content" => $faker->sentence(20)
    ];
});
