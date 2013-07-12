<?php

class CommentsTableSeeder extends Seeder {

    public function run()
    {
        Comment::create(
            array(
                'user_id'   => 2,
                'post_id'   => 1,
                'comment'   => "I Comment this Yeay"
            )
        );
    }
}