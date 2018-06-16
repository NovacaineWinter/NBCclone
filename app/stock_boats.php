<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class stock_boats extends Model
{
    protected $table ='stockBoats';
 

    public function configuration(){
        return $this->belongsTo('App\configuration','configuration_id');
    }


    public function files(){
    	return $this->morphMany('App\file','owner');
    }
    


}
