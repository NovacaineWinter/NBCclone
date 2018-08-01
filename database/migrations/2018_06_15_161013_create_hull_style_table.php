<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHullStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hull_styles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_description',500); 
            $table->string('comparison',5000);
            $table->string('long_description',5000);  
            $table->integer('primary_image_id')->default(0);
            $table->string('virtual_tour')->default(0);
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
        Schema::dropIfExists('hull_styles');
    }
}
