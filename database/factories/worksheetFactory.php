<?php

use Faker\Generator as Faker;

$factory->define(App\worksheet::class, function (Faker $faker) {
    return [
        
        'date' => $faker -> date($format= 'Y-m-d', $max ='now'),
        'description' => $faker->paragraph,
        'student_id' => \App\student::all()->random()->id,
        'accepted' => $faker->boolean,
        'deleted' => $faker->boolean,
    ];
});
