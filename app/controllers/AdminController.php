<?php

class AdminController extends BaseController {

	protected $layout = 'adminMaster';

	public function getIndex()
	{
		$this->layout->content = View::make('private.index');
	}

	public function getManagePosts()
	{
		$this->layout->content = View::make('private.postViews.index');
	}

	public function getManageComments()
	{
		$this->layout->content = View::make('private.commentViews.index');
	}

	public function getManageUsers()
	{
		$this->layout->content = View::make('private.userViews.index');
	}
}