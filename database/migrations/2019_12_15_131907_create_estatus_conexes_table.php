<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstatusConexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_conexes', function (Blueprint $table) {
            $table->increments('id_ecx');
            $table->timestamps();
            $table->dateTime('fecha_hora')->nullable();
            $table->integer('fk_ecx_venta')->nullable();
            $table->integer('fk_ecx_compra')->nullable();
            $table->integer('fk_ecx_estatus')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estatus_conexes');
    }
}
