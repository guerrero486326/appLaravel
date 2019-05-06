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
    return view('welcome');
})->name('nombre_de_la_ruta');

/* cuando un middleware es asignado en la parte de rutas en el kernel se usa de la siguiente forma
Route::get('/', function () {
    return view('welcome');
})->name('nombre_de_la_ruta')->middleware('name');

si hay mas de un middleware el parametro iria (['middle1','middle2',...'n']);

para enviar paramtros al middleware se hace de la siguiente forma (['middle1:parametro','middle2']);
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//forma de condicionar una ruta para que acepte un parametro segun las expresion regular asignada a traves de un where
Route::get('pares-hasta-{number}', function($number){
	$out = [];
	for ($i=0; $i <= $number ; $i++) { 
		if($i % 2 === 0){
			$out[] = $i;
		}
	}
	return json_encode($out);
})->where(['number' => '[\d]+']);

Route::resource('categories','CategoryController'); // para cuando se hacen todas las operaciones

/*
	get leer
	post agregar
	put actualizar
	delete eliminar
*/
//redirect()->route('nombre de la ruta',['paramentro' => 'valor del parametro']);
