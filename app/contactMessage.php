<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactMessage extends Model
{
	
	protected $fillable =['message','fname','lname','email'];

    public function sendEmail(){

    	//write some code to send an email to info@nottinghamboatco with the contents of the database record.

    	return true;
    }
}
