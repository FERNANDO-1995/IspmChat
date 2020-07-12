<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagems', function (Blueprint $table) {
            $table->id();
            $table->text('mensagem');
            $table->date('data');
            $table->string('file')->nullable();
            $table->bigInteger('origem')->unsigned();
            $table->bigInteger('destino')->unsigned();
            $table->foreign('destino')->references('id')->on('users');
            $table->foreign('origem')->references('id')->on('users');
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
        Schema::dropIfExists('mensagems');
    }
}
