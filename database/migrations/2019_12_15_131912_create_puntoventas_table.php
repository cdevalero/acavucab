<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuntoventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntoventas', function (Blueprint $table) {
            $table->increments('codigo_puntoventa');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
            $table->integer('fk_puntoventa_puntovalor')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('puntoventas');
    }
}
