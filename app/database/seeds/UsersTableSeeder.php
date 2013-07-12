<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create(
        	array(
        		'role_id'	=> 	1,
        		'name'		=>	'Claudio Ludovico',
        		'surname'	=> 	'Panetta',
        		'email' 	=> 	'laravel@boilerplate.com',
        		'username'	=>	'ludo237',
        		'password'	=>	Hash::make('laravelboilerplate')
        	)
        );

        User::create(
        	array(
        		'role_id'	=> 	2,
        		'name'		=>	'Mr. Foo',
        		'surname'	=> 	'Bar',
        		'email' 	=> 	'foo@bar.com',
        		'username'	=>	'FooBar',
        		'password'	=>	Hash::make('foobar2')
        	)
        );
    }

}