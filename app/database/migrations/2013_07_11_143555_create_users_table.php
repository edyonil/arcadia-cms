<?php

/**
* Migration file for table users.
* 
* This file is provided by artisan and the great work of Jeffrey Way "Generate" 
* This file provide the structure for the users table as describe belove.
*
* Version 0.1
* Column Name  |  Column Type   |  Column Description
*      id      |  Integer (AI)  |   Simple the primary key of the table, will be autoincrement and integer.
*    roleid    |  Integer (FK)  |   Provide the role id for every user, this is an fk users:role (N:1) 
*     name     |  String        |   The name of the user, not unique neither index can be NULL
*    surname   |  String        |   The surname of the user, not unique neither index can be NULL
*     email    |  String        |   The Email of the user, will be unique but not index can't be NULL
*    username  |  String        |   Simple username, will be unique. This is useful when you have to manage the comments
*    Password  |  String        |   User's password, crypt and (I hope) impossible to read.
*
* Allow softdelete
**/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email',150)->unique();
            $table->string('username',150)->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
