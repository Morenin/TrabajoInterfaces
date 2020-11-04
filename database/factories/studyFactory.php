<?php

use Faker\Generator as Faker;

$factory->define(App\study::class, function (Faker $faker) {
    return [
        'student_id' => \App\student::all()->random()->id,
        'cycle_id' => \App\cycle::all()->random()->id,
        'deleted' => $faker->boolean,
    ];
});
