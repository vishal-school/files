<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessroutes', function (Blueprint $table) {
            $table->id('routes_id');
            $table->Integer('user_id')->nullable();
            $table->Integer('business_id')->nullable();
            $table->string('route_from')->nullable();
            $table->string('route_to')->nullable();
            $table->string('body_type')->nullable();
            $table->string('truck_weight')->nullable();
            $table->string('truck_height')->nullable();
            $table->string('truck_length')->nullable();
            $table->string('price')->nullable();
            $table->string('material')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('bid')->nullable();
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
        Schema::dropIfExists('businessroutes');
    }
}
