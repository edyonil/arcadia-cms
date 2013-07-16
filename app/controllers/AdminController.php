<?php

class AdminController extends BaseController {

	protected $layout = 'adminMaster';

	public function getIndex()
	{
		$this->layout->content = View::make('private.index');
	}
}