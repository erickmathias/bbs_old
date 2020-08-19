<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {

    return [
        'client_name' => $faker->word,
        'postal_address' => $faker->word,
        'street_name' => $faker->word,
        'municipal' => $faker->word,
        'region' => $faker->word,
        'nationality' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
