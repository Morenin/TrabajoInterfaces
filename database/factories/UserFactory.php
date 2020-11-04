<?php

use Faker\Generator as Faker;


$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname' => $faker->firstname,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'email_verified_at' => $faker->date($format='Y-m-d', $max= 'now'),
        'type' => 'al',
        'enterprise_id' => \App\enterprise::all()->random()->id,
        'cycle_id' => \App\cycle::all()->random()->id,
        'remember_token' => str_random(10),
        'deleted' => $faker->boolean = false,
    ];
});
