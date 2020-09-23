<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Entities\Post::class, function (Faker $faker) {
    return [
        'title'   => $faker->text,
        'author'  => $faker->userName,
        'content' => $faker->paragraph,
    ];
});
