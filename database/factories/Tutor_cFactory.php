<?php

use Faker\Generator as Faker;

$factory->define(App\tutor_c::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname' => $faker->firstname,
        'email' => $faker->safeEmail,
        'phone' => $faker->sentence,
        'cycle_id' => \App\cycle::all()->random()->id,
        'deleted' => $faker->boolean = false,





    ];
});
