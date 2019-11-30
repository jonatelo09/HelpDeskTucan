<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//primer rol
		$role = new Role();
		$role->name = 'admin';
		$role->description = 'Administrator';
		$role->save();
		//segundo rol
		$role = new Role();
		$role->name = 'empleado';
		$role->description = 'Empleado';
		$role->save();
		//tercer rol
		$role = new Role();
		$role->name = 'cliente';
		$role->description = 'Cliente';
		$role->save();
	}
}
