<?php

use Illuminate\Database\Seeder;

class seedConfigurations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lengths = \App\length::all();
        $widths = \App\width::all();
        $models = \App\boat_model::all();
        $trims	= \App\trim_level::all();

        foreach($models as $m){
	        foreach($lengths as $l){
	        	foreach($widths as $w){
	        		foreach($trims as $t){

	        			\App\configuration::create(
	        				['description'=>$m->name.' '.$t->name.' '.$l->feet.' x '.$w->feet,
	        				'trim_level_id'=>$t->id,
	        				'boat_model_id'=>$m->id,
	        				'length_id'=>$l->id,
	        				'width_id'=>$w->id,
	        				'base_price_ex_vat'=>10000]
	        			);


	        		}
	        	}
	        }
	   	}
    }
}
