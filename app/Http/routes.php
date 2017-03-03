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
//Route::auth();

/*Route::get('/PanelAdmin', function () {
    return view('Admin.panelAdmin');
})->name('Panel de Administrador');

Route::get('/PanelMaestro', function () {
    return view('Maestro.panelMaestro');
})->name('Panel de Maestro');


Route::get('/PanelAlumno', function () {
    return view('Alumno.panelAlumno');
})->name('Panel de Alumno');*/

Route::resource('PanelAdmin','PanelAdmin');
Route::resource('PanelMaestro','PanelMaestro');
Route::resource('PanelAlumno','PanelAlumno');


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

//Ruta de calificaciones yf altas
Route::resource('Calificaciones','Calificaciones');
Route::get('CalificacionesFaltas','CalificacionesFaltas@index');
Route::get('CalificacionesFaltas/{id}','CalificacionesFaltas@mostrar');
//Route::get('Calificaciones/Alumnos/{id}', 'Calificaciones@index2');

//Ruta de CAlificaciones2
Route::resource('Calificaciones2','Calificaciones2');
//Ruta para mostrar ya con plantilla calificaciones por materia
Route::get('Calificaciones3','Calificaciones2@index2');
//Ruta para ver calificaciones por alumno
Route::get('Calificaciones3/{id}','Calificaciones2@show2');

//RUTAS DE ACUERDO DE GRUPO
Route::resource('AcuerdoGrupo','Acuerdos'); 

Route::get('crear_acuerdo_grupo/{tipo}/{id}', 'AcuerdosAd@crear_acuerdo_grupo'); //ruta para pdf
Route::resource('AcuerdoGrupoAdmin', 'AcuerdosAd'); //index Admin

Route::get('crear_acuerdo_grupo/{tipo}/{id}', 'AcuerdosAlu@crear_acuerdo_grupo'); //ruta para pdf
Route::resource('AcuerdoGrupoAlumno', 'AcuerdosAlu');

////RUTAS DE Carta de Asignación
Route::resource('CartaAsignacion','CartaAsignaciones');

Route::get('crear_carta_asignacion/{tipo}/{id}', 'CartaAsignacionesM@crear_carta_asignacion');
Route::resource('CartaAsignacionMaestro', 'CartaAsignacionesM');

////RUTAS DE Programa Extendido
Route::resource('PrograExtendido','ProgramaExtendidos');
Route::resource('PrograUnidad','PSEunidades');

Route::get('crear_programa_extendido/{tipo}/{id}', 'ProgramaExtendidosAd@crear_programa_extendido');
Route::resource('ProgramaExtendidoAdmin', 'ProgramaExtendidosAd');

//RUTAS DE CALNEDARIO DE EXAMENES
Route::resource('CalendarioExamenes','CalendarioExamenes');
Route::get('crear_calendario_examenes/{tipo}/{id}', 'CalendarioExamenesM@crear_calendario_examenes');
Route::resource('CalendarioExamenesMaestro', 'CalendarioExamenesM');

Route::get('crear_calendario_examenes/{tipo}/{id}', 'CalendarioExamenesAlu@crear_calendario_examenes');
Route::resource('CalendarioExamenesAlumno', 'CalendarioExamenesAlu');

//RUTAS DE LISTA DE ALUMNOS
Route::resource('ListaAlumnos','ListaAlumnos');

Route::get('crear_lista_alumnos/{tipo}/{id}', 'ListaAlumnosM@crear_lista_alumnos');
Route::resource('ListaAlumnosMaestro', 'ListaAlumnosM');
//

////RUTAS DE Programa Sintetizado
Route::resource('PrograSintetizado','ProgramaSintetizados');

//Rutas de Boleta
Route::resource('Boleta','Boletas');

//HORARIO DE CLASES
Route::resource('Horario','HorarioClases');

Route::resource('HorarioMaestro','HorarioClasesM');

Route::resource('HorarioAlumno','HorarioClasesAlu');

//Route::get('PrograUnidad/{id}', 'ProgramaExtendidos@editUnidad');
//Route::put('PrograUnidad/', 'ProgramaExtendidos@updateUnidad');
//Route::post('PrograExtendido/', 'ProgramaExtendidos@storeUnidad');
//

Route::auth();

Route::get('/home', 'HomeController@index');
