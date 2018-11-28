<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->date("fecha_inicio");
            $table->date("fecha_fin");
            $table->enum("tipo_evento",["Primer","Segundo"]);

            $table->unsignedInteger("certificado_id");

            $table->foreign('certificado_id')->references('id')->on('certificado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
