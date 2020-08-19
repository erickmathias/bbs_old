<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Steeltype;
use Faker\Generator as Faker;

$factory->define(Steeltype::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
