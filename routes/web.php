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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {

  Route::resource('report', 'ReportController');


  Route::resource('user', 'UserController');
  Route::get('user/{id}/edituname','UserController@editUsername');
  Route::get('user/{id}/uname','UserController@updateUsername');
  Route::get('user/eval','UserController@storeReport');

  Route::resource('report', 'ReportController');




});
