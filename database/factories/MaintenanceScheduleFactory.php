<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MaintenanceSchedule;
use Faker\Generator as Faker;

$factory->define(MaintenanceSchedule::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'department_id' => $faker->randomDigitNotNull,
        'asset_id' => $faker->randomDigitNotNull,
        'cycle_id' => $faker->randomDigitNotNull,
        'start_date' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
