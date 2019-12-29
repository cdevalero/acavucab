<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientenaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientenaturals', function (Blueprint $table) {
            $table->increments('codigo_clientenatural');
            $table->timestamps();
            $table->integer('rif')->nullable();
            $table->string('imagenclientenatural')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->integer('cedula')->nullable();
            $table->integer('numero_carnet')->nullable();
            $table->integer('fk_clientenatural_lugar')->nullable();
            $table->integer('fk_clientenatural_usuario')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientenaturals');
    }
}
