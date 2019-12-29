<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAfiliacionproveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliacionproveedors', function (Blueprint $table) {
            $table->increments('codigo_afiliacionproveedor');
            $table->timestamps();
            $table->date('fecha_afiliacion')->nullable();
            $table->decimal('costo_afiliacion')->nullable();
            $table->integer('fk_afiliacionproveedor_proveedor')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('afiliacionproveedors');
    }
}
