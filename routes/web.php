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
Route::get('/ruang', [RuanganController::class,'index'])->name('ruanganList');
Route::get('/matkul', [MatkulController::class,'index'])->name('matkulList');
Route::get('/matkul/create',[MatkulController::class,'create'])->name('createMatkul');
Route::post('/matkul/create',[MatkulController::class,'create'])->name('storeMatkul');
