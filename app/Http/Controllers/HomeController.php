<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	public function index(Request $request) {
		$request->user()->authorizeRoles(['empleado', 'cliente', 'admin']);
		$registrados = DB::table('statuses')->select('name_sta')->where('id', 1)->get();
		$asignados = DB::table('statuses')->select('name_sta')->where('id', 2)->get();
		$desarrollos = DB::table('statuses')->select('name_sta')->where('id', 3)->get();
		$terminados = DB::table('statuses')->select('name_sta')->where('id', 4)->get();
		$cancelados = DB::table('statuses')->select('name_sta')->where('id', 5)->get();
		//dd($status);
		$cont1 = DB::table('tickets')->where('status_id', 1)->count();
		$cont2 = DB::table('tickets')->where('status_id', 2)->count();
		$cont3 = DB::table('tickets')->where('status_id', 3)->count();
		$cont4 = DB::table('tickets')->where('status_id', 4)->count();
		$cont5 = DB::table('tickets')->where('status_id', 5)->count();
		return view('home')->with(compact('cont1', 'cont2', 'cont3', 'cont4', 'cont5', 'registrados', 'asignados', 'desarrollos', 'terminados', 'cancelados'));
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
/*	public function index() {
return view('home');
}*/
	public function profile() {
		return view('profile');
	}
}
