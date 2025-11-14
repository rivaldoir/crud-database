<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return redirect()->route('user.produk');
});

// =====================
// ROUTE USER
// =====================
Route::get('/produk', [MenuController::class, 'userProduk'])
    ->name('user.produk');

Route::get('/produk/{id}', [MenuController::class, 'userDetail'])
    ->name('user.detail');

// =====================
// CHECKOUT
// =====================
Route::get('/checkout/{id}', [MenuController::class, 'checkoutForm'])
    ->name('checkout.form');

Route::post('/checkout/process', [MenuController::class, 'checkoutProcess'])
    ->name('checkout.process');

Route::get('/checkout/1/selesai', function () {
    return view('user.selesai');
})->name('checkout.selesai');

// =====================
// ADMIN CRUD
// =====================
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::post('/menus/store', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{id}/update', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{id}/delete', [MenuController::class, 'destroy'])->name('menus.destroy');

// =====================
// API USER
// =====================
Route::get('/api/menus', [MenuController::class, 'apiMenus'])
    ->name('api.menus');
