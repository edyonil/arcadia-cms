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
			try
			{
				Post::create(
		            array(
		                'user_id'   => Auth::user()->id,
		                'title'     => Input::get('pTitle'),
		                'post'      => Input::get('pText')
		            )
		        );
		        return Redirect::action('PostController@index')->withErrors( array('postActionDone' => 'Your post is alive') );
			}
			catch (Exception $e)
			{
				return Redirect::action('PostController@create')->withInput(); // TODO Handle message
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
		$post = Post::find($id);
		$this->layout->content = View::make('private.postViews.edit')->with(compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		if($post != NULL)
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
				return Redirect::action('PostController@edit', $post->id)->withErrors($validation)->withInput();
			}
			else
			{
				$post->title 	= Input::get('pTitle');
				$post->post 	= Input::get('pText');
				if($post->save())
				{
					return Redirect::action('PostController@index')->withErrors( array('postActionDone' => 'Post saved dude!') );
				} 
			}
		}
	}

	public function showDestroy($id)
	{
		$post = Post::find($id);
		$this->layout->content = View::make('private.postViews.showDestroy')->with(compact('post'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostController@index')->withErrors( array('postActionDone' => 'Post '.$post->title.' deleted!') );
	}
}