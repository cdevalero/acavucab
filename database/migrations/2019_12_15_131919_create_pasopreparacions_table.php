<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasopreparacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasopreparacions', function (Blueprint $table) {
            $table->increments('codigo_pasopreparacion');
            $table->timestamps();
            $table->integer('numeropaso')->nullable();
            $table->text('descripcionpaso')->nullable();
            $table->integer('fk_pasopreparacio_tipocerveza')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pasopreparacions');
    }
}
