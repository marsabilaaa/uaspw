<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
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
//hotel
Route::put('/hotel/{hotel_id}', [HotelController::class, 'update'])->name('hotel.update');
Route::get('/hotel/{hotel_id}/edit', [HotelController::class, 'edit'])->name('hotel.edit');
Route::get('/hotel/create', [HotelController::class, 'create'])->name('hotel.create');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/{hotel_id}', [HotelController::class, 'show'])->name('hotel.show');
Route::post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');
Route::delete('/hotel/{hotel_id}', [HotelController::class, 'destroy'])->name('hotel.destroy');

//kamar
Route::put('/kamar/{kamar_id}', [KamarController::class, 'update'])->name('kamar.update');
Route::get('/kamar/{kamar_id}/edit', [KamarController::class, 'edit'])->name('kamar.edit');
Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::get('/kamar/{kamar_id}', [KamarController::class, 'show'])->name('kamar.show');
Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
Route::delete('/kamar/{kamar_id}', [KamarController::class, 'destroy'])->name('kamar.destroy');

//tamu
Route::get('/tamu', [HotelController::class, 'index'])->name('tamu.index');
//reservasi
Route::get('/reservasi', [HotelController::class, 'index'])->name('reservasi.index');

//login

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
