<?php

Route::get('/', function () {
	return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');

//rutas de categorias = problemas
Route::get('/admin/category', 'Admin\CategoryController@index'); //listado
Route::get('/admin/category/create', 'Admin\CategoryController@create'); //formulario
Route::post('/admin/category', 'Admin\CategoryController@store'); //registrar
Route::get('/admin/category/{id}/edit', 'Admin\CategoryController@edit'); //formulario edicion
Route::post('/admin/category/{id}/edit', 'Admin\CategoryController@update'); //actualizar
Route::post('/admin/category/{id}/delete', 'Admin\CategoryController@destroy'); // form eliminar

//rutas de categorias
Route::get('/admin/problem', 'Admin\ProblemController@index'); //listado
Route::get('/admin/problem/create', 'Admin\ProblemController@create'); //formulario
Route::post('/admin/problem', 'Admin\ProblemController@store'); //registrar
Route::get('/admin/problem/{id}/edit', 'Admin\ProblemController@edit'); //formulario edicion
Route::post('/admin/problem/{id}/edit', 'Admin\ProblemController@update'); //actualizar
Route::post('/admin/problem/{id}/delete', 'Admin\ProblemController@destroy'); // form eliminar

//rutas de Cliente = Departamento
Route::get('/admin/client', 'Admin\ClientController@index'); //listado
Route::get('/admin/client/create', 'Admin\ClientController@create'); //formulario
Route::post('/admin/client', 'Admin\ClientController@store'); //registrar
Route::get('/admin/client/{id}/edit', 'Admin\ClientController@edit'); //formulario edicion
Route::post('/admin/client/{id}/edit', 'Admin\ClientController@update'); //actualizar
Route::post('/admin/client/{id}/delete', 'Admin\ClientController@destroy'); // form eliminar

//rutas de usuario
Route::get('/admin/users', 'Admin\UserController@index');
Route::get('/admin/users/create', 'Admin\UserController@create');
//Route::post('/admin/users', 'Admin\UserController@store');

//rutas de tickets
Route::get('tickets', 'TicketController@index'); //listado
Route::get('/tickets/create', 'TicketController@create'); //formulario
Route::post('/tickets', 'TicketController@store'); //registrar
Route::get('/tickets/{id}/edit', 'TicketController@edit'); //formulario edicion
Route::post('/tickets/{id}/edit', 'TicketController@update'); //actualizar
Route::post('/tickets/{id}/delete', 'TicketController@destroy'); // form eliminar
