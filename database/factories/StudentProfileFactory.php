<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\StudentProfile;
use Faker\Generator as Faker;

$factory->define(StudentProfile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'couse_name' => $faker->sentence(3),
        'period' => $faker->randomNumber(1) . ' Periodo',
        'university_name' => $faker->company,
        'bio' => $faker->sentence(10),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber(),
        'user_id' => 3,
        'lattes_link' => $faker->url(),
    ];
});
