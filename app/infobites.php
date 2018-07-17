<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infobites extends Model
{

	protected $fillable =['title','description'];

    public function owner(){
    	return $this->morphTo();
    }

    public function fileConnection(){
        return $this->morphMany('App\file','owner');
    }

    public function image(){
        return $this->morphMany('App\file','owner')->where('is_image','=',true)->first();
    }

    public function imageSrc(){
    	return $this->image()->src;
    }

    public function newImage($img){

    	if($this->fileConnection()->count() >0 ){
    		foreach($this->fileConnection() as $file){
    			$file->deleteFile();
    		}
    	}

        //needs to return the new image object        
        $path =$img->store('public');
        
        return $this->fileConnection()->create([
            'src' => \Storage::url($path),
            'asset'=>$path,
            'is_image'=>true,
            'is_in_carousel'=>false,
        ]);
    }   

}
