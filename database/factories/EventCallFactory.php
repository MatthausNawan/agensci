<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EventCall;
use Faker\Generator as Faker;

$factory->define(EventCall::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'media' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/2bSBskTQj-c?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'media_type' => 'youtube',
        'expiration_date' => $faker->dateTimeBetween(now()->subMonth(3), now()->addYears(2), $timezone = null),
        'creator_id' => 1
    ];
});
