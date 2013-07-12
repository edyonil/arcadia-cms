<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
        Post::create(
            array(
                'user_id'   => 1,
                'title'     => "Welcome to Laravel Boilerplate",
                'post'      => "This is the first post created by the seeder. Login with the Admin credential to edit or delete this post. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 Curabitur semper pulvinar dui, non lacinia nunc pretium eu. Integer pellentesque nisl ut ligula auctor aliquet. In nibh est, sodales a nibh sit amet, auctor faucibus mi.
                                 Proin condimentum id quam non gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                 per inceptos himenaeos. Nulla vulputate porttitor justo semper porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet neque metus, sit amet luctus
                                 arcu tincidunt sed. Mauris magna mi, convallis non ante et, condimentum malesuada metus. Sed luctus augue non lorem lacinia tincidunt. Morbi volutpat semper libero, eu
                                 imperdiet tellus condimentum ut. Quisque a ante elementum, dapibus sapien nec, accumsan tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                 Donec sed pharetra ligula. Proin porta dictum tortor. Ut nec magna eu ipsum scelerisque congue varius vel dolor. Integer vehicula, ligula in tristique tristique,
                                 tortor quam dapibus nulla, in lacinia tellus dolor eu nisl. Pellentesque a ipsum urna. Curabitur posuere enim orci, at posuere enim ullamcorper sed. Duis commodo
                                 vitae elit quis feugiat. Maecenas vel congue tellus. Phasellus convallis nisi at purus varius tristique. Donec eget est nec augue sodales hendrerit.
                                 Aliquam blandit enim nunc, quis fermentum lorem pulvinar sit amet. Fusce a aliquet orci. Etiam aliquam vitae augue consequat placerat. Sed libero erat,
                                 luctus eget nisl porta, facilisis tristique felis."
            )
        );
    }
}