<?php

use Faker\Generator as Faker;

$factory->define(App\student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname' => $faker->firstname,
        'deleted' => $faker->boolean 
    ];
});
