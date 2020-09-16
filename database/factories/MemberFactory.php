<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'secret' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => \Illuminate\Support\Str::random(10),
    ];
});
