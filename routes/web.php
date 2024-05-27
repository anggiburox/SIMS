<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\BarangControllerAdmin;
use App\Http\Controllers\ProfileControllerAdmin;

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
    return view('/pages/auth/login', [Auth::class, 'index']);
});


    //route barang
    Route::get('/admin/barang/', [BarangControllerAdmin::class, 'index']);
    Route::get('/admin/barang/tambah', [BarangControllerAdmin::class, 'tambah']);
    Route::post('/admin/barang/store', [BarangControllerAdmin::class, 'store']);
    Route::get('/admin/barang/edit/{id}',[BarangControllerAdmin::class, 'edit']);
    Route::post('/admin/barang/update',[BarangControllerAdmin::class, 'update']);
    Route::get('/admin/barang/hapus/{id}',[BarangControllerAdmin::class, 'hapus']);


    //route profile
    Route::get('/admin/profil/', [ProfileControllerAdmin::class, 'index']);
    Route::get('/admin/profil/edit/{id}',[ProfileControllerAdmin::class, 'edit']);
    Route::post('/admin/profil/update',[ProfileControllerAdmin::class, 'update']);

