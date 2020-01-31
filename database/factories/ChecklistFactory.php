<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Checklist;
use Faker\Generator as Faker;

$factory->define(Checklist::class, function (Faker $faker) {

    return [
        'action' => $faker->text,
        'comment' => $faker->text,
        'maintenance_schedule_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
