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
    Route::any('/', array('as' => 'home.index', 'uses' => 'HomeController@getIndex') );
    /* ---------------------------------------
	 * GET Requests
	 * ---------------------------------------
	 */
    Route::get('login',      array('as' => 'home.login',    'uses' => 'HomeController@getLogin'     ) );
    Route::get('about', 	 array('as' => 'home.about', 	'uses' => 'HomeController@getAbout'		) );
    Route::get('contact-us', array('as' => 'home.contact', 	'uses' => 'HomeController@getContact'	) );
    /* ---------------------------------------
     * POST Requests
     * ---------------------------------------
     */
    Route::post('contact-us-done',  array('as' => 'home.postContact', 'uses' => 'HomeController@postContact') );
    Route::post('login-attempt',    array('as' => 'home.doLogin',     'uses' => 'HomeController@postLogin'  ) );
});

Route::group( array('prefix' => '/admin', 'before' => 'auth'), function()
{
    Route::any('/', array('as' => 'admin.index', 'uses' => 'AdminController@getIndex') );
    /* ---------------------------------------
     * GET Requests
     * ---------------------------------------
     */
    Route::get('manage-posts',      array('as' => 'admin.manageposts',      'uses' => 'AdminController@getManagePosts'    ) );
    Route::get('manage-comments',   array('as' => 'admin.managecomments',   'uses' => 'AdminController@getManageComments' ) );
    Route::get('manage-users',      array('as' => 'admin.manageusers',      'uses' => 'AdminController@getManageUsers'    ) );
    Route::get('logout',            array('as' => 'admin.logout', function()
    {
        Auth::logout();
        return Redirect::route('home.index');
    }));
});