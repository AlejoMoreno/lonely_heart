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

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/registrar', function () {
    return view('register');
});
Route::post('/registrar', 'Controller@register');
Route::post('/logueo', 'Controller@login');
Route::post('/save_file', 'Controller@save_file');

Route::get('/selected/insert',function(){
    return view('selected.insert');
});

Route::get('/selected/index',function(){
    return view('selected.index');
});

Route::get('/filtroMale', function () {
    return view('filtroMale');
});
Route::get('/filtroFemale', function () {
    return view('filtroFemale');
});
Route::get('/filtroFemalemale', function () {
    return view('filtroFemalemale');
});
Route::get('/exit', function () {
    return view('salir');
});
Route::get('/my_profile', function () {
    return view('my_profile');
});

Route::get('/mensajes/{id}', 'Controller@chat');
Route::post('/mensajes', 'Controller@storeChat');

Route::get('/perfil/{id}', 'Controller@perfil');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/mensajes', function () {
    return view('mensajes');
});
