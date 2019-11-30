<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$categories = Category::paginate(5);
		return view('admin.categories.index')->with(compact('categories'));

	}

	public function create() {
		return view('admin.categories.create');
	}

	public function store(Request $request) {
		$messages = [
			'name_cat.required' => 'Es necesario ingresar un nombre para categoria',
			'name_cat.min' => 'El nombre del producto debe tener al menos 6 caracteres',
		];
		$rules = [
			'name_cat' => 'required|min:6',
		];

		$this->validate($request, $rules, $messages);
		$categori = new Category();
		$categori->name_cat = $request->input('name_cat');
		$categori->save();

		return redirect('/admin/category');
	}

	public function edit($id) {
		$categori = Category::find($id);
		return view('admin.categories.edit')->with(compact('categori'));
	}
	public function update(Request $request, $id) {
		$messages = [
			'name_cat.required' => 'Es necesario ingresar un nombre para categoria',
			'name_cat.min' => 'El nombre del producto debe tener al menos 6 caracteres',
		];
		$rules = [
			'name_cat' => 'required|min:6',
		];

		$this->validate($request, $rules, $messages);
		$categori = Category::find($id);
		$categori->name_cat = $request->input('name_cat');
		$categori->save();

		return redirect('/admin/category');
	}
	public function destroy($id) {
		$categori = Category::find($id);
		$categori->delete(); //ejecutar una consulta DELETE a la tabla productos

		return redirect('/admin/category');
	}
}
