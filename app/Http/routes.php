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

Route::get('/PanelMaestro', function () {
    return view('Maestro.panelMaestro');
})->name('Panel de Maestro');


Route::get('/PanelAlumno', function () {
    return view('Alumno.panelAlumno');
})->name('Panel de Alumno');


Route::get('/AgregarDocumentos', function () {
    return view('Admin.Documentos.AgregarDoc.AgregarDoc');
})->name('Agregar Documentos');

//Ver Admin
Route::get('/VerDocumentos', function () {
    return view('Admin.Documentos.VerDoc.VerDoc');
})->name('Ver Documentos');

Route::get('/AgregarDocumentosM', function () {
    return view('Maestro.Documentos.Agregar.AgregarDocM');
})->name('Agregar Documentos');

//Ver Maestro
Route::get('/VerDocumentosM', function () {
    return view('Maestro.Documentos.Ver.VerDocM');
})->name('Ver Documentos');

/*Route::get('/AgregarDocumentosM/Calificaciones', function () {
    return view('Maestro.Documentos.Agregar.Calificaciones.ListaCalificacionesIndex');
})->name('Asignar Calificaciones');*/

Route::get('AgregarDocumentosM/Calificaciones','Calificaciones@index');

Route::get('/AgregarDocumentosM/Calificaciones/ActaCalificaciones', function () {
    return view('Maestro.Documentos.Agregar.Calificaciones.ActaCalificaciones');
})->name('Acta de Calificaciones');

//Route::get('/ce', 'CicloEscolares@index');
//
/*Route::get('/Documentos/AgregarDoc/ListaAlu', function () {
    return view('Admin.Documentos.AgregarDoc.ListaAlu.ListaAlu');
})->name('Agregar Lista de Alumnos');*/

/*Route::get('/Documentos/AgregarDoc/ListaAlu/Lista_Alumnos', function () {
    return view('Admin.Documentos.AgregarDoc.ListaAlu.Lista_Alumnos');
})->name('Lista de Grupos');*/

//RUTAS DE ACUERDO DE GRUPO
Route::resource('AcuerdoGrupo','Acuerdos'); 
Route::get('crear_acuerdo_grupo/{tipo}/{id}', 'Acuerdos@crear_acuerdo_grupo'); //ruta para pdf
Route::get('AcuerdoGrupoAdmin', 'Acuerdos@indexAdmin'); //index Admin


//RUTAS DE CALNEDARIO DE EXAMENES
Route::resource('CalendarioExamenes','CalendarioExamenes');

//RUTAS DE LISTA DE ALUMNOS
Route::resource('ListaAlumnos','ListaAlumnos');
Route::get('crear_lista_alumnos/{tipo}/{id}', 'ListaAlumnos@crear_lista_alumnos');
//
