<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicoHasEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_has_evento', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('evento_id');
            $table->unsignedInteger('medico_id');

            $table->foreign('evento_id')->references('id')->on('evento');
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
        Schema::dropIfExists('medico_has_evento');
    }
}
