<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$problems = Problem::paginate(5);
		return view('admin.problemas.index')->with(compact('problems'));

	}

	public function create() {
		return view('admin.problemas.create');
	}

	public function store(Request $request) {
		$messages = [
			'name_pro.required' => 'Es necesario ingresar un nombre para categoria',
			'name_pro.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
		];
		$rules = [
			'name_pro' => 'required|min:6',
			'description' => 'required|max:100',
		];

		$this->validate($request, $rules, $messages);
		$categori = new Problem();
		$categori->name_pro = $request->input('name_pro');
		$categori->description = $request->input('description');
		$categori->save();

		return redirect('/admin/problem');
	}

	public function edit($id) {
		$categori = Problem::find($id);
		return view('admin.problemas.edit')->with(compact('categori'));
	}
	public function update(Request $request, $id) {
		$messages = [
			'name_pro.required' => 'Es necesario ingresar un nombre para categoria',
			'name_pro.min' => 'El nombre del producto debe tener al menos 6 caracteres',
			'description.required' => 'La description corta es obligatorio',
			'description.max' => 'La descripcion corta admite solo 30 caracteres',
		];
		$rules = [
			'name_pro' => 'required|min:6',
			'description' => 'required|max:100',
		];

		$this->validate($request, $rules, $messages);
		$categori = Problem::find($id);
		$categori->name_pro = $request->input('name_pro');
		$categori->description = $request->input('description');
		$categori->save();

		return redirect('/admin/problem');
	}
	public function destroy($id) {
		$categori = Problem::find($id);
		$categori->delete(); //ejecutar una consulta DELETE a la tabla productos

		return redirect('/admin/problem');
	}
}
