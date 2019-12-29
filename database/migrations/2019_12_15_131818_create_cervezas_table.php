<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cervezas', function (Blueprint $table) {
            $table->increments('codigo_cerveza');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->decimal('precio')->nullable();
            $table->text('historia')->nullable();
            $table->integer('caloria')->nullable();
            $table->integer('volumen')->nullable();
            $table->integer('fk_cerveza_anaquel')->nullable();
            $table->integer('fk_cerveza_tipocerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cervezas');
    }
}
