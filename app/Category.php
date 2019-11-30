<?php

namespace App;

use App\Tickets;
use Illuminate\Database\Eloquent\Model;

//Areas
class Category extends Model {
	public static $messages = [
		'name.required' => 'Es necesario ingresar un nombre para la categoría.',
		'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres.',
		'description.max' => 'La descripción corta solo admite hasta 250 caracteres.',
	];
	public static $rules = [
		'name' => 'required|min:3',
		'description' => 'max:250',
	];
	protected $fillable = ['name', 'description'];

	//Categoria tiene varios tickets
	public function tickets() {
		return $this->hasMany(Tickets::class);
	}
}
