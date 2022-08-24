<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function boot()
    {
    Schema::defaultStringLength(191);
    } 

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->date('date');
            $table->string('pass', 16);
            $table->integer("userType")->default('1');
            // 1 aluno
            // 2 professor
            // 3 admin
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
