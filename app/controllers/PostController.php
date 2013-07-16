<?php

class PostController extends \BaseController {

	protected $layout = 'adminMaster';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$this->layout->content = View::make('private.postViews.index')->with(compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.postViews.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$messages = array(
			'required'	=> "This field is Mandatory!",
			'max'		=> "Title must have max 100 characters"
		);

		$rules = array(
			'pTitle' 	=> 'required|max:100',
			'pText' 	=> 'required',
		);

		$validation = Validator::make(Input::all(), $rules, $messages);
		if($validation->fails())
		{
			return Redirect::action('PostController@create')->withErrors($validation)->withInput();
		}
		else
		{
			$post = new Post;
			$post->title 	= Input::get('pTitle');
			$post->post 	= Input::get('pText');
			$post->user_id 	= Auth::user()->id;
			if($post->save())
			{
				return Redirect::action('PostController@index')->withErrors( array('postActionDone' => 'Your post is alive') );
			} 
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	}


	public function showDestroy($id)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	}
}