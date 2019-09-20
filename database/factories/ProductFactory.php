<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->word,
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'brand_id' => random_int(1,5)
    ];
});
