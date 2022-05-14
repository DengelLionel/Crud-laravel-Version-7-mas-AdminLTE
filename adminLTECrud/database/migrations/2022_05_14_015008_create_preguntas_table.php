<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger('tema_id');
            $table->foreign("tema_id")->references("id")->on("temas");
            $table->timestamps();
            $table->string("pregunta1");
            $table->string("pregunta2");
            $table->string("pregunta3");
            $table->string("pregunta4");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
