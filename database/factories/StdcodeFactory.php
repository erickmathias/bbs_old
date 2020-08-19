<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Stdcode;
use Faker\Generator as Faker;

$factory->define(Stdcode::class, function (Faker $faker) {

    return [
        'standard_code' => $faker->word,
        'shape_code' => $faker->randomDigitNotNull,
        'remarks' => $faker->word
    ];
});
