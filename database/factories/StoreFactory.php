<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {

    return [
        'name' => $faker->company,
        'location' => $faker->city,
        'owner' => $faker->name,
        'net_worth' => rand(1000000, 10000000)
    ];
});
