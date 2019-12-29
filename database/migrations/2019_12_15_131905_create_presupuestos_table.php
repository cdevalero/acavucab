<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('codigo_presupuesto');
            $table->timestamps();
            $table->dateTime('fecha')->nullable();
            $table->integer('total')->nullable();
            $table->integer('fk_presupuesto_clientejuridico')->nullable();
            $table->integer('fk_presupuesto_clientenatural')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('presupuestos');
    }
}
