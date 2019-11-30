<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$users = DB::table('role_user as ru')
			->join('roles as r', 'ru.role_id', '=', 'r.id')
			->join('users as u', 'ru.user_id', '=', 'u.id')
			->select('u.id', 'u.username', 'u.firstname', 'u.lastname', 'u.phone', 'u.email', 'r.name')
			->paginate(5);
		//dd($users);
		return view('admin.users.index')->with(compact('users'));
	}

	public function create() {
		return view('admin.users.create');
	}
}
