<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boat_model extends Model
{
	protected $table = 'models';


	
    public function fileConnection(){
        return $this->morphMany('App\file','owner');
    }

    public function images(){
        return $this->fileConnection()->where('is_image','=',true);
    }
    
    public function files(){
        return $this->fileConnection()->where('is_image','=',false);
    }
    
    public function newImage($img){

        //needs to return the new image object        
        $path =$img->store('public');
        
        return $this->fileConnection()->create([
            'src' => \Storage::url($path),
            'asset'=>$path,
            'is_image'=>true,
        ]);
    } 

    public function hullStyle(){
        return $this->belongsTo('\App\hull_style','hull_style_id');
    }

    public function configurations(){
    	return $this->hasMany('\App\configuration','boat_model_id');
    }

   
    public function widths(){
        return $this->belongsToMany('\App\width', 'configurations', 'boat_model_id', 'width_id')->get()->unique('id');
    }

    public function infoBites(){
        return $this->morphMany('App\infobites','owner');
    }



/* Probably should not be needed on this model*/
    public function trim_levels(){
        return $this->belongsToMany('\App\trim_level', 'configurations', 'boat_model_id', 'trim_level_id')->get()->unique('id');
    }
    public function lengths(){
        return $this->belongsToMany('\App\length', 'configurations', 'boat_model_id', 'length_id')->get()->unique('id');
    }


    /* These should be managed throuhgh a belongsToMany relationship via the configs table -= i think */
/*
    public function lengths(){
    	$lengths = [];
    	foreach($this->configurations->unique('length_id') as $config){
    		$lengths[] = $config->length;
    	}
    	return collect($lengths);
    }

    public function widths(){
    	$widths = [];
    	foreach($this->configurations->unique('width_id') as $config){
    		$widths[] = $config->width;
    	}
    	return collect($widths);
    }

    public function trim_levels(){
    	$trim_levels = [];
    	foreach($this->configurations->unique('trim_level_id') as $config){
    		$trim_levels[] = $config->trim_level;
    	}
    	return collect($trim_levels);
    }

    */
}
