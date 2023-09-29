<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarea', function (Blueprint $table) {
            $table->id();
            $table->string('Contenido');
            $table->string('Estado');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('Usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tarea');
    }
}
