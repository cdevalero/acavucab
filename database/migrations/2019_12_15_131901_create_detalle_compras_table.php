<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->increments('id_dc');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
            $table->decimal('precio')->nullable();
            $table->integer('tipo')->nullable();
            $table->integer('fk_dc_compra')->nullable();
            $table->integer('fk_dc_cerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_compras');
    }
}
