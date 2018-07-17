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
        $wides = \App\boat_model::where('hull_style_id','>',1)->get();
        $narrows = \App\boat_model::where('hull_style_id','=',1)->get();
        $trims	= \App\trim_level::all();

        foreach($wides as $m){
	        foreach($lengths as $l){
        		foreach($trims as $t){

        			\App\configuration::create(
        				['description'=>$m->name.' '.$t->name.' '.$l->feet.' x 12',
        				'trim_level_id'=>$t->id,
        				'boat_model_id'=>$m->id,
        				'length_id'=>$l->id,
        				'width_id'=>2,
        				'base_price_ex_vat'=>10000]
        			);
        		}
        	}
	   	}

	   	foreach($narrows as $m){
	        foreach($lengths as $l){
        		foreach($trims as $t){

        			\App\configuration::create(
        				['description'=>$m->name.' '.$t->name.' '.$l->feet.' x 6ft10',
        				'trim_level_id'=>$t->id,
        				'boat_model_id'=>$m->id,
        				'length_id'=>$l->id,
        				'width_id'=>1,
        				'base_price_ex_vat'=>10000]
        			);
        		}
	        }
	   	}
    }
}
