<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarjetacreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetacreditos', function (Blueprint $table) {
            $table->increments('codigo_tarjetacredito');
            $table->timestamps();
            $table->integer('numero_tarjetacredito')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('fk_tarjetacredito_banco')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarjetacreditos');
    }
}
