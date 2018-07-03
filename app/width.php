<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class width extends Model
{
    public function configurations(){
        return $this->hasMany('App\configuration','width_id');
    }

    public function lengths(){
        return $this->belongsToMany('\App\length', 'configurations', 'width_id', 'length_id')->get()->unique('id');
    }
}
