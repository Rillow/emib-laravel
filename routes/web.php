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

Route::get('/testes', 'SiteController@index');

Route::get('/filmes', 'FilmeController@index');

Route::get('/filmes/create', 'FilmeController@create');
Route::post('/filmes/create', 'FilmeController@save');




