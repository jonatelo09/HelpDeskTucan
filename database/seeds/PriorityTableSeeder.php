<?php

use App\Priority;
use Illuminate\Database\Seeder;

class PriorityTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Priority::create([
			'name_pri' => 'Alta',
		]);

		Priority::create([
			'name_pri' => 'Media',
		]);

		Priority::create([
			'name_pri' => 'Baja',
		]);
	}
}
