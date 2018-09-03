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
});

Route::get('/name/{name}/{name2}', function($name,$lastname) {
    return 'Hola soy'.$name.$lastname;
});

Route::get('prueba/{name}/{apellido}', 'PruebaController@prueba');

Route::get('/mi_primer_ruta', function() {
    return 'Hello World, esa es';
});

Route::resource('trainers', 'TrainerController');
