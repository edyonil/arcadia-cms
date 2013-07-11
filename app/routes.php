<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
|__________________________________________________________________________
 *
 * Public Route group. From here you can go almost anywhere where Auth is
 * not required. 
 */
Route::group( array('prefix' => '/') , function()
{
	// Redirect everything to the index ipage
    Route::any('/','homeController@getIndex');
    /* ---------------------------------------
	 * GET Requests
	 * ---------------------------------------
	 */
	Route::get('about', array('as' => 'index.info', 'uses' => 'homeController@getInfo') );
});