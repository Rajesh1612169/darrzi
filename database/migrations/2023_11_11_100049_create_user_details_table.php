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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->longText('address')->nullable();
            $table->longText('profile_picture')->nullable();
            $table->longText('nic_or_passport_front')->nullable();
            $table->longText('nic_or_passport_back')->nullable();
            $table->longText('matriculation_marks_sheet')->nullable();
            $table->longText('matriculation_certificate')->nullable();
            $table->longText('enter_marks_sheet')->nullable();
            $table->longText('enter_certificate')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};
