<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'createAdmin']);


Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    // Keranjang
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add')->middleware('flash');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/cart/count', [CartController::class, 'count'])->name('cart.count');
    // Produk
    Route::get('/produk', [produkController::class, 'indexProduk'])->name('produks.indexProduk');
    Route::get('/produks', [produkController::class, 'index'])->name('produks.index');
    Route::get('/produks/create', [produkController::class, 'create'])->name('produks.create');
    Route::post('/produks', [produkController::class, 'store'])->name('produks.store');
    Route::get('/produks/{produk}/edit', [produkController::class, 'edit'])->name('produks.edit');
    Route::put('/produks/{produk}', [produkController::class, 'update'])->name('produks.update');
    Route::delete('/produks/{produk}', [produkController::class, 'destroy'])->name('produks.destroy');

});
