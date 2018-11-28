<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicoHasHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_has_horario', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('horario_id');
            $table->unsignedInteger('medico_id');

            $table->foreign('horario_id')->references('id')->on('horario');
            $table->foreign('medico_id')->references('id')->on('medico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico_has_horario');
    }
}
