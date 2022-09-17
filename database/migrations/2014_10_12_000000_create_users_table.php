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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('LastName',60)->nullable();
            $table->string('ShowName',60);
            $table->string('Email',100)->nullable();
            $table->string('Country',10)->nullable();
            $table->integer('Points')->default(0);
            $table->date('DoB')->nullable();
            $table->boolean('Status')->default(1);
            $table->enum('gender', ['M', 'F','O'])->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
