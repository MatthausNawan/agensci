<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Contest;
use Faker\Generator as Faker;

$factory->define(Contest::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'occupations' => $faker->sentence(4),
        'salary' => $faker->randomFloat(2, 10000, 2000),
        'vacancies' => $faker->randomNumber(3),
        'requirements' => $faker->sentence(10),
        'link' => $faker->url(),
    ];
});
