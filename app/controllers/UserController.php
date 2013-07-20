<?php

class UserController extends \BaseController {

	protected $layout = 'adminMaster';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		$this->layout->content = View::make('private.userViews.index')->with(compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.userViews.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'uName' 	=> 'required|min:3',
			'uSurname' 	=> 'required|min:3',
			'uEmail'	=> 'required|email|unique:users,email',
			'uNick'		=> 'required|unique:users,username',
			'uPass'		=> 'required|alpha_num|min:6'
		);
		$valid = Validator::make(Input::all(), $rules);
		if($valid->fails())
		{
			return Redirect::action('UserController@create')->withErrors($valid)->withInput();
		}
		else
		{
			try
			{
				$user = User::create( array(
	        		'role_id'	=> 	2,
	        		'name'		=>	Input::get('uName'),
	        		'surname'	=> 	Input::get('uSurname'),
	        		'email' 	=> 	Input::get('uEmail'),
	        		'username'	=>	Input::get('uNick'),
	        		'password'	=>	Hash::make(Input::get('uPass'))
	        		)
	        	);
	        	return Redirect::action('UserController@index')->withErrors( array('userActionDone' => 'User: '.$user->username. ' created') );
			}
			catch (Exception $e)
			{
				return Redirect::action('UserController@create')->withInput(); // TODO : handle message
			}
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		$this->layout->content = View::make('private.userViews.edit')->with(compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		$rules = array(
			'uName' 	=> 'required|min:3',
			'uSurname' 	=> 'required|min:3',
			'uEmail'	=> 'required|email|unique:users,email',
			'uNick'		=> 'required|unique:users,username',
			'uPass'		=> 'alpha_num|min:6'
		);
		$valid = Validator::make(Input::all(), $rules);
		if($valid->fails())
		{
			return Redirect::action('UserController@edit', $user->id)->withErrors($valid)->withInput();
		}
		else
		{
			$password = Input::get('uPass');
			if(isset($password) && !empty($password))
			{
				$user->password	= Hash::make(Input::get('uPass'));
			}
    		$user->name		= Input::get('uName');
    		$user->surname	= Input::get('uSurname');
    		$user->email 	= Input::get('uEmail');
    		$user->username	= Input::get('uNick');
	        if($user->save())
	        {
	        	return Redirect::action('UserController@index')->withErrors( array('userActionDone' => 'User: '.$user->username. ' updated') );
	        }
			else
			{
				return Redirect::action('UserController@edit', $user->id)->withInput(); // TODO : handle message
			}
		}
	}


	public function showDestroy($id)
	{
		$user = User::find($id);
		$this->layout->content = View::make('private.userViews.showDestroy')->with(compact('user'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		if($user->id == Auth::user()->id)
		{
			return Redirect::action('UserController@index')->withErrors( array('userActionError' => "Dude com'on you can't delete yourself!!! ") );
		}
		else
		{
			$user->delete();
			return Redirect::action('UserController@index')->withErrors( array('userActionDone' => 'User '.$user->username.' deleted!') );
		}
	}
}