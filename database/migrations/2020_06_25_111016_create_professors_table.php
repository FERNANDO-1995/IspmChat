<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->bigInteger('nif')->unsigned();
            $table->string('fullname');
            $table->string('grau_acad')->nullable();
            $table->string('email',100)->unique();
            $table->string('formacao')->nullable();
            $table->string('telefone')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->primary('nif');
            $table->foreign('user_id')->references('id')->on('users');
           
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
        Schema::dropIfExists('professors');
    }
}
