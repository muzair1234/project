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

Route::get('/pag1', function () {
    return view('pag1');
});
 
 Route::get('/pag2', function () {
    return view('pag2');
});

 Route::get('/AdminPage', function () {
    return view('AdminPage');
});