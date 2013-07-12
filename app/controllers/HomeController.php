<?php

class HomeController extends BaseController {

	protected $layout = 'homeMaster';
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		// Grab all the posts from the database
		$posts = Post::all();
		$this->layout->content = View::make('public.index')->with(compact('posts'));
	}

}