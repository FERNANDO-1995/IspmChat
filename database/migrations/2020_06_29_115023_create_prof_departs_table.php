<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfDepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_departs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_prof')->unsigned();
            $table->bigInteger('id_dep')->unsigned();
            $table->foreign('id_prof')->references('nif')->on('professors');
            $table->foreign('id_dep')->references('id')->on('departamentos');
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
        Schema::dropIfExists('prof_departs');
    }
}
