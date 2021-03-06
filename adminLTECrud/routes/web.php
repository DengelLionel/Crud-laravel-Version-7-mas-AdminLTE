<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/mundo', function () {
    return view('Tema.crud');
});
 Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("/temas","TemaController");

/* Route::get("mostrarTema",function(){
    return view('tema.index');
})->name("mostrarTema"); */
