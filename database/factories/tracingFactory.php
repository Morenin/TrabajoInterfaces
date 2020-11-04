<?php

use Faker\Generator as Faker;

$factory->define(App\tracing::class, function (Faker $faker) {
    return [
        'type'=> $faker->paragraph,
        'reason' => $faker->paragraph,
        'observation' => $faker->paragraph,
        'tutor_c_id' =>\App\tutor_c::all()->random()->id,
        'deleted' => $faker->boolean
    ];
});
