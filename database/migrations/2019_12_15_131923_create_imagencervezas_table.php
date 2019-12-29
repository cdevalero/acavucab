<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagencervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagencervezas', function (Blueprint $table) {
            $table->increments('codigo_imagencerveza');
            $table->timestamps();
            $table->integer('fk_imagencerveza_cerveza')->nullable();
            $table->string('imagen')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imagencervezas');
    }
}
