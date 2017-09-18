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

Route::resource('administrador','AdministradorController');
Route::resource('estagiario','EstagiarioController');
Route::resource('estagio','EstagioController');
Route::resource('supervisor','SupervisorController');
Route::resource('orientador','OrientadorController');
Route::resource('empresa','EmpresaController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('administrador/login_administrador','AdministradorController@login')-> name('administrador.login');
Route::get('administrador/cadastro_administrador','AdministradorController@create')-> name('administrador.create');
