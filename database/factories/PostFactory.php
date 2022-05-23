<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = Str::slug($title, '-');

    return [
        'user_id'=> $faker->unique()->numberBetween(1, User::count()),
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'photo' => $faker->imageUrl(640, 480, 'post', true),
    ];
});
