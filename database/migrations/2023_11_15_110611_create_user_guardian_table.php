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
        Schema::create('user_guardian', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('g_name');
            $table->string('g_relation');
            $table->string('g_email')->unique();
            $table->string('g_phone');
            $table->string('complete_address');
            $table->string('nic_or_passport');
            $table->string('g_education');
            $table->string('g_occupation');
            $table->string('g_organization');
            $table->string('g_designation');
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
        Schema::dropIfExists('user_guardian');
    }
};
