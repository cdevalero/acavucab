<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->increments('codigo_detalleventa');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
            $table->decimal('precio')->nullable();
            $table->integer('fk_detalleventa_venta')->nullable();
            $table->integer('fk_detalleventa_cerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalleventas');
    }
}
