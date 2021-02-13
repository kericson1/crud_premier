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

Route::get('home', 'StudentController@home');

Route::get('create', 'StudentController@create');
Route::match(['get', 'post'], 'store', 'StudentController@store');
Route::post('update/{id}', 'StudentController@update')->name('update');
Route::get('show', 'StudentController@show');
Route::get('edit/{id}', 'StudentController@edit')->name('edit');
Route::get('supprimer/{id}', 'StudentController@destroy')->name('delete');
