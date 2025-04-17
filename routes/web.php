<?php

use App\Http\Controllers\detail_service;
use App\Http\Controllers\jenis_kendaraan;
use App\Http\Controllers\jenis_service;
use App\Http\Controllers\kendaraan as ControllersKendaraan;
use App\Http\Controllers\mekanik as ControllersMekanik;
use App\Http\Controllers\pemilik;
use App\Http\Controllers\service;
use App\Models\kendaraan;
use App\Models\mekanik;
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
    return view('template');
})->name('home');

Route::get('/detail-service',[detail_service::class,'index'])->name('detail-service.index');
Route::get('/detail-service/add',[detail_service::class,'create'])->name('detail-service.create');
Route::post('/detail-service/add',[detail_service::class,'store'])->name('detail-service.store');
Route::get('/detail-service/edit/{id}',[detail_service::class,'edit'])->name('detail-service.edit');
Route::post('/detail-service/edit/{id}',[detail_service::class,'update'])->name('detail-service.update');
Route::get('/detail-service/delete/{id}',[detail_service::class,'destroy'])->name('detail-service.delete');

Route::get('/jenis-service',[jenis_service::class,'index'])->name('jenis-service.index');
Route::get('/jenis-service/add',[jenis_service::class,'create'])->name('jenis-service.create');
Route::post('/jenis-service/add',[jenis_service::class,'store'])->name('jenis-service.store');
Route::get('/jenis-service/edit/{id}',[jenis_service::class,'edit'])->name('jenis-service.edit');
Route::post('/jenis-service/edit/{id}',[jenis_service::class,'update'])->name('jenis-service.update');
Route::get('/jenis-service/delete/{id}',[jenis_service::class,'destroy'])->name('jenis-service.delete');

Route::get('/jenis_kendaraan',[jenis_kendaraan::class,'index'])->name('jenis_kendaraan.index');
Route::get('/jenis_kendaraan/add',[jenis_kendaraan::class,'create'])->name('jenis_kendaraan.create');
Route::post('/jenis_kendaraan/add',[jenis_kendaraan::class,'store'])->name('jenis_kendaraan.store');
Route::get('/jenis_kendaraan/edit/{id}',[jenis_kendaraan::class,'edit'])->name('jenis_kendaraan.edit');
Route::post('/jenis_kendaraan/edit/{id}',[jenis_kendaraan::class,'update'])->name('jenis_kendaraan.update');
Route::get('/jenis_kendaraan/delete/{id}',[jenis_kendaraan::class,'destroy'])->name('jenis_kendaraan.delete');

Route::get('/kendaraan-',[ControllersKendaraan::class,'index'])->name('kendaraan-.index');
Route::get('/kendaraan-/add',[ControllersKendaraan::class,'create'])->name('kendaraan-.create');
Route::post('/kendaraan-/add',[ControllersKendaraan::class,'store'])->name('kendaraan-.store');
Route::get('/kendaraan-/edit/{id}',[ControllersKendaraan::class,'edit'])->name('kendaraan-.edit');
Route::post('/kendaraan-/edit/{id}',[ControllersKendaraan::class,'update'])->name('kendaraan-.update');
Route::get('/kendaraan-/delete/{id}',[ControllersKendaraan::class,'destroy'])->name('kendaraan-.delete');

Route::get('/mekanik-',[ControllersMekanik::class,'index'])->name('mekanik-.index');
Route::get('/mekanik-/add',[ControllersMekanik::class,'create'])->name('mekanik-.create');
Route::post('/mekanik-/add',[ControllersMekanik::class,'store'])->name('mekanik-.store');
Route::get('/mekanik-/edit/{id}',[ControllersMekanik::class,'edit'])->name('mekanik-.edit');
Route::post('/mekanik-/edit/{id}',[ControllersMekanik::class,'update'])->name('mekanik-.update');
Route::get('/mekanik-/delete/{id}',[ControllersMekanik::class,'destroy'])->name('mekanik-.delete');

Route::get('/pemilik-',[pemilik::class,'index'])->name('pemilik-.index');
Route::get('/pemilik-/add',[pemilik::class,'create'])->name('pemilik-.create');
Route::post('/pemilik-/add',[pemilik::class,'store'])->name('pemilik-.store');
Route::get('/pemilik-/edit/{id}',[pemilik::class,'edit'])->name('pemilik-.edit');
Route::post('/pemilik-/edit/{id}',[pemilik::class,'update'])->name('pemilik-.update');
Route::get('/pemilik-/delete/{id}',[pemilik::class,'destroy'])->name('pemilik-.delete');

Route::get('/service-',[service::class,'index'])->name('service-.index');
Route::get('/service-/add',[service::class,'create'])->name('service-.create');
Route::post('/service-/add',[service::class,'store'])->name('service-.store');
Route::get('/service-/edit/{id}',[service::class,'edit'])->name('service-.edit');
Route::post('/service-/edit/{id}',[service::class,'update'])->name('service-.update');
Route::get('/service-/delete/{id}',[service::class,'destroy'])->name('service-.delete');