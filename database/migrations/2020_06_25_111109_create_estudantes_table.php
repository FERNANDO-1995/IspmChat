<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('fullname');
            $table->string('turno');
            $table->string('data_nasc');
            $table->string('genero');
            $table->string('bi')->nullable();
            $table->string('telefone')->nullable();
            $table->integer('anoacad')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->bigInteger('turma_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('turma_id')->references('id')->on('turmas');
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
        Schema::dropIfExists('estudantes');
    }
}
