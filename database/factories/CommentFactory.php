<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
  $post_id = App\Post::all()->random(1)[0]->id;
  $user_id = App\User::all()->random(1)[0]->id;
  return [
    'content' => $faker->text(256),
    'post_id' => $post_id,
    'user_id' => $user_id
  ];
});
