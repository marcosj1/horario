<?php

use Illuminate\Support\Facades\Route;

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
	return view('index');
    //return view('pnf/create');
});

Route::resource('estado','EstadoController');
Route::resource('bitacora','BitacoraController');
Route::resource('lapso','LapsoController');
Route::resource('trimestre','TrimestreController');
Route::resource('municipio','MunicipioController');
Route::resource('parroquia','ParroquiaController');
Route::resource('categoria','CategoriaController');
Route::resource('area','AreaController');
Route::resource('especialidad','EspecialidadController');
Route::resource('docente','DocenteController');


Route::resource('pnf','PnfController');


Route::resource('dedicacion','DedicacionController');
Route::resource('trayecto','TrayectoController');
Route::resource('unidad','UnidadController');
Route::resource('usuario','UsuarioController');
Route::resource('tipo_ambiente','Tipo_ambienteController');
Route::resource('sede','SedeController');
Route::resource('ambiente','AmbienteController');
Route::resource('respaldar_restaurar','RespaldoRestaurarController');
Route::resource('rol','RolController');



//Route::post('login', 'logController@login');
Route::get('logout', 'logController@logout');
Route::resource('log','logController');


Route::get('municipios/{id}','ParroquiaController@getMunicipios');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
