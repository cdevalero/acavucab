<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadoBeneficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_beneficios', function (Blueprint $table) {
            $table->increments('id_empben');
            $table->timestamps();
            $table->integer('fk_empben_empleado')->nullable();
            $table->integer('fk_empben_beneficio')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleado_beneficios');
    }
}
