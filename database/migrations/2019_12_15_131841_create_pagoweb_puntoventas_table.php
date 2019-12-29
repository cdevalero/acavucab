<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagowebPuntoventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagoweb_puntoventas', function (Blueprint $table) {
            $table->increments('id_pwpv');
            $table->timestamps();
            $table->integer('fk_pwpv_pagoweb')->nullable();
            $table->integer('fk_pwpv_puntoventa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagoweb_puntoventas');
    }
}
