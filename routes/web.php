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


/* Vue Routes */
Route::get('/vue', function() { return view('layouts.vue'); });
Route::get('/vue/info/hullstyles', function() { return \App\hull_style::all();});
Route::get('/vue/info/boat-selector-all-info','vue@boatSelectorData');



if(env('HAS_CONFIGURATOR')){ /* Configurator stuff */

	Route::get('/configure', 'configController@index');

	Route::get('/configure/ajax', 'configController@configAjax');

	Route::get('/configure/save','configController@saveMyConfig');
}


/* Admin Stuff  */


Route::get('/baseprice', 'dashboardController@baseprice')->middleware('auth');

Route::get('/optionalextra', 'dashboardController@manageExtra')->middleware('auth');


Route::get('/extras', 'dashboardController@listOptionalExtras')->middleware('auth');


Route::get('/adminAjax', 'dashboardController@ajax')->middleware('auth');

Route::post('/adminAjax/imageupload/option', 'dashboardController@imageForOption')->middleware('auth');

Route::get('faq-admin','dashboardController@faq')->middleware('auth');

Route::get('enquiries','dashboardController@enquiries')->middleware('auth');

Route::get('/stock-boat-admin','dashboardController@manageStockBoats')->middleware('auth');





Route::get('/model-admin','dashboardController@manageModels')->middleware('auth');

Route::get('/edit-model','dashboardController@editModel')->middleware('auth');


Route::post('/edit-model/photo','dashboardController@addModelPhoto')->middleware('auth');



Route::get('/edit-stock-boat','dashboardController@editStockBoat')->middleware('auth');

Route::post('/edit-stock-boat/specsheet','dashboardController@addSpecSheet')->middleware('auth');

Route::post('/edit-stock-boat/photo','dashboardController@addPhoto')->middleware('auth');


/*  Externalstuff  */


Route::get('/faq',function() {return view('faq')->with('questions',\App\faq::all());});

Route::get('/cookiePolicy', function() { return view('dataProtection'); });
Route::get('/dataprotection', function() { return view('gdpr'); });

Route::get('/contact', function () { return view('contact'); });


Route::get('/settings', function () { return view('settings'); });

Route::get('/', 'landingPageController@pageSelector');


Route::get('/stock', 'stockBoatController@index');
Route::get('/stock/detail', 'stockBoatController@detail');

Route::get('/model', 'modelController@index');
Route::get('/model/detail', 'modelController@detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
