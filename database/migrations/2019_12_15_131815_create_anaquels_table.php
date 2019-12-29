<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnaquelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaquels', function (Blueprint $table) {
            $table->increments('codigo_anaquel');
            $table->timestamps();
            $table->integer('producto_disponible')->nullable();
            $table->integer('fk_anaquel_pasillo')->nullable();
            $table->integer('fk_anaquel_empleado')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anaquels');
    }
}
