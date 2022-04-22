<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id('photo_id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->longText('description');
            $table->tinyInteger('status')->default(1)->comment('1:- Active, 0: in-Active');
            $table->string('image', 100)->nullable();
            $table->longText('gallery_images')->nullable();
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
        Schema::dropIfExists('photos');
    }
}
