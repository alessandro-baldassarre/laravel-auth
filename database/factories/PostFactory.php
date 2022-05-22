<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = Str::slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'publish' => 1,
        'photo' => $faker->imageUrl(640, 480, 'post', true),
        'counter' => 1
    ];
});
