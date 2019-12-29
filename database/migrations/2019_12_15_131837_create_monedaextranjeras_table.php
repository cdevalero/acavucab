<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonedaextranjerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedaextranjeras', function (Blueprint $table) {
            $table->increments('codigo_monedaextranjera');
            $table->timestamps();
            $table->integer('tipo')->nullable();
            $table->integer('denominacion')->nullable();
            $table->integer('numero_billete')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('monedaextranjeras');
    }
}
