<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'role_id'        => 2,
        'school_id'      => $faker->numberBetween(1,128),
        'first'          => $faker->firstName,
        'last'           => $faker->lastName,
        'phone'          => $faker->phoneNumber,
        'email'          => $faker->email,
        'paypal'         => $faker->email,
        'password'       => bcrypt('user'),
        'verified'       => $faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),
        'remember_token' => str_random(10),
    ];
});
