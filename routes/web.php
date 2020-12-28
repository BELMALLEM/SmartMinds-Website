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

Route::get('/formations', 'FormationsController@index');

Route::get('/about', 'AboutController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/inscrireFormation', 'InscrireFormationController@index');

Route::post('/inscrireFormation', ['uses'=>'InscrireFormationController@store',
                                   'as'=>'inscrireFormation.store']);

Route::get('/descriptionFormation', 'DescriptionFormationController@index');
  