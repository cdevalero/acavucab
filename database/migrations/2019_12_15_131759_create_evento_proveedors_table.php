<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventoProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_proveedors', function (Blueprint $table) {
            $table->increments('id_ep');
            $table->timestamps();
            $table->integer('fk_ep_evento')->nullable();
            $table->integer('fk_ep_proveedor')->nullable();
            $table->integer('fk_ep_actividad')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evento_proveedors');
    }
}
