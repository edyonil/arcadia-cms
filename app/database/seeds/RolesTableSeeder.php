<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        Role::create(
        	array(
        		'name'			=>	'Administrator',
        		'description'	=>	"Master role, can do almost everythings"
        	)
        );

        Role::create(
        	array(
        		'name'			=>	'User',
        		'description'	=>	"Comment-only role"
        	)
        );
    }
}