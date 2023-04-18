<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Product;

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

Route::fallback(function () {
    return redirect('/');
});

Route::get('/', [ProductController::class, 'homepage'])->name('homepage');

//Route::get('/all-products', [ProductController::class, 'index']);

Route::get('/all-products/{category}', [ProductController::class, 'filter_category']);

Route::get('/all-products/page/{page}', [ProductController::class, 'show_page']);

Route::get('/all-products/price/{price}', [ProductController::class, 'filter_price']);

Route::get('/sales', [ProductController::class, 'filter_sales']);

Route::get('/search/{search}', [ProductController::class, 'search']);

Route::get('/selected-product/{product_id}', [ProductController::class, 'select']);

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/business-conditions', function() {
    return view('business_conditions');
});

Route::get('/complaints', function() {
    return view('complaints');
});

Route::get('/cart', [CartController::class, 'getCart'])->name('getCart');

Route::get('/cartAdd/{product_id}', [CartController::class, 'cartAdd'])->name('cartAdd');

Route::get('/carDelete/{product_id}', [CartController::class, 'cartDelete'])->name('cartDelete');

Route::get('/cart-payment', function() {
    return view('cart_payment');
});

Route::get('/cart-address', function() {
    return view('cart_address');
});

Route::get('/login', [LoginRegisterController::class, 'getLogin'])->name('getLogin');

Route::get('/register', [LoginRegisterController::class, 'getRegister'])->name('getRegister');

Route::get('/forgotten-password', function() {
    return view('forgotten_password');
});

Route::get('/create-product', function() {
    return view('create_product');
});

Route::get('/edit-product', function() {
    return view('edit_product');
});

Route::get('/delete-product', function() {
    return view('delete_product');
});