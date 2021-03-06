<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('codigo_email');
            $table->timestamps();
            $table->string('direccion')->nullable();
            $table->integer('fk_email_proveedor')->nullable();
            $table->integer('fk_email_clientejuridico')->nullable();
            $table->integer('fk_email_clientenatural')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emails');
    }
}
