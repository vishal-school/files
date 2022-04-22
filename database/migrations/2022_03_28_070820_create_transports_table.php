<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id('trans_id');
            $table->Integer('user_id')->nullable();
            $table->string('Slug')->nullable();
            $table->string('transport_type')->nullable();
            $table->string('gst')->nullable();
            $table->string('transport_name')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('mobile1')->nullable();
            $table->string('tagline')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('t_email')->nullable();
            $table->string('t_rank')->nullable();
            $table->string('recognised')->nullable();
            $table->string('transport_title')->nullable();
            $table->string('transport_header')->nullable();
            $table->string('transport_option')->nullable();
            $table->string('transport_option1')->nullable();
            $table->string('transport_option2')->nullable();
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
        Schema::dropIfExists('transports');
    }
}
