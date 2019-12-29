<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedorTipocervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_tipocervezas', function (Blueprint $table) {
            $table->increments('id_ptc');
            $table->timestamps();
            $table->integer('fk_ptc_proveedor')->nullable();
            $table->integer('fk_ptc_tipocerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proveedor_tipocervezas');
    }
}
