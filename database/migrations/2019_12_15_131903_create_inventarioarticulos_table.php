<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventarioarticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioarticulos', function (Blueprint $table) {
            $table->increments('codigo_inventarioarticulo');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->integer('cantidad')->nullable();
            $table->integer('fk_inventarioarticulo_evento')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventarioarticulos');
    }
}
