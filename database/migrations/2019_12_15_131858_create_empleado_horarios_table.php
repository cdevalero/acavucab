<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_horarios', function (Blueprint $table) {
            $table->increments('id_eh');
            $table->timestamps();
            $table->integer('fk_eh_empleado')->nullable();
            $table->integer('fk_eh_horario')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleado_horarios');
    }
}
