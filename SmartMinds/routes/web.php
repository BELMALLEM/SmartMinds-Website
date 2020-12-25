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
Route::get('/inscrire', function () {
    return view('inscrire');
});
Route::get('/formations', function () {
    return view('formations');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/inscrire', function () {
    return view('inscription');
});
/*Route::post('/inscrire', function () {
    /*$utilisateur = App\User::create([
        'email' => request('email'),
        'password' => bcrypt(request('password')),
    ]);
    return view('inscription');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
