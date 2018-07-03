<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrimLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trim_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_description',500); 
            $table->string('comparison',5000);
            $table->string('long_description',5000);    
            $table->integer('primary_image_id')->default(0);      
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
        Schema::dropIfExists('trim_levels');
    }
}
