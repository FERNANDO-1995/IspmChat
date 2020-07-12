<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('categoria');
            $table->string('file')->nullable();
            $table->bigInteger('id_dep')->nullable()->unsigned();
            $table->foreign('id_dep')->references('id')->on('departamentos');
            $table->rememberToken();
            $table->timestamps();
        });

        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'categoria' => 'Admin',
            'password' =>bcrypt('12345admin'), 
            'id_dep' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
