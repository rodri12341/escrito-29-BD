<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('NombreCompleto');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('');
            $table->unsignedBigInteger('');
            $table->foreign('')->references('id')->on('');
            $table->foreign('')->references('id')->on('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
