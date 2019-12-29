<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagotiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagotiendas', function (Blueprint $table) {
            $table->increments('codigo_pagotienda');
            $table->timestamps();
            $table->decimal('monto')->nullable();
            $table->integer('fk_pagotienda_efectivo')->nullable();
            $table->integer('fk_pagotienda_tarjetadebito')->nullable();
            $table->integer('fk_pagotienda_tarjetacredito')->nullable();
            $table->integer('fk_pagotienda_monedaextranjera')->nullable();
            $table->integer('fk_pagotienda_cheque')->nullable();
            $table->integer('fk_pagotienda_puntoventa')->nullable();
            $table->integer('fk_pagotienda_transferencia')->nullable();
            $table->integer('fk_pagotienda_venta')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagotiendas');
    }
}
