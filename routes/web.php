<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('config', function () {
    return view('config');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');

	//Users
	Route::post('users/store', 'UserController@store')->name('users.store')
		->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	//Abonos
	Route::post('abonos/store', 'AbonoController@store')->name('abonos.store')
		->middleware('permission:abonos.create');

	Route::get('abonos', 'AbonoController@index')->name('abonos.index')
		->middleware('permission:abonos.index');

	Route::get('abonos/create', 'AbonoController@create')->name('abonos.create')
		->middleware('permission:abonos.create');

	Route::put('abonos/{abono}', 'AbonoController@update')->name('abonos.update')
		->middleware('permission:abonos.edit');

	Route::get('abonos/{abono}', 'AbonoController@show')->name('abonos.show')
		->middleware('permission:abonos.show');

	Route::delete('abonos/{abono}', 'AbonoController@destroy')->name('abonos.destroy')
		->middleware('permission:abonos.destroy');

	Route::get('abonos/{abono}/edit', 'AbonoController@edit')->name('abonos.edit')
		->middleware('permission:abonos.edit');

	//Barrios
	Route::post('barrios/store', 'BarrioController@store')->name('barrios.store')
		->middleware('permission:barrios.create');

	Route::get('barrios', 'BarrioController@index')->name('barrios.index')
		->middleware('permission:barrios.index');

	Route::get('barrios/create', 'BarrioController@create')->name('barrios.create')
		->middleware('permission:barrios.create');

	Route::put('barrios/{barrio}', 'BarrioController@update')->name('barrios.update')
		->middleware('permission:barrios.edit');

	Route::get('barrios/{barrio}', 'BarrioController@show')->name('barrios.show')
		->middleware('permission:barrios.show');

	Route::delete('barrios/{barrio}', 'BarrioController@destroy')->name('barrios.destroy')
		->middleware('permission:barrios.destroy');

	Route::get('barrios/{barrio}/edit', 'BarrioController@edit')->name('barrios.edit')
		->middleware('permission:barrios.edit');

	//Ciudades
	Route::post('ciudades/store', 'CiudadController@store')->name('ciudades.store')
		->middleware('permission:ciudades.create');

	Route::get('ciudades', 'CiudadController@index')->name('ciudades.index')
		->middleware('permission:ciudades.index');

	Route::get('ciudades/create', 'CiudadController@create')->name('ciudades.create')
		->middleware('permission:ciudades.create');

	Route::put('ciudades/{ciudad}', 'CiudadController@update')->name('ciudades.update')
		->middleware('permission:ciudades.edit');

	Route::get('ciudades/{ciudad}', 'CiudadController@show')->name('ciudades.show')
		->middleware('permission:ciudades.show');

	Route::delete('ciudades/{ciudad}', 'CiudadController@destroy')->name('ciudades.destroy')
		->middleware('permission:ciudades.destroy');

	Route::get('ciudades/{ciudad}/edit', 'CiudadController@edit')->name('ciudades.edit')
		->middleware('permission:ciudades.edit');

	//Clientes
	Route::post('clientes/store', 'ClienteController@store')->name('clientes.store')
		->middleware('permission:clientes.create');

	Route::get('clientes', 'ClienteController@index')->name('clientes.index')
		->middleware('permission:clientes.index');

	Route::get('clientes/create', 'ClienteController@create')->name('clientes.create')
		->middleware('permission:clientes.create');

	Route::put('clientes/{cliente}', 'ClienteController@update')->name('clientes.update')
		->middleware('permission:clientes.edit');

	Route::get('clientes/{cliente}', 'ClienteController@show')->name('clientes.show')
		->middleware('permission:clientes.show');

	Route::delete('clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy')
		->middleware('permission:clientes.destroy');

	Route::get('clientes/{cliente}/edit', 'ClienteController@edit')->name('clientes.edit')
		->middleware('permission:clientes.edit');

	//Creditos
	Route::post('creditos/store', 'CreditoController@store')->name('creditos.store')
		->middleware('permission:creditos.create');

	Route::get('creditos', 'CreditoController@index')->name('creditos.index')
		->middleware('permission:creditos.index');

	Route::get('creditos/create', 'CreditoController@create')->name('creditos.create')
		->middleware('permission:creditos.create');

	Route::put('creditos/{credito}', 'CreditoController@update')->name('creditos.update')
		->middleware('permission:creditos.edit');

	Route::get('creditos/{credito}', 'CreditoController@show')->name('creditos.show')
		->middleware('permission:creditos.show');

	Route::delete('creditos/{credito}', 'CreditoController@destroy')->name('creditos.destroy')
		->middleware('permission:creditos.destroy');

	Route::get('creditos/{credito}/edit', 'CreditoController@edit')->name('creditos.edit')
		->middleware('permission:creditos.edit');

	//FormaPagos
	Route::post('formapagos/store', 'FormaPagoController@store')->name('formapagos.store')
		->middleware('permission:formapagos.create');

	Route::get('formapagos', 'FormaPagoController@index')->name('formapagos.index')
		->middleware('permission:formapagos.index');

	Route::get('formapagos/create', 'FormaPagoController@create')->name('formapagos.create')
		->middleware('permission:formapagos.create');

	Route::put('formapagos/{formapago}', 'FormaPagoController@update')->name('formapagos.update')
		->middleware('permission:formapagos.edit');

	Route::get('formapagos/{formapago}', 'FormaPagoController@show')->name('formapagos.show')
		->middleware('permission:formapagos.show');

	Route::delete('formapagos/{formapago}', 'FormaPagoController@destroy')->name('formapagos.destroy')
		->middleware('permission:formapagos.destroy');

	Route::get('formapagos/{formapago}/edit', 'FormaPagoController@edit')->name('formapagos.edit')
		->middleware('permission:formapagos.edit');

	//Plazos
	Route::post('plazos/store', 'PlazoController@store')->name('plazos.store')
		->middleware('permission:plazos.create');

	Route::get('plazos', 'PlazoController@index')->name('plazos.index')
		->middleware('permission:plazos.index');

	Route::get('plazos/create', 'PlazoController@create')->name('plazos.create')
		->middleware('permission:plazos.create');

	Route::put('plazos/{plazo}', 'PlazoController@update')->name('plazos.update')
		->middleware('permission:plazos.edit');

	Route::get('plazos/{plazo}', 'PlazoController@show')->name('plazos.show')
		->middleware('permission:plazos.show');

	Route::delete('plazos/{plazo}', 'PlazoController@destroy')->name('plazos.destroy')
		->middleware('permission:plazos.destroy');

	Route::get('plazos/{plazo}/edit', 'PlazoController@edit')->name('plazos.edit')
		->middleware('permission:plazos.edit');

	//Parametros
	Route::post('parametros/store', 'ParametroController@store')->name('parametros.store')
		->middleware('permission:parametros.create');

	Route::get('parametros', 'ParametroController@index')->name('parametros.index')
		->middleware('permission:parametros.index');

	Route::get('parametros/create', 'ParametroController@create')->name('parametros.create')
		->middleware('permission:parametros.create');

	Route::put('parametros/{parametro}', 'ParametroController@update')->name('parametros.update')
		->middleware('permission:parametros.edit');

	Route::get('parametros/{parametro}', 'ParametroController@show')->name('parametros.show')
		->middleware('permission:parametros.show');

	Route::delete('parametros/{parametro}', 'ParametroController@destroy')->name('parametros.destroy')
		->middleware('permission:parametros.destroy');

	Route::get('parametros/{parametro}/edit', 'ParametroController@edit')->name('parametros.edit')
		->middleware('permission:parametros.edit');
	});
