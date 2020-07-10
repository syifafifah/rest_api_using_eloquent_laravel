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

Route::get('/menus', 'MenusController@index');
Route::get('/menus/{id}', 'MenusController@show');
Route::post('/menus/store', 'MenusController@store');
Route::post('/menus/update/{id}', 'MenusController@update');
Route::post('/menus/delete/{id}', 'MenusController@destroy');
