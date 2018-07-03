<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class length extends Model
{
    public function configurations(){
        return $this->hasMany('App\configuration','length_id');
    }


    public function trim_levels(){
        return $this->belongsToMany('\App\trim_level', 'configurations', 'length_id', 'trim_level_id')->get()->unique('id');
    }    
}
