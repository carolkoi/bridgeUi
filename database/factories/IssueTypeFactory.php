<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\IssueType;
use Faker\Generator as Faker;

$factory->define(IssueType::class, function (Faker $faker) {

    return [
        'issue' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
