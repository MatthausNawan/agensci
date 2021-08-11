<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'company' => $faker->company(),
        'area' => $faker->sentence(4),
        'type' => $faker->randomElement([Job::TYPE_TRAINEE,Job::TYPE_ESTAGIO,Job::TYPE_EMPREGO]),
        'formation' => $faker->sentence(6),
        'profile' => $faker->sentence(10),
        'ocuppation' => $faker->sentence(3),
        'qty_jobs' => $faker->randomNumber(2),
        'address'=> $faker->address(),
        'salary' => $faker->randomFloat(2, 10000, 2000),
        'expiration_date' => $faker->dateTimeBetween(now()->subMonth(3), now()->addYears(2), $timezone = null),
        'segment_id' => null,
        'company_id' => null,
        'creator_id' => null,
        'link' => $faker->url(),
    ];
});
