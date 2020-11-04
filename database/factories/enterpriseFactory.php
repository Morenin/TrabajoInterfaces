<?php

use Faker\Generator as Faker;

$factory->define(App\enterprise::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'deleted' => $faker->boolean = false,
    ];
});
