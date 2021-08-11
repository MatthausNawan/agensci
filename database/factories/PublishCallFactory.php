<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\PublishCall;
use Faker\Generator as Faker;

$factory->define(PublishCall::class, function (Faker $faker) {
    return [
        'magazine' => $faker->company,
        'issn' => $faker->randomNumber(7) . "-". $faker->randomNumber(2),
        'qualis' => $faker->word(),
        'frequency' => 'Mensal',
        'dossie' => $faker->sentence(10),
        'theme' => $faker->sentence(20),
        'submission_period' => $faker->dateTimeBetween(now()->subMonth(3), now()->addYears(2), $timezone = null),
        'organization' => $faker->company,
        'link' => $faker->url(),
    ];
});
