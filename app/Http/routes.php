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
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('ce', 'CicloEscolares');
Route::resource('sem','Semestres');
<<<<<<< HEAD
Route::resource('gru','Grupos');
=======
>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
