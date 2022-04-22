<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('user_id')->nullable();
            $table->string('course')->nullable();
            $table->string('course_type')->nullable();
            $table->string('course_mode')->nullable();
            $table->string('course_time')->nullable();
            $table->string('fees')->nullable();
            $table->bigInteger('duration')->nullable();
            $table->bigInteger('eligibility')->nullable();
           
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
        Schema::dropIfExists('courses');
    }
}
