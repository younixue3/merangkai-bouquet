<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/product/{id}', [\App\Http\Controllers\Product\ProductController::class, 'show'])->name('product.show');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/payment/{id}', [\App\Http\Controllers\CartController::class, 'payment'])->name('payment');
Route::put('/payment/{id}/pay', [\App\Http\Controllers\CartController::class, 'pay'])->name('pay');
Route::post('order', [\App\Http\Controllers\Order\OrderController::class, 'store'])->name('order.store');
Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');
    Route::resource('/product', \App\Http\Controllers\Product\ProductController::class);
    Route::resource('/order', \App\Http\Controllers\Order\OrderController::class);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Auth::routes();
