<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id('business_id');
            $table->Integer('user_id')->nullable();
            $table->string('business_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('gst')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('mobile1')->nullable();
            $table->string('tagline')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('b_email')->nullable();
            $table->string('b_rank')->nullable();
            $table->string('recognised')->nullable();
            $table->string('business_title')->nullable();
            $table->string('business_header')->nullable();
            $table->string('business_option')->nullable();
            $table->string('business_option1')->nullable();
            $table->string('business_option2')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
