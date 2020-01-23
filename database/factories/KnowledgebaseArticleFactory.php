<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\KnowledgebaseArticle;
use Faker\Generator as Faker;

$factory->define(KnowledgebaseArticle::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'details' => $faker->text,
        'uploads' => $faker->text,
        'ticket_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
