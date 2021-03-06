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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::post('/patient', 'PatientController@store');

Route::post('/show', 'PatientController@show');

Route::get('/edit', 'PatientController@edit');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/info', 'InformationController@index')->name('info');

Route::resource('patients', 'PatientController');




