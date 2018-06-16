<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model extends Model
{
    public function files(){
    	return $this->morphMany('App\file','owner');
    }
}
