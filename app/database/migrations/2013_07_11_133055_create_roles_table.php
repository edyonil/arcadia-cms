<?php

/**
* Migration file for table roles.
* 
* This file is provided by artisan and the great work of Jeffrey Way "Generate" 
* This file provide the structure for the roles table as describe belove.
*
* Version 0.1
*   Column Name  |  Column Type   |  Column Description
*      id        |  Integer (AI)  |   Simple the primary key of the table, will be autoincrement and integer.
*     name       |  String        |   The name of the role, unique neither index
*  description   |  String        |   The description of the role, not unique neither index
*
* Allow soft delete
**/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->text('description');
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
        Schema::drop('roles');
    }

}
