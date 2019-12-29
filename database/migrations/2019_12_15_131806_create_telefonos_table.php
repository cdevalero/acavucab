<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->increments('codigo_telefono');
            $table->timestamps();
            $table->integer('numero')->nullable();
            $table->integer('cod_area')->nullable();
            $table->integer('fk_telefono_proveedor')->nullable();
            $table->integer('fk_telefono_clientenatural')->nullable();
            $table->integer('fk_telefono_clientejuridico')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('telefonos');
    }
}
