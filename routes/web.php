<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('auth/login');
});
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

//Route Mahasiswa
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@tampil');
Route::get('/mahasiswa/tambah', 'App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'App\Http\Controllers\MahasiswaController@edit');
Route::put('/mahasiswa/update/{id}', 'App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/delete/{id}', 'App\Http\Controllers\MahasiswaController@delete');

//Dosen
Route::get('/dosen','App\Http\Controllers\DosenController@tampil');
Route::get('/dosen/tambah','App\Http\Controllers\DosenController@tambah');
Route::post('/dosen/store','App\Http\Controllers\DosenController@store');
Route::get('/dosen/edit/{id}', 'App\Http\Controllers\DosenController@edit');
Route::put('/dosen/update/{id}', 'App\Http\Controllers\DosenController@update');
Route::get('/dosen/delete/{id}', 'App\Http\Controllers\DosenController@delete');

