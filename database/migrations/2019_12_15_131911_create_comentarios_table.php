<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('codigo_comentario');
            $table->timestamps();
            $table->integer('calificacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('fk_comentario_cerveza')->nullable();
            $table->integer('fk_comentario_clientejuririco')->nullable();
            $table->integer('fk_comentario_clientenatural')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios');
    }
}
