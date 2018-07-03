<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{

	protected $fillable =['src', 'is_image', 'description'];

    public function owner(){
    	return $this->morphTo();
    }


 	public function deleteFile(){      

        try{
            \Storage::delete($this->src);
        }catch(Exception $e){
            return $e;
        }

        $this->delete();        
    }
}
