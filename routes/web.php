<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/create', [SiswaController::class, 'create'])->name('create');
Route::post('/store', [SiswaController::class, 'store'])->name('store');
Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [SiswaController::class, 'update'])->name('update');