<?php

/**
* Migration file for table comments.
* 
* This file is provided by artisan and the great work of Jeffrey Way "Generate" 
* This file provide the structure for the comments table as describe belove.
*
* Version 0.1
*   Column Name  |  Column Type   |  Column Description
*      id        |  Integer (AI)  |   Simple the primary key of the table, will be autoincrement and integer.
*     post_id    |  Integer (FK)  |   The id of the post that has the comment
*     user_id    |  Integer (FK)  |   The id of the user who makes this comment
*     comment    |  Text          |   The text of the comment
*
* Allow soft delete
**/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->text('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }

}
