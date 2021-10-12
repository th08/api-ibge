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

Route::get('/', ['as'=>'home', 'uses'=>'ClienteController@index']);
Route::get('/adicionar', ['as'=>'adicionar', 'uses'=>'ClienteController@adicionar']);
Route::post('/adicionar/salvar', ['as'=>'salvar', 'uses'=>'ClienteController@salvar']);
Route::get('/adicionar/editar/{id}', ['as'=>'editar', 'uses'=>'ClienteController@editar']);
Route::post('/adicionar/atualizar/{id}', ['as'=>'atualizar', 'uses'=>'ClienteController@atualizar']);
Route::get('/deletar/{id}', ['as'=>'deletar', 'uses'=>'ClienteController@deletar']);
