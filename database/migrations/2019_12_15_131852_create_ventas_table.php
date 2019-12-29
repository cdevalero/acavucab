<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('codigo_venta');
            $table->timestamps();
            $table->integer('numero_facturaventa')->nullable();
            $table->dateTime('fecha_venta')->nullable();
            $table->decimal('total')->nullable();
            $table->integer('fk_venta_puntocompra')->nullable();
            $table->integer('fk_venta_presupuesto')->nullable();
            $table->integer('fk_venta_empleado')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
