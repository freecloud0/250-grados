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
    return view('paginas/inicio');
    
});
Route::get('nosotros', function () {
    return view('paginas/nosotros');
    
});
Route::get('promociones', function () {
    return view('paginas/promociones');
    
});
Route::get('registro', function () {
    return view('paginas/registro');
    
});
Route::get('carta', function () {
    return view('paginas/carta');
    
});
Route::get('contactanos', function () {
    return view('paginas/contacto');
    
});
Route::get('trabajo', function () {
    return view('paginas/trabajo');
    
});
Route::get('reserva', function () {
    return view('paginas/reserva');
    
});
Route::get('nutricion', function () {
    return view('paginas/nutricion');
    
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
