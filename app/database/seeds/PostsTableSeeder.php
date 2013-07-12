<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
        Post::create(
            array(
                'user_id'   => 1,
                'title'     => "Welcome to Laravel Boilerplate",
                'post'      => "This is the first post created by the seeder. Login with the Admin credential to edit or delete this post"
            )
        );
    }
}