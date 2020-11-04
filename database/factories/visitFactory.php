<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tracing_id' =>\App\tracing::all()->random()->id,
        'enterprise_id' =>\App\enterprise::all()->random()->id,
        'date' => $faker->date($format= 'Y-m-d', $max ='now'),
        'kms' => $faker->randomFloat($nbMaxDecimals = NULL,$min = 0,$max = 2),
        'accepted' => $faker->boolean,
        'deleted' => $faker->boolean
    ];
});
