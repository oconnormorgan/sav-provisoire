<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeExchangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "type" => "E-mail"
            ],
            [
                "type" => "Téléphone"
            ],
            [
                "type" => "Courrier"
            ]
        ];

        DB::table('type_exchange_table')->insert(
            $array
        );
    }
}
