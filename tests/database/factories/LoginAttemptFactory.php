<?php

use Faker\Generator;
use Salfade\LoginTracker\Models\LoginAttempt;

/* @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(LoginAttempt::class, function (Generator $faker) {
    return [
        'ip_address' => $faker->ipv4,
    ];
});
