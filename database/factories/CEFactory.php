<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;


$factory->define(\App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'price' => $faker->numberBetween(1000,10000),
        'image' => $faker->imageUrl(),
    ];
});
$factory->define(\App\Episode::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'videoUrl' => 'http://clips.vorwaerts-gmbh.de/VfE_html5.mp4'
    ];
});
