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


use App\Http\Controllers\dataMahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/list-mahasiswa', [dataMahasiswaController::class, 'index']); */

Route::resource('mahasiswa', dataMahasiswaController::class);
Route::get('/mahasiswa/create', [dataMahasiswaController::class, 'create']);
Route::post('/mahasiswa/kirim', [dataMahasiswaController::class, 'tambahMahasiswa']);
Route::get('/mahasiswa/{id}/edit', 'dataMahasiswaController@edit');
Route::post('/mahasiswa/{id}/update', [dataMahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
