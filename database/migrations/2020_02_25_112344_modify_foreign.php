<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exchanges_table', function(Blueprint $table) {
            $table->unsignedBigInteger('id_type_exchange');
            $table->foreign('id_type_exchange')->references('id')->on('type_exchanges_table');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients_table');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges_table');
    }
}
