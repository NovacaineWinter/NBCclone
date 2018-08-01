<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_boats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description',5000);
            $table->string('short_summary',1000);
            $table->integer('configuration_id');                       
            $table->decimal('price_ex_vat',10,2);
            $table->boolean('sold')->default(0);
            $table->string('specsheet')->default('');
            $table->string('nonce')->default('');
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
        Schema::dropIfExists('stock_boats');
    }
}
