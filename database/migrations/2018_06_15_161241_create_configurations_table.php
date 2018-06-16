<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('trim_level_id');
            $table->integer('model_id'); 
            $table->integer('length_id');
            $table->integer('width_id');
            $table->decimal('base_price_ex_vat',10,2);
            $table->decimal('vat_rate')->default(1.2);
            $table->boolean('active')->default(1);
            $table->boolean('qualifying_ship')->default(false);
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configurations');
    }
}
