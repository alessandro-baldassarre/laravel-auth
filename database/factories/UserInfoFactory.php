<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserInfo;
use App\User;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->unique()->numberBetween(1, User::count()),
        'date_of_birth' => $faker->date(),
        'address' => $faker->address(),
    ];
});
