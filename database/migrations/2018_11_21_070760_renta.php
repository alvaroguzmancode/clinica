<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Renta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->enum('cobro',['mensual','semanal','anual']);

            $table->unsignedInteger('consultorio_id');

            $table->foreign('consultorio_id')->references('id')->on('consultorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renta');
    }
}
