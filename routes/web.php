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

Route::get('/ciclos', 'CycleController@index')->name('ciclos');
Route::resource('Cycle', 'CycleController');

Route::get('/modulos', 'ModuleController@index')->name('modulo');
Route::resource('Module', 'ModuleController');

Route::get('/ce', 'CeController@index')->name('ce');
Route::resource('Ce', 'CeController');

Route::get('/ra', 'RaController@index')->name('ra');
Route::resource('Ra', 'RaController');

Route::get('/tarea', 'TaskController@index')->name('tarea');
Route::resource('Task', 'TaskController');

