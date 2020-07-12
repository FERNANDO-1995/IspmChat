<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_discs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('disciplina_id')->unsigned();
            $table->bigInteger('professor_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->foreign('professor_id')->references('nif')->on('professors');
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('prof_discs');
    }
}
