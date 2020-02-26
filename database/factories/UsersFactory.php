<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UsersModel;
use Faker\Generator as Faker;

$factory->define(UsersModel::class, function (Faker $faker) {
    return [
        'nom' => $faker->firstNameFemale,
    ];
});
