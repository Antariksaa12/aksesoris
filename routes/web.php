<?php
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AdminPurchaseController;
use App\Http\Controllers\FeedbackController;


Route::get('/', [AuthController::class, 'createAdmin']);

// Auth Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Welcome 
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

// Admin 
Route::group(['middleware' => ['auth', 'is_admin']], function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [ProdukController::class, 'adminDashboard'])->name('admin.dashboard');

    // Produk Manajemen
    Route::get('/admin/produks', [ProdukController::class, 'index'])->name('admin.produks.index');
    Route::get('/admin/produks/create', [ProdukController::class, 'create'])->name('admin.produks.create');
    Route::post('/admin/produks', [ProdukController::class, 'store'])->name('admin.produks.store');
    Route::get('/admin/produks/{produk}/edit', [ProdukController::class, 'edit'])->name('admin.produks.edit');
    Route::put('/admin/produks/{produk}', [ProdukController::class, 'update'])->name('admin.produks.update');
    Route::delete('/admin/produks/{produk}', [ProdukController::class, 'destroy'])->name('admin.produks.destroy');

    // Purchases
    Route::get('/admin/purchases', [AdminPurchaseController::class, 'index'])->name('admin.purchases.index');

    // Feedback
    Route::get('admin/feedback', [FeedbackController::class, 'index'])->middleware('auth');

});

// Guest
Route::group([], function () {
    
    // Keranjang Manajemen
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add')->middleware('flash');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/cart/checkout', [CartController::class, 'showCheckout'])->name('cart.showCheckout');
    Route::get('/cart/count', [CartController::class, 'count'])->name('cart.count');

    // List Produk
    Route::get('/produk', [ProdukController::class, 'guest'])->name('produk');

    // Purchase 
    Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchase.store');
    Route::post('/purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');

    // Feedback
    Route::post('feedback', [FeedbackController::class, 'store'])->name('store');
});
