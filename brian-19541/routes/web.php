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
Route::get('category/nuevo', 'categoryController@create');
Route::post('category/guardar', 'categoryController@store');
Route::resource('category', 'categoryController');
Route::resource('gender', 'GenderController');
Route::get('gender/nuevo', 'GenderController@create');
Route::post('gender/guardar', 'GenderController@store');
Route::resource('departament', 'DepartamentController');
Route::get('depatament/nuevo', 'GenderController@create');
Route::post('departament/guardar', 'GenderController@store');
Route::resource('client', 'ClientController');

