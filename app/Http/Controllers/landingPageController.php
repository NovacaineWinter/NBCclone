<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function pageSelector(){
    	return view(env('LANDINGPAGE_VIEW'));
    }
}
