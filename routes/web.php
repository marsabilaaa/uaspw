<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/available', [ProductController::class, 'available'])->name('products.available');
Route::get('/products/unavailable', [ProductController::class, 'unavailable'])->name('products.unavailable');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/stock', [ProductController::class, 'editStock'])->name('products.stock');
Route::put('/products/{id}/stock', [ProductController::class, 'updateStock'])->name('products.updateStock');