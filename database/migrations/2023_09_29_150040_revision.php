<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Revision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Revision', function (Blueprint $table) {
            $table->id();
            $table->string('Detalle');
            $table->unsignedBigInteger('tarea_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tarea_id')->references('id')->on('Tarea');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Revision');
    }
}
