<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/

	'default' => 'mysql',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(
		/* 
		 | Most of the time on OSX there's MAMP and to make Laravel works wth it you should include the socket 
		 | Think about this connection as development connection
		 | 
		 */
		'mysql' => array(
			'driver'    	=> 'mysql',
			'host'      	=> 'localhost',
			'database'  	=> 'arcadia',
			'unix_socket'   => '/Applications/MAMP/tmp/mysql/mysql.sock',
			'username'  	=> 'root',
			'password'  	=> 'root',
			'charset'   	=> 'utf8',
			'collation' 	=> 'utf8_unicode_ci',
			'prefix'    	=> '',
		),
	),
);