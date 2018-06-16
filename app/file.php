<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    public function owner(){
    	return $this->morphTo();
    }
}
