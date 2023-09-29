<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TareaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TareaCategoria', function (Blueprint $table) {
            $table->id();
            $table->string('categoria')->nullable(false);
            $table->unsignedBigInteger('tarea_id')->nullable(false);
            $table->timestamps();

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
        Schema::dropIfExists('TareaCategoria');
    }
}
