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

$factory->define(Gameday\User::class, function (Faker\Generator $faker) {
    return [
        'role_id'        => 2,
        'school_id'      => $faker->numberBetween(1,128),
        'name'           => $faker->name,
        'phone'          => $faker->phoneNumber,
        'email'          => $faker->unique()->email,
        'paypal'         => $faker->email,
        'password'       => bcrypt('user'),
        'verified'       => $faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Gameday\Game::class, function (Faker\Generator $faker) {
    return [
        'home_team'     => $faker->numberBetween(1,128),
        'away_team'     => $faker->numberBetween(1,128),
        'game_datetime' => $faker->dateTimeThisYear()
    ];
});

$factory->define(Gameday\Ticket::class, function (Faker\Generator $faker) {
    return [
        'game_id'     => $faker->numberBetween(1,1000),
        'school_id'   => $faker->numberBetween(1,128),
        'seller_id'   => $faker->numberBetween(1,1000),
        'buyer_id'    => $faker->numberBetween(1,1000),
        'description' => '',
        'price'       => $faker->biasedNumberBetween($min = 1000, $max = 10000, $function = 'sqrt'),
        'quantity'    => $faker->numberBetween(1,5),
        'seat'        => $faker->numberBetween(1,200),
        'row'         => $faker->numberBetween(1,100),
        'section'     => $faker->numberBetween(1,20),
        'featured'    => $faker->numberBetween(0,1),
        'sold'        => $faker->numberBetween(0,1)
    ];
});
