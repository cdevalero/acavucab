<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolPrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_privilegios', function (Blueprint $table) {
            $table->increments('id_rp');
            $table->timestamps();
            $table->integer('fk_rp_rol')->nullable();
            $table->integer('fk_rp_privilegio')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rol_privilegios');
    }
}
