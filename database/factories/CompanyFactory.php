<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'main_activity' => $faker->word,
        'postal_address' => $faker->word,
        'email' => $faker->word,
        'fax' => $faker->word,
        'telephone' => $faker->word,
        'website' => $faker->word,
        'municipal' => $faker->word,
        'region' => $faker->word,
        'national' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
