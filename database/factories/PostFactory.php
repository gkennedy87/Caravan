<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords= 10, $variableWords=true),
        'body' => $faker->paragraphs($nb=5, $asText = true),
        'user_id' => $faker->numberBetween($min =1, $max =3)
    ];
});
