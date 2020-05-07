<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Attendee::class, function (Faker $faker) {
    return [
        'fullname' => $faker->sentence(1),
        'famID' => $faker->randomNumber(1),
        'Attendance' => 0
    ];
});
