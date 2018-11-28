<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->enum('dia',['lunes','martes','miercoles','jueves','viernes','sabado','domingo']);
            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->unsignedInteger('renta_id');

            $table->foreign('renta_id')->references('id')->on('renta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario');
    }
}
