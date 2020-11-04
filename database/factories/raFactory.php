<?php

use Faker\Generator as Faker;

$factory->define(App\ra::class, function (Faker $faker) {
    return [
        'number' => $faker->randomDigit,
        'description' => $faker->paragraph,
        'module_id' => \App\module::all()->random()->id,
        'deleted' => $faker->boolean = false,
    ];
});