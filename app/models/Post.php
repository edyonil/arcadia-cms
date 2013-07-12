<?php

class Post extends Eloquent {

	public static $rules = array();

	protected $softDelete = true;
	protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}