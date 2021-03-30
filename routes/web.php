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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/siswa')->name('siswa.')->group(function() {

    Route::get('/dashboard', [App\Http\Controllers\Siswa\SiswaController::class, 'dashboard'])->name('dashboard');

    Route::get('/', [App\Http\Controllers\Siswa\SiswaController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Siswa\SiswaController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Siswa\SiswaController::class, 'store'])->name('store');
    Route::get('/edit/{siswa}', [App\Http\Controllers\Siswa\SiswaController::class, 'edit'])->name('edit');
    Route::put('/update/{siswa}', [App\Http\Controllers\Siswa\SiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{siswa}', [App\Http\Controllers\Siswa\SiswaController::class, 'destroy'])->name('delete');
});