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
        Schema::create('user_qualification', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('qualification');
            $table->integer('department');
            $table->integer('institute');
            $table->integer('marks_obtained');
            $table->integer('total_marks');
            $table->integer('result_status');
            $table->integer('passing_year');
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
        Schema::dropIfExists('user_qualification');
    }
};
