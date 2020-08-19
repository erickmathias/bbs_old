<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MainMember;
use Faker\Generator as Faker;

$factory->define(MainMember::class, function (Faker $faker) {

    return [
        'member_name' => $faker->word,
        'stdcode_id' => $faker->randomDigitNotNull,
        'mproperty_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
