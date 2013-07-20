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
     * REST Requests
     * ---------------------------------------
     */
    Route::resource('manage-posts',    'PostController'   );
    Route::resource('manage-comments', 'CommentController');
    Route::resource('manage-users',    'UserController'   );
    /* ---------------------------------------
     * GET Requests
     * ---------------------------------------
     */
    Route::get('manage-posts/{id}/delete', array( 'as' => 'admin.post.destroy', 'uses' => 'PostController@showDestroy') );
    Route::get('manage-users/{id}/delete', array( 'as' => 'admin.user.destroy', 'uses' => 'UserController@showDestroy') );

    Route::get('logout',array('as' => 'admin.logout', function()
    {
        Auth::logout();
        return Redirect::route('home.index');
    }));
});