<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasacambiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasacambiarias', function (Blueprint $table) {
            $table->increments('codigo_tasacambiaria');
            $table->timestamps();
            $table->decimal('valor')->nullable();
            $table->dateTime('fecha')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasacambiarias');
    }
}
