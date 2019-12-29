<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuntoPuntovalorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punto_puntovalors', function (Blueprint $table) {
            $table->increments('id_pp');
            $table->timestamps();
            $table->integer('fk_pp_puntovalor')->nullable();
            $table->integer('fk_pp_puntocompra')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('punto_puntovalors');
    }
}
