<?php

use Faker\Generator as Faker;

$factory->define(App\tutor_e::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname' => $faker->firstname,
        'email' => $faker->safeEmail,
        'phone' => $faker->sentence,
        'enterprise_id' => \App\enterprise::all()->random()->id,
        'deleted' => $faker->boolean = false,


    ];
});
