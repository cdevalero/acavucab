<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventarioCervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_cervezas', function (Blueprint $table) {
            $table->increments('id_invcer');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
            $table->integer('fk_invcer_evento')->nullable();
            $table->integer('fk_invcer_cerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventario_cervezas');
    }
}
