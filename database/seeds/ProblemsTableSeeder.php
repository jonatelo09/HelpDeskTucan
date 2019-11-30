<?php

use App\Problem;
use Illuminate\Database\Seeder;

class ProblemsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Problem::create([
			'name_pro' => 'Pantalla Azul',
			'description' => 'No enciende la compu por la pantalla azul',
		]);
	}
}
