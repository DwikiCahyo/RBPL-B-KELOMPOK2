<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//RESEP
Route::get('/listresep', 'App\Http\Controllers\ResepController@viewlistresep');
Route::post('/tambahresep/store','App\Http\Controllers\ResepController@store');
Route::get('/tambahresep', 'App\Http\Controllers\ResepController@tambahresep');
//detail
Route::get('detailResep/{id}', [App\Http\Controllers\ResepController::class, 'detailresep'])->name('detailResep');
//edit
Route::get('detailresep/editResep/{id}', [App\Http\Controllers\ResepController:: class,'HalamanEditResep'])->name('EditResep');
//update dari edit
Route::patch('detailresep/editresep/updateresep/{id}', [App\Http\Controllers\ResepController::class, 'updateResep'])->name('updateResep');
//hapus
Route::delete('detailresep/hapusresep/{id}', [App\Http\Controllers\ResepController::class, 'hapusresep'])->name('hapusResep');








Route::get('/listtempatadmin', 'App\Http\Controllers\TempatController@viewlisttempatadmin');
Route::get('/tempat/{id}', 'App\Http\Controllers\TempatController@read');
Route::post('/tambahtempat/store','App\Http\Controllers\TempatController@store');
Route::post('/edittempat/update', 'App\Http\Controllers\ResepController@update');

Route::get('/listartikeladmin', 'App\Http\Controllers\ArtikelController@viewlistartikeladmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('/tambahtempat', 'App\Http\Controllers\TempatController@tambahtempat');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

