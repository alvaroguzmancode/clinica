<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->decimal('importe',10,2);
            $table->decimal('monto',10,2);
            $table->decimal('descuento',10,2);
            $table->decimal('total',10,2);
            $table->enum('metodo_pago',['tarjeta','contado']);
            $table->unsignedInteger('consultorio_id');
            $table->unsignedInteger('medico_id');

            $table->foreign('consultorio_id')->references('id')->on('consultorio');
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
        Schema::dropIfExists('consulta');
    }
}
