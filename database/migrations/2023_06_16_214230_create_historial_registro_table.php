<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_registro', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cultivo');
            $table->date('fecha_registro');
            $table->string('mediciones_sensores', 255);
            $table->date('fecha_alerta')->nullable();
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
        Schema::dropIfExists('historial_registro');
    }
}
