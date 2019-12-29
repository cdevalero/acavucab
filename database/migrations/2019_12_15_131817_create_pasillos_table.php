<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasillosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasillos', function (Blueprint $table) {
            $table->increments('codigo_pasillo');
            $table->timestamps();
            $table->integer('numero_pasillo')->nullable();
            $table->char('letra_pasillo')->nullable();
            $table->integer('fk_pasillo_almacen')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pasillos');
    }
}
