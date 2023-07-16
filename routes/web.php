<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBukuController;

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

Route::get('/', [DashboarController::class, 'index'])->middleware('auth');


Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginCheck']);

Route::post('/add-pinjam', [PinjamController::class, 'store']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/add-siswa', [SiswaController::class, 'store']);
Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit']);
Route::post('/edit-siswa', [SiswaController::class, 'update']);
Route::get('/delete-siswa/{id}', [SiswaController::class, 'delete']);
Route::post('/delete-siswa', [SiswaController::class, 'destroy']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);
Route::post('/edit-buku', [BukuController::class, 'update']);
Route::post('/add-buku', [BukuController::class, 'create']);

Route::get('/delete-buku/{id}', [BukuController::class, 'delete']);
Route::post('/delete-buku', [BukuController::class, 'destroy']);

Route::get('/kategori', [KategoriBukuController::class, 'index']);
Route::post('/add-kategori', [KategoriBukuController::class, 'store']);
Route::get('/edit-kategori/{id}', [KategoriBukuController::class, 'edit']);
Route::post('/edit-kategori', [KategoriBukuController::class, 'update']);
Route::get('/delete-kategori/{id}', [KategoriBukuController::class, 'delete']);
Route::post('/delete-kategori', [KategoriBukuController::class, 'destroy']);

Route::get('/siswa', [SiswaController::class, 'index']);

Route::post('/logout', [UserController::class, 'logout']);