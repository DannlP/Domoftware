<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroRiegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_riego', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cultivo');
            $table->date('fecha_registro');
            $table->string('mediciones_sensores', 255);
            $table->time('duracion_riego');
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
        Schema::dropIfExists('registro_riego');
    }
}
