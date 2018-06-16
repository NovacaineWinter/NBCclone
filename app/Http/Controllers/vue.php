<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vue extends Controller
{
    public function boatSelectorData(){
    	$data['hulls'] = \App\hull_style::all();
    	$data['models']=\App\model::all();

    	return $data;
    }
}
