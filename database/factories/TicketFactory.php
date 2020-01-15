<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'department_id' => $faker->randomDigitNotNull,
        'issue_type_id' => $faker->randomDigitNotNull,
        'business_continuity_impacted' => $faker->word,
        'image' => $faker->word,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
