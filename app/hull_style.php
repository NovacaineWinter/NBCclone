<?php

namespace App;

use Illuminate\Database\Eloquent\Model
;
class hull_style extends Model
{
	public function boat_models(){
		return $this->hasMany('\App\boat_model','hull_style_id');
	}

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


    public function newFile($fileUploaded,$description){

        //needs to return the new image object        
        $path =$fileUploaded->store('public');
        
        return $this->fileConnection()->create([
            'src' => \Storage::url($path),
            'asset'=>$path,
            'is_image'=>false,
            'description'=>$description
        ]);
    }
    
    public function infoBites(){
        return $this->morphMany('App\infobites','owner');
    }

    public function newInfobite($file, $title,$description) {
        $newInfobite = $this->infobites()->create(['title'=>$title,'description'=>$description]);
        $newInfobite->newImage($file);
        return $newInfobite;
    }

}
