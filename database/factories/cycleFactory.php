<?php

use Faker\Generator as Faker;

$factory->define(App\cycle::class, function (Faker $faker) {
    return [
        'grade' => $faker->sentence,
        'name' => $faker->name,
        'year' => $faker->year($max = 'now'),
        'deleted' => $faker->boolean = false,
    ];
});
