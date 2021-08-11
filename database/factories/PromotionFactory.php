<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'entity' => $faker->company,
        'type' => $faker->sentence(6),
        'thematic' => $faker->sentence(12),
        'resources_amount' => $faker->randomFloat(2, 10000, 2000),
        'subscription_period' => $faker->dateTimeBetween(now()->subMonth(3), now()->addYears(2), $timezone = null),
        'edital_link' => $faker->url(),
        'creator_id' => 1
    ];
});
