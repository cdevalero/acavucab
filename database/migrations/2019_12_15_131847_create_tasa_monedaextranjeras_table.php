<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasaMonedaextranjerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasa_monedaextranjeras', function (Blueprint $table) {
            $table->increments('id_tm');
            $table->timestamps();
            $table->integer('fk_tm_tasacambiaria')->nullable();
            $table->integer('fk_tm_monedaextranjera')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasa_monedaextranjeras');
    }
}
