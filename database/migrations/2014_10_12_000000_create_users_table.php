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
            $table->integer('role_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_or_nic')->unique();
            $table->string('email')->unique();
            $table->bigInteger('phone');
            $table->string('gender');
            $table->string('nationality');
            $table->string('date_of_birth');
            $table->string('religion');
            $table->string('verification_code');
            $table->integer('is_verified')->default(0);
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
