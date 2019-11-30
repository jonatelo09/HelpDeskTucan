<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(RoleTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(TurnsTableSeeder::class);
		$this->call(StatusTableSeeder::class);
		$this->call(ProblemsTableSeeder::class);
		$this->call(PriorityTableSeeder::class);
	}
}
