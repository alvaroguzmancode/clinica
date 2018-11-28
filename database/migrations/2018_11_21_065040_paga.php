<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paga', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sueldo_id');
            $table->string('isr');
            $table->string('imss');
            $table->decimal('neto');
            $table->string('descripcion');
            $table->unsignedInteger('empleado_id');

            $table->foreign('sueldo_id')->references('id')->on('sueldo');
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
        Schema::dropIfExists('paga');
    }
}
