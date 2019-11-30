<?php

use App\Turn;
use Illuminate\Database\Seeder;

class TurnsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Turn::create([
			'name_tur' => 'AM',
		]);

		Turn::Create([
			'name_tur' => 'PM',
		]);

	}
}
