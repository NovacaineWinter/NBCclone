<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generic extends Model
{
 	public function infoBites(){
        return $this->morphMany('App\infobites','owner');
    }

    public function newInfobite($file, $title,$description) {
        $newInfobite = $this->infobites()->create(['title'=>$title,'description'=>$description]);
        $newInfobite->newImage($file);
        return $newInfobite;
    }
}
