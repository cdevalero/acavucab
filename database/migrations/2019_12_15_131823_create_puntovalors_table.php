<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuntovalorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntovalors', function (Blueprint $table) {
            $table->increments('codigo_puntovalor');
            $table->timestamps();
            $table->dateTime('fecha')->nullable();
            $table->decimal('valor')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('puntovalors');
    }
}
