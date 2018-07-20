<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* End user routes */

	Route::get('/', function() { return view('layouts.vue'); });


	//Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/nbc-dashboard', function() { return view('layouts.adminDashboard'); })->middleware('auth');

	Auth::routes();



/* API routes */


	/* Data retrival endpoints */
		Route::get('/vue/data/{target}','vue@data');
		Route::get('/vue/cookies','vue@analytics');
		Route::get('/vue/data/stock-boats','vue@allStockBoats');
	

	/*Updating endpoints*/
		Route::get('/vue/update','vue@update');

		/* Endpoints to deal with images */
		Route::get('/vue/update/primary-image','vue@primaryImage');
		Route::get('/vue/update/delete-image','vue@deleteImage');
		Route::post('/vue/update/new-image','vue@newImage');
		Route::get('/vue/update/image','vue@updateImage');
		Route::post('/vue/update/new-infobite','vue@newInfobite');


	/* Deleting endpoints */

	Route::delete('/vue/delete/infobite','vue@deleteInfobite');



	/* Endpoint for contact form */
	Route::post('/vue/contact/message','contactController@receiveMessage');