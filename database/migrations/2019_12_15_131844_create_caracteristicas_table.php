<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('codigo_estilocerveza');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('color')->nullable();
            $table->decimal('grado_alcohol')->nullable();
            $table->decimal('densidad_inicial')->nullable();
            $table->decimal('densidad_final')->nullable();
            $table->decimal('ibus')->nullable();
            $table->text('aroma')->nullable();
            $table->text('sabor')->nullable();
            $table->text('historia')->nullable();
            $table->integer('fk_caracteristica_tipocerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('caracteristicas');
    }
}
