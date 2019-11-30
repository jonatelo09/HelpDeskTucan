<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Status::create([
			'name_sta' => 'registrado',
		]);
		Status::create([
			'name_sta' => 'asignado',
		]);
		Status::create([
			'name_sta' => 'desarrollo',
		]);
		Status::create([
			'name_sta' => 'terminado',
		]);
		Status::create([
			'name_sta' => 'cancelado',
		]);
	}
}
