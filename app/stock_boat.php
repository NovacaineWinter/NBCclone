<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class stock_boat extends Model
{

    public function configuration(){
        return $this->belongsTo('App\configuration','configuration_id');
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
    
    public function infoBites(){
        return $this->morphMany('App\infobites','owner');
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

    public function newImage($img){

        //needs to return the new image object        
        $path =$img->store('public');
        
        return $this->fileConnection()->create([
            'src' => \Storage::url($path),
            'asset'=>$path,
            'is_image'=>true,
        ]);
    }   
}
