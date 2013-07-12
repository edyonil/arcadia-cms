<?php

/**
* Migration file for table posts.
* 
* This file is provided by artisan and the great work of Jeffrey Way "Generate" 
* This file provide the structure for the posts table as describe belove.
*
* Version 0.1
*   Column Name  |  Column Type   |  Column Description
*      id        |  Integer (AI)  |   Simple the primary key of the table, will be autoincrement and integer.
*     user_id    |  Integer (FK)  |   The id of the user who makes this post
*     title      |  String        |   The title of the post
*      post      |  Text          |   The text of the post
*
* Allow soft delete
**/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('title',100);
            $table->text('post');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }

}
