<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_discs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('disciplina_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->string('descricao');
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
        Schema::dropIfExists('curso_discs');
    }
}
