<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->text(140),
        'user_id' => $faker->numberBetween($min = 1, $max = 23)
    ];
});
