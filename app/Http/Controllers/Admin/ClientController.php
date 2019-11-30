<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$clients = Client::paginate(5);
		return view('admin.clients.index')->with(compact('clients'));

	}

	public function create() {
		return view('admin.clients.create');
	}

	public function store(Request $request) {
		$messages = [
			'name_cli.required' => 'Es necesario ingresar un nombre para el Departamento',
			'name_cli.min' => 'El nombre del departamento debe tener al menos 6 caracteres',
		];
		$rules = [
			'name_cli' => 'required|min:6',
		];

		$this->validate($request, $rules, $messages);
		$categori = new Client();
		$categori->name_cli = $request->input('name_cli');
		$categori->save();

		return redirect('/admin/client');
	}

	public function edit($id) {
		//
		$client = Client::find($id);
		return view('admin.clients.edit')->with(compact('client'));
	}
	public function update(Request $request, $id) {
		$messages = [
			'name_cli.required' => 'Es necesario ingresar un nombre para categoria',
			'name_cli.min' => 'El nombre del producto debe tener al menos 6 caracteres',
		];
		$rules = [
			'name_cli' => 'required|min:6',
		];

		$this->validate($request, $rules, $messages);
		$categori = Client::find($id);
		$categori->name_cli = $request->input('name_cli');
		$categori->save();

		return redirect('/admin/client');
	}
	public function destroy($id) {
		$client = Client::find($id);
		$client->delete();

		return redirect('/admin/client');
	}
}
