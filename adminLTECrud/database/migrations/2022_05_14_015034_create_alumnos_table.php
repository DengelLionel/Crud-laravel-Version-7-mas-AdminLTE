<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("pregunta_id");
            $table->foreign("pregunta_id")->references("id")->on("preguntas");
            $table->unsignedBigInteger("tema_id");
            $table->foreign("tema_id")->references("id")->on("temas");
            $table->string("nombre");
            $table->integer("edad");
            $table->string("dni");
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
        Schema::dropIfExists('alumnos');
    }
}
