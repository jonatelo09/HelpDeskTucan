<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'username' => 'jonatelo',
			'firstname' => 'Jonatan',
			'lastname' => 'Arevalo',
			'phone' => '9981373875',
			'phone_fijo' => '5598659856',
			'address' => 'Region 96, MZ 5 LTE 17, CALLE 12, CANCUN, QUINTANA ROO',
			'email' => 'kuroko.arevalo@gmail.com',
			'image' => 'img/jona.png',
			'password' => bcrypt('Jonatelo_568923'),
		]);

		User::create([
			'username' => 'jose56',
			'firstname' => 'Jose',
			'lastname' => 'Arevalod',
			'phone' => '9981373872',
			'phone_fijo' => '5598659852',
			'address' => 'Region 96, MZ 5 LTE 17, Cw',
			'email' => 'jose@gmail.com',
			'image' => 'img/jonaw.png',
			'password' => bcrypt('Jose_568923'),
		]);

		User::create([
			'username' => 'cliente',
			'firstname' => 'Cliente',
			'lastname' => 'Prueba',
			'phone' => '3872598623',
			'phone_fijo' => '4512594123',
			'address' => 'Region 96, MZ 5 LTE 17, Cancun, quintana Roo',
			'email' => 'empleado@gmail.com',
			'image' => 'img/empleado.png',
			'password' => bcrypt('Empleado_568923'),
		]);
	}
}
