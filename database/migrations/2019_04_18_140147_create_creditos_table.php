<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('observacion');
            $table->decimal('valor', 10,2);
            $table->string('tasa');
            $table->string('name_fiador');
            $table->string('lastname_fiador');
            $table->string('phone_fiador');
            $table->string('address_fiador');
            $table->integer('plazo_id')->unsigned();
            $table->foreign('plazo_id')->references('id')->on('plazos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('formapago_id')->unsigned();
            $table->foreign('formapago_id')->references('id')->on('forma_pagos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creditos');
    }
}
