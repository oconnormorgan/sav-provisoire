<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TypeExchangesSeeder::class);
        $this->call(ExchangesSeeder::class);
    }
}
