<?php

class HomeController extends BaseController {

	protected $layout = 'homeMaster';
	/*
	 * --------------------------------------------------------------------------
	 * GET Controllers
	 * --------------------------------------------------------------------------
	*/

	public function getIndex()
	{
		// Grab all the posts from the database
		$posts = Post::paginate(10);
		$this->layout->content = View::make('public.index')->with(compact('posts'));
	}

	public function getAbout()
	{
		$this->layout->content = View::make('public.about');
	}

	public function getContact()
	{
		$this->layout->content = View::make('public.contact');
	}

	public function getLogin()
	{
		$this->layout->content = View::make('public.login');
	}



	/* ----------------------------------------------------------------------------
	 * POST Controllers
	 * ----------------------------------------------------------------------------
	 */
	public function postLogin()
	{
		$userData = array(
			'email' 		=> Input::get('email'),
			'password' 		=> Input::get('pass'),
		);
		if(Auth::attempt($userData))
		{	// Successful logged in
			if(Auth::user()->role_id == 1)
			{
		   		return Redirect::route('admin.index');
			}
			else
			{
				return "I'm sorry, I've create only the admin panel now";
			}
		}
		else
		{
			return Redirect::route('home.login')->withErrors( array('loginError' => 'Wrong Email &/Or Password') );
		}
	}

	public function postContact()
	{
		// TODO : store the messages
		return Redirect::route('home.contact')->withErrors( array( 'contactUsDone' => 'Thank you for contacting Us!') );
	}
}