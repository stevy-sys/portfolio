<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    $animate = ['fadeInLeft','fadeInRight','fadeInBottom','fadeInTop'];
    return [
        'animate' => $animate[rand(0,3)],
        'img' => '/storage/blog/aHuSVzZTMsLBcJedcVSllkzrjYtHseaMPx69Cr8I.jpg"',
        'url_github' =>  $faker->url,
        'titre' =>  $faker->sentence(3),
        'type' => $faker->sentence(5),
        'video' => '/storage/blog/aHuSVzZTMsLBcJedcVSllkzrjYtHseaMPx69Cr8I.jpg'
    ];
});
