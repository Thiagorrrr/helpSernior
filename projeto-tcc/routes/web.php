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

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);
Route::get('/cadastro/parceiro', ['uses' => 'Controller@cadastrarParceiro']);
Route::get('/cadastro/cliente', ['uses' => 'Controller@cadastrarCliente']);
Route::get('/buscar', ['uses' => 'Controller@buscar']);
Route::get('/buscar/casa', ['uses' => 'Controller@buscarCasa']);
Route::get('/buscar/cuidador', ['uses' => 'Controller@buscarCuidador']);

Route::get('/usuario/{name}/{id}', ['uses' => 'Controller@userDescription']);


// routes to users
Route::get('/login', ['uses' => 'Controller@fazerLogin']);
Route::post('/login', ['as'=> 'user.login' ,'uses' => 'DashboardController@auth']);
Route::get('/dashboard', ['as'=> 'user.dashboard' ,'uses' => 'DashboardController@index']);




Route::resource('user', 'UsersController');


