<?php

use Faker\Generator as Faker;

$factory->define(App\belong::class, function (Faker $faker) {
    return [
        'student_id'=> \app\student::all()->random()->id,
        'enterprise_id' => \app\enterprise::all()->random()->id,
        'deleted' => $faker->boolean

    ];
});
