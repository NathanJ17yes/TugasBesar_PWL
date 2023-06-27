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

use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UserController;


Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/prodi', [ProdiController::class,'index'])->name('prodiList');
    Route::get('/matkul', [MatkulController::class,'index'])->name('matkulList');
    Route::get('/matkul/create',[MatkulController::class,'create'])->name('createMatkul');
    Route::post('/matkul/create',[MatkulController::class,'create'])->name('storeMatkul');
    Route::get('/Mahasiswa',[UserController::class,'index'])->name('Mahasiswa')->middleware('Mahasiswa');
    Route::get('/Prodi IF',[UserController::class,'Prodi_IF'])->name('Prodi_IF')->middleware('IF');
    Route::get('/Prodi SI',[UserController::class,'Prodi_SI'])->name('Prodi_SI')->middleware('SI');
    Route::get('/ruang', [RuanganController::class,'index'])->name('ruanganList');
    Route::get('/ruang/create',[RuanganController::class,'create'])->name('createRuangan');
    Route::post('/ruang/create',[RuanganController::class,'store'])->name('storeRuangan');
    Route::get('/ruang/delete/{ruangan}',[RuanganController::class,'destroy'])->name('deleteRuangan');
});




