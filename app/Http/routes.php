<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/

Route::get('/', function () {
    return view('login');
})->name('Prueba');

Route::resource('ce', 'CicloEscolares');
Route::resource('sem','Semestres');
Route::resource('gru','Grupos');
Route::resource('alu','Alumnos');
Route::resource('plan','PlanesEstudios');
Route::resource('mae','Maestros');
Route::resource('mat','Materias');
Route::resource('uni','Unidades');
Route::resource('tem','Temas');
Route::resource('rep','Reportes');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/PanelAdmin', function () {
    return view('Admin.panelAdmin');
})->name('Panel de Administrador');

Route::get('/AgregarDocumentos', function () {
    return view('Admin.Documentos.AgregarDoc.AgregarDoc');
})->name('Agregar Documentos');

//Route::get('/ce', 'CicloEscolares@index');