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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('/Usuario', 'UserController@index')->name('usuario');
Route::resource('User','UserController');

Route::get('/empresas', 'EnterpriseController@index')->name('empresa');
Route::resource('Enterprise', 'EnterpriseController');

Route::get('/Cycle', 'CycleController@index')->name('cycle');
Route::resource('Cycles', 'CyclesController');
