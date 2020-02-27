<?php

use Illuminate\Database\Seeder;

class ExchangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ExchangesModel::class, 200)->create();
    }
}
