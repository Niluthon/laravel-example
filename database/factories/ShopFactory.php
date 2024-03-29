<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'opening_date' => $faker->date(),
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address
    ];
});
