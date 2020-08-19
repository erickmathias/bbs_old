<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {

    return [
        'project_id' => $faker->randomDigitNotNull,
        'element_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'bar_mark' => $faker->word,
        'bar_type' => $faker->word,
        'bar_size' => $faker->word,
        'total_members' => $faker->randomDigitNotNull,
        'no_of_bar_in_each' => $faker->randomDigitNotNull,
        'total_no_of_bars' => $faker->randomDigitNotNull,
        'total_length_of_bars' => $faker->randomDigitNotNull,
        'shape_code' => $faker->word,
        'length_a' => $faker->randomDigitNotNull,
        'lenth_b' => $faker->randomDigitNotNull,
        'length_c' => $faker->randomDigitNotNull,
        'length_d' => $faker->randomDigitNotNull,
        'lenth_e_r_f' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
