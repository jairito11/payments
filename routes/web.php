<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pagos', 'PagosController@index');
Route::post('/pagos/create', 'PagosController@store');
Route::get('/pagos/{id}/delete', 'PagosController@delete');
Route::get('/pagos/{id}/edit', 'PagosController@edit');
Route::post('/pagos/{id}/edit', 'PagosController@update');
