<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Collection;


class configuration extends Model
{

    public function hull_style(){
    	return $this->belongsTo('App\hull_style','hull_style_id');
    }

    public function model(){
        return $this->belongsTo('App\boat_model','boat_model_id');
    }

    public function trim_level(){
    	return $this->belongsTo('App\trim_level','trim_level_id');
    }

    public function width(){
        return $this->belongsTo('App\width','width_id');
    }

    public function length(){
        return $this->belongsTo('App\length','length_id');
    }

}
