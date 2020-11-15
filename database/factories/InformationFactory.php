<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Information;
use Faker\Generator as Faker;

$factory->define(Information::class, function (Faker $faker) {
    return [
        'paragraph' => $faker->paragraph()
    ];
});
