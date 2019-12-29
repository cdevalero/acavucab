<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAfiliacionEstatuspagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliacion_estatuspagos', function (Blueprint $table) {
            $table->increments('aep');
            $table->timestamps();
            $table->dateTime('fecha')->nullable();
            $table->integer('fk_aep_afiliacionproveedor')->nullable();
            $table->integer('fk_aep_estatuspago')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('afiliacion_estatuspagos');
    }
}
