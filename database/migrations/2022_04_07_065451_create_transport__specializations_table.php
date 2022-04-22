<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport__specializations', function (Blueprint $table) {
            $table->id('special_id');
            $table->Integer('user_id')->nullable();
            $table->Integer('trans_id')->nullable();
            $table->string('special_route_from')->nullable();
            $table->string('special_route_to')->nullable();
            
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
        Schema::dropIfExists('transport__specializations');
    }
}
