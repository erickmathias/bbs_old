<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bbsformula;
use Faker\Generator as Faker;

$factory->define(Bbsformula::class, function (Faker $faker) {

    return [
        'stdcode_id' => $faker->randomDigitNotNull,
        'shape_code' => $faker->randomDigitNotNull,
        'shape' => $faker->word,
        'formula' => $faker->word,
        'd6' => $faker->randomDigitNotNull,
        'd8' => $faker->randomDigitNotNull,
        'd10' => $faker->randomDigitNotNull,
        'd12' => $faker->randomDigitNotNull,
        'd16' => $faker->randomDigitNotNull,
        'd20' => $faker->randomDigitNotNull,
        'd25' => $faker->randomDigitNotNull,
        'd32' => $faker->randomDigitNotNull,
        'd40' => $faker->randomDigitNotNull,
        'd50' => $faker->randomDigitNotNull,
        'steel_type_t' => $faker->randomDigitNotNull,
        'steel_type_y' => $faker->randomDigitNotNull,
        'steel_type_r' => $faker->randomDigitNotNull
    ];
});
