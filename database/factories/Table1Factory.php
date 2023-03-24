<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Table1;
use Faker\Generator as Faker;

$factory->define(Table1::class, function (Faker $faker) {
    return [
        //
        'title' => substr($faker->sentence(2), 0, -1),
        'paste_data' => $faker->paragraph,
    ];
});
