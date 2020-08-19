<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Element;
use Faker\Generator as Faker;

$factory->define(Element::class, function (Faker $faker) {

    return [
        'project_id' => $faker->randomDigitNotNull,
        'element_name' => $faker->word,
        'stdcode_id' => $faker->randomDigitNotNull,
        'steel_type_id' => $faker->randomDigitNotNull,
        'density' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
