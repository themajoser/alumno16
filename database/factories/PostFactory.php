<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body'  => $faker->paragraph(3),
        'published_at' => $faker->dateTimeThisMonth,
        'user_id'   => $faker->numberBetween(1,10)
    ];
});
