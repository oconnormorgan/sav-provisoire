<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ExchangesModel;
use Faker\Generator as Faker;

$factory->define(ExchangesModel::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'commentaire' => $faker->text($maxNbChars = 200),
    ];
});
