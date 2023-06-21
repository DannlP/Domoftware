<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaRiegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_programa_riego', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cultivo');
            $table->time('tiempo_inicio');
            $table->time('duracion');
            $table->integer('intervalo_riego');
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
        Schema::dropIfExists('_programa_riego');
    }
}
