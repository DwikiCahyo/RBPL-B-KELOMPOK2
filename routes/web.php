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


Route::get('/listresep', 'App\Http\Controllers\ResepController@viewlistresep');
Route::post('/tambahresep/store','App\Http\Controllers\ResepController@store');
Route::get('/listtempatadmin', 'App\Http\Controllers\TempatController@viewlisttempatadmin');
Route::post('/tambahtempat/store','App\Http\Controllers\TempatController@store');
Route::post('/edittempat/update', 'App\Http\Controllers\ResepController@update');
Route::get('/resep/{id}', 'App\Http\Controllers\ResepController@detailresep');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('/tambahresep', 'App\Http\Controllers\ResepController@tambahresep');
    Route::get('/tambahtempat', 'App\Http\Controllers\TempatController@tambahtempat');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

