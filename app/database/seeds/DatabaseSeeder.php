<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('===== Seeder Database ====');

		$this->call('RolesTableSeeder');
		$this->command->info("Roles table seeded.. proceed with Users");

		$this->call('UsersTableSeeder');
        $this->command->info('Users table seeded!');

        /*$this->call('PostsTableSeeder');
        $this->command->info('Posts table seeded!');

        $this->call('CommentsTableSeeder');
        $this->command->info('Comments table seeded!');

        $table->command->info('==== Finish, everythings done! Enjoy ====');*/
	}

}