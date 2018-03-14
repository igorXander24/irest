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
/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('autentication/login');
});

/*
Lo de aqui es equivalente
Route::get('/control_panel', function() {
    return view('main');
});
a lo siguiente
*/
Route::view('/control_panel', 'main');

Route::view('/testing', 'testing');