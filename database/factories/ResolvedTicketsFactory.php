<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ResolvedTickets;
use Faker\Generator as Faker;

$factory->define(ResolvedTickets::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'department_id' => $faker->randomDigitNotNull,
        'issue_type_id' => $faker->randomDigitNotNull,
        'business_continuity_impacted' => $faker->word,
        'image' => $faker->text,
        'description' => $faker->text,
        'assign_to' => $faker->randomDigitNotNull,
        'surrender_status' => $faker->word,
        'resolved_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
