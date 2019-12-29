<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagowebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagowebs', function (Blueprint $table) {
            $table->increments('codigo_pagoweb');
            $table->timestamps();
            $table->decimal('monto_total')->nullable();
            $table->integer('fk_pagoweb_tarjetacredito')->nullable();
            $table->integer('fk_pagoweb_tarjetadebito')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagowebs');
    }
}
