<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//RESEP
Route::get('/listresep', 'App\Http\Controllers\ResepController@viewlistresep')->middleware('auth')->middleware('CheckRole:pengguna');

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


//TEMPAT ROUTE
Route::get('/listtempatadmin', 'App\Http\Controllers\TempatController@viewlisttempatadmin')->name('listtempatadmin');
Route::get('/listtempatpengguna', 'App\Http\Controllers\TempatController@viewlisttempatpengguna')->name('listtempatpengguna');
Route::get('/tambahtempat', 'App\Http\Controllers\TempatController@tambahtempat');
Route::post('/tambahtempat/store','App\Http\Controllers\TempatController@store');
Route::get('detailTempat/{id}', [App\Http\Controllers\TempatController::class, 'viewdetailtempat'])->name('detailTempat')->middleware('auth')->middleware('CheckRole:pengguna,admin');
Route::get('editTempat/{id}', [App\Http\Controllers\TempatController:: class,'viewedittempat'])->name('editTempat');
Route::patch('editTempat/updatetempat/{id}', [App\Http\Controllers\TempatController::class, 'update'])->name('updateTempat');
Route::delete('hapustempat/{id}', [App\Http\Controllers\TempatController::class, 'hapusTempat'])->name('hapusTempat');

//ARTIKEL ROUTE
Route::get('/listartikeladmin', 'App\Http\Controllers\ArtikelController@viewlistartikeladmin')->name('listartikeladmin');
Route::get('/listartikelpengguna', 'App\Http\Controllers\ArtikelController@viewlistartikelpengguna')->name('listartikelpengguna');
Route::get('/tambahartikel', 'App\Http\Controllers\ArtikelController@tambahartikel');
Route::post('/tambahartikel/store','App\Http\Controllers\ArtikelController@store');
Route::get('detailartikeladmin/{id}', [App\Http\Controllers\ArtikelController::class, 'viewdetailartikel'])->name('detailArtikel');
Route::get('detailartikelpengguna/{id}', [App\Http\Controllers\ArtikelController::class, 'viewdetailartikelpengguna'])->name('detailArtikelPengguna');
Route::get('editartikel/{id}', [App\Http\Controllers\ArtikelController:: class,'vieweditartikel'])->name('editArtikel');
Route::patch('editartikel/updateartikel/{id}', [App\Http\Controllers\ArtikelController::class, 'update'])->name('updateArtikel');
Route::delete('hapusartikel/{id}', [App\Http\Controllers\ArtikelController::class, 'hapusArtikel'])->name('hapusArtikel');


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

