<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientejuridicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientejuridicos', function (Blueprint $table) {
            $table->increments('codigo_clientejuridico');
            $table->timestamps();
            $table->integer('rif')->nullable();
            $table->string('imagenclientehuridico')->nullable();
            $table->string('denominacion_comercial')->nullable();
            $table->string('razon_social')->nullable();
            $table->integer('numero_carnet')->nullable();
            $table->integer('capital_disponible')->nullable();
            $table->integer('fk_clientejuridicofisico_lugar')->nullable();
            $table->integer('fk_clientejuridicofiscal_lugar')->nullable();
            $table->integer('fk_clientejuridico_usuario')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientejuridicos');
    }
}
