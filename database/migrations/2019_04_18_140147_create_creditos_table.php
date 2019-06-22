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
            $table->integer('metodo_id')->unsigned();
            $table->foreign('metodo_id')->references('id')->on('metodos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tasa_id')->unsigned();
            $table->foreign('tasa_id')->references('id')->on('tasas')
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
