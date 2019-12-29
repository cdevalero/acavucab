<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->increments('codigo_tienda');
            $table->timestamps();
            $table->integer('rif')->nullable();
            $table->string('nombre')->nullable();
            $table->integer('fk_tienda_lugar')->nullable();
            $table->integer('fk_tienda_almacen')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiendas');
    }
}
