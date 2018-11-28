<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('dosis');
            $table->unsignedInteger('receta_id');
            $table->timestamps();

            $table->foreign('receta_id')->references('id')->on('receta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamento');
    }
}
