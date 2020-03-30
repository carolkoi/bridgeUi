<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GlobalSettings;
use Faker\Generator as Faker;

$factory->define(GlobalSettings::class, function (Faker $faker) {

    return [
        'serviceproviderid' => $faker->randomDigitNotNull,
        'setting' => $faker->word,
        'settingvalue' => $faker->word,
        'valuetype' => $faker->word,
        'addedby' => $faker->randomDigitNotNull,
        'ipaddress' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
