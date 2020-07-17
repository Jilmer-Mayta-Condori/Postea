<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $usuarios = App\User::all()->pluck('_id');
    return [
        'user_id' => $faker->randomElement($usuarios),
        'content' => $faker-> paragraph(3),
    ];
});
