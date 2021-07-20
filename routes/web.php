<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

//RESEP
Route::get('/', 'App\Http\Controllers\ResepController@viewlistresep');
Route::get('/listresepadmin', 'App\Http\Controllers\ResepController@viewlistresepadmin');
Route::get('/listreseppengguna', 'App\Http\Controllers\ResepController@viewlistreseppengguna');
//Tambah resep
Route::post('/tambahresep/store','App\Http\Controllers\ResepController@store');
Route::get('/tambahresep', 'App\Http\Controllers\ResepController@tambahresep')->middleware('auth')->middleware('CheckRole:pengguna');
//detail resep
Route::get('detailResep/{id}', [App\Http\Controllers\ResepController::class, 'detailresep'])->name('detailResep');
Route::get('detailReseppengguna/{id}', [App\Http\Controllers\ResepController::class, 'detailreseppengguna'])->name('detailResepPengguna');
//edit resep
Route::get('detailresep/editResep/{id}', [App\Http\Controllers\ResepController:: class,'HalamanEditResep'])->name('EditResep')->middleware('auth')->middleware('CheckRole:pengguna');
//update dari edit
Route::patch('detailresep/editresep/updateresep/{id}', [App\Http\Controllers\ResepController::class, 'updateResep'])->name('updateResep')->middleware('auth')->middleware('CheckRole:pengguna');
//hapus resep
Route::delete('detailresep/hapusresep/{id}', [App\Http\Controllers\ResepController::class, 'hapusresep'])->name('hapusResep')->middleware('auth')->middleware('CheckRole:pengguna');
//search resep
Route::get('listresep/searchResep', [App\Http\Controllers\ResepController::class, 'searchResep'])->name('seacrhResep');


//TEMPAT ROUTE
Route::get('/listtempat', 'App\Http\Controllers\TempatController@viewlisttempat');
Route::get('/listtempatadmin', 'App\Http\Controllers\TempatController@viewlisttempatadmin');
Route::get('/tambahtempat', 'App\Http\Controllers\TempatController@tambahtempat')->middleware('auth')->middleware('CheckRole:admin');
Route::post('/tambahtempat/store','App\Http\Controllers\TempatController@store');
Route::get('detailTempat/{id}', [App\Http\Controllers\TempatController::class, 'viewdetailtempat'])->name('detailTempat');
Route::get('detailTempatAdmin/{id}', [App\Http\Controllers\TempatController::class, 'viewdetailtempatadmin'])->name('detailTempatAdmin');
Route::get('editTempat/{id}', [App\Http\Controllers\TempatController::class,'viewedittempat'])->name('editTempat')->middleware('auth')->middleware('CheckRole:admin');
Route::patch('editTempat/updatetempat/{id}', [App\Http\Controllers\TempatController::class, 'update'])->name('updateTempat');
Route::delete('hapustempat/{id}', [App\Http\Controllers\TempatController::class, 'hapusTempat'])->name('hapusTempat');

//ARTIKEL ROUTE
Route::get('/listartikel', 'App\Http\Controllers\ArtikelController@viewlistartikel');
Route::get('/listartikeladmin', 'App\Http\Controllers\ArtikelController@viewlistartikeladmin');
Route::get('/tambahartikel', 'App\Http\Controllers\ArtikelController@tambahartikel')->middleware('auth')->middleware('CheckRole:admin');
Route::post('/tambahartikel/store','App\Http\Controllers\ArtikelController@store');
Route::get('detailartikel/{id}', [App\Http\Controllers\ArtikelController::class, 'viewdetailartikel'])->name('detailArtikel');
Route::get('detailartikelAdmin/{id}', [App\Http\Controllers\ArtikelController::class, 'viewdetailartikeladmin'])->name('detailArtikelAdmin');
Route::get('editartikel/{id}', [App\Http\Controllers\ArtikelController:: class,'vieweditartikel'])->name('editArtikel')->middleware('auth')->middleware('CheckRole:admin');
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
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

