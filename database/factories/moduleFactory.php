<?php

use Faker\Generator as Faker;

$factory->define(App\module::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'cycle_id' => \App\cycle::all()->random()->id,
        'deleted' => $faker->boolean = false,
    ];
});
