<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/', [LoginController::class,'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah',[BarangController::class,'create']);
Route::post('/barang/simpan',[BarangController::class,'store']);
Route::get('/barang/{id}/edit',[BarangController::class,'show']);
Route::post('/barang/{id}/update',[BarangController::class,'update']);
Route::get('/barang/{id}/hapus',[BarangController::class,'destroy']);

Route::get('/suplier', [SuplierController::class,'index']);
Route::get('/suplier/tambah',[SuplierController::class,'create']);
Route::post('/suplier/simpan',[SuplierController::class,'store']);
Route::get('/suplier/{id}/edit',[SuplierController::class,'show']);
Route::post('/suplier/{id}/update',[SuplierController::class,'update']);
Route::get('/suplier/{id}/hapus',[SuplierController::class,'destroy']);

Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah',[TransaksiController::class,'create']);
Route::post('/transaksi/simpan',[TransaksiController::class,'store']);
Route::get('/transaksi/{id}/edit',[TransaksiController::class,'show']);
Route::post('/transaksi/{id}/update',[TransaksiController::class,'update']);
Route::get('/transaksi/{id}/hapus',[TransaksiController::class,'destroy']);
Route::post('/transaksi/cetak', [TransaksiController::class, 'cetak']);
Route::get('/transaksi/struk/{id}', [TransaksiController::class, 'struk']);

Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'show']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);
