<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarjetadebitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetadebitos', function (Blueprint $table) {
            $table->increments('codigo_tarjetadebito');
            $table->timestamps();
            $table->integer('numero_tarjetadebito')->nullable();
            $table->integer('fk_tarjetadebito_banco')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarjetadebitos');
    }
}
