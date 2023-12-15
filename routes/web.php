<?php

use App\Http\Controllers\loginController;
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
    // return view('Log.Login.login');
    return view('welcome');
});

Route::get('/login',[loginController::class,'login'])->name('Login');
Route::get('/landingpage',[loginController::class,'landingpage'])->name('landingpage');