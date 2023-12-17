<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\datamobilController;
use App\Http\Controllers\datapengembalianController;
use App\Http\Controllers\datasewaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\riwayattransaksiController;
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

// Login 
Route::get('/login',[loginController::class,'sesi'])->name('Login');


// Admin 
Route::get('/SignIn',[loginController::class,'signin'])->name('Signin');
Route::get('/DashboardAdmin',[dashboardController::class,'view'])->name('dashboard');
Route::get('/DataMobil',[datamobilController::class,'datamobil'])->name('datamobil');
Route::get('/DataSewa',[datasewaController::class,'datasewa'])->name('datasewa');
Route::get('/DataPengembalian',[datapengembalianController::class,'datapengembalian'])->name('datapengembalian');
Route::get('/RiwayatTransaksi',[riwayattransaksiController::class,'riwayattransaksi'])->name('riwayattransaksi');

// Customer 
Route::get('/step1',[customerController::class,'step1'])->name('step1');
