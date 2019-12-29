<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('codigo_proveedor');
            $table->timestamps();
            $table->string('razon_social')->nullable();
            $table->string('denominacion_comercial')->nullable();
            $table->string('imagenproveedor')->nullable();
            $table->integer('rif')->nullable();
            $table->string('web')->nullable();
            $table->integer('fk_proveedorfisico_lugar')->nullable();
            $table->integer('fk_proveedorfiscal_lugar')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proveedors');
    }
}
