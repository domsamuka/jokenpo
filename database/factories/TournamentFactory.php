<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tournament;
use Faker\Generator as Faker;

$factory->define(Tournament::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title);
    return [
        'user_id' => 1,
        'title' => $title,
        'slug' => $slug,
        'image' => $faker->imageUrl(),
        'description' => $faker->randomHtml(),
        'when' => $faker->dateTimeBetween('+1 week', '+1 month'),
        'public' => $faker->boolean,
        'status' => 1
    ];
});
