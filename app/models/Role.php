<?php

class Role extends Eloquent {

	public static $rules = array();

	protected $softDelete = true;
	protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

}