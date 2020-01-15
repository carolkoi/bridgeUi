<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'middle_name' => $faker->word,
        'name' => $faker->word,
        'email' => $faker->word,
        'password' => $faker->word,
        'department_id' => $faker->randomDigitNotNull,
        'location' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
