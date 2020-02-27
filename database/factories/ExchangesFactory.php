<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientsModel;
use App\ExchangesModel;
use App\TypeExchangesModel;
use App\UsersModel;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(ExchangesModel::class, function (Faker $faker) {

    $type_exchange_ids = TypeExchangesModel::all();
    $type_exchange_id = $faker->randomElement($type_exchange_ids)->id;

    $client_ids = ClientsModel::all();
    $client_id = $faker->randomElement($client_ids)->id;

    $user_ids = UsersModel::all();
    $user_id = $faker->randomElement($user_ids)->id;

    return [
        'date' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'commentaire' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'id_type_exchange' => $type_exchange_id,
        'id_client' => $client_id,
        'id_user' => $user_id,
    ];
});
