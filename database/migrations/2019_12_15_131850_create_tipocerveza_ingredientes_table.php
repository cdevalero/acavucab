<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipocervezaIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipocerveza_ingredientes', function (Blueprint $table) {
            $table->increments('id_ti');
            $table->timestamps();
            $table->decimal('cantidad')->nullable();
            $table->decimal('peso')->nullable();
            $table->text('tiempo_agregar')->nullable();
            $table->integer('fk_ti_tipocerveza')->nullable();
            $table->integer('fk_ti_ingrediente')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipocerveza_ingredientes');
    }
}
