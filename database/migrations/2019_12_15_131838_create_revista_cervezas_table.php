<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevistaCervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista_cervezas', function (Blueprint $table) {
            $table->increments('id_rc');
            $table->timestamps();
            $table->integer('fk_rc_revista')->nullable();
            $table->integer('fk_rc_cerveza')->nullable();
            $table->decimal('porcentaje_descuento')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('revista_cervezas');
    }
}
