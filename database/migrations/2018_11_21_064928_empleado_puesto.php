<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpleadoPuesto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_puesto', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('activo');
            $table->unsignedInteger('puesto_id');
            $table->unsignedInteger('empleado_id');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('puesto_id')->references('id')->on('puesto');
            $table->foreign('empleado_id')->references('id')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_puesto');
    }
}
