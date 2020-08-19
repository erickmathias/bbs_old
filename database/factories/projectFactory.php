<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {

    return [
        'project_name' => $faker->word,
        'client_id' => $faker->randomDigitNotNull,
        'prepared_by' => $faker->word,
        'date_prepared' => $faker->date('Y-m-d H:i:s'),
        'checked_by' => $faker->word,
        'date_checked' => $faker->date('Y-m-d H:i:s'),
        'reviewed_by' => $faker->word,
        'date_reviewed' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
