<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'image' => 'd149127e09219d57458a4eabf14c63ba.jpg',
        //'image' => $faker->image('public/storage', 400, 300, null, false),
        'content' => $faker->paragraph(3),
    ];
});
