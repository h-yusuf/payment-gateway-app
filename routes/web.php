<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Product Routes (CRUD)
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

// Payment Routes (Midtrans)
Route::middleware('auth')->group(function () {
    Route::get('/checkout/{id}', [PaymentController::class, 'checkout'])->name('checkout');
    Route::post('/payment/notification', [PaymentController::class, 'notificationHandler']);
});