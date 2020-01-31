<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MaintenanceRecord;
use Faker\Generator as Faker;

$factory->define(MaintenanceRecord::class, function (Faker $faker) {

    return [
        'asset_id' => $faker->randomDigitNotNull,
        'asset_details' => $faker->text,
        'component_details' => $faker->text,
        'department_id' => $faker->randomDigitNotNull,
        'commission_date' => $faker->word,
        'decommission_duration' => $faker->word,
        'decommission_reminder' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
