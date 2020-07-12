<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaProfDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_prof_discs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('turma_id')->unsigned();
            $table->bigInteger('pd_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->foreign('pd_id')->references('id')->on('prof_discs');
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
        Schema::dropIfExists('turma_prof_discs');
    }
}
