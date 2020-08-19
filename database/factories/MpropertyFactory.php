<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mproperty;
use Faker\Generator as Faker;

$factory->define(Mproperty::class, function (Faker $faker) {

    return [
        'standard_code_id' => $faker->randomDigitNotNull,
        'property' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
