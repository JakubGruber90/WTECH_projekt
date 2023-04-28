<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
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
    //return redirect('/');
});

Route::get('/', [ProductController::class, 'homepage'])->name('homepage');

Route::get('/all-products/{category}', [ProductController::class, 'filter_category']);

Route::get('/all-products/page/{page}', [ProductController::class, 'show_page'])->name('page');

Route::get('/all-products/price/{price}', [ProductController::class, 'filter_price']);

Route::get('/all-products/price_order/{order}', [ProductController::class, 'order_by_price']);

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

Route::get('/cartAuth', [CartController::class, 'getCartAuth'])->name('getCartAuth');

Route::get('/cartAdd/{product_id}', [CartController::class, 'cartAdd'])->name('cartAdd');

Route::get('/cartAddAuth/{product_id}', [CartController::class, 'cartAddAuth'])->name('cartAddAuth');

Route::get('/cartDelete/{product_id}', [CartController::class, 'cartDelete'])->name('cartDelete');

Route::get('/cartDeleteAuth/{product_id}', [CartController::class, 'cartDeleteAuth'])->name('cartDeleteAuth');

Route::get('/cart-payment', function() {
    if (!empty(Session::get('cart')->items)) return view('cart_payment');
    else return view('cart');
})->name('cart-payment');

Route::get('/cart-address', function() {
    return view('cart_address');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/loginCheck', [LoginController::class, 'loginCheck'])->name('loginCheck');

Route::get('/register', function() {
    return view('registration');
});

Route::post('/registerCheck', [RegisterController::class, 'registerCheck'])->name('registerCheck');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/profile', [ProfileController::class, 'showProfile'])->name('showProfile');

Route::post('/editLoginInformation', [ProfileController::class, 'editLoginInfo'])->name('editLoginInfo');

Route::post('/editshippingInformation', [ProfileController::class, 'editShippingInfo'])->name('editShippingInfo');

Route::post('/saveNewLoginInfo', [ProfileController::class, 'editLogin'])->name('editLogin');

Route::post('/saveNewShippingInfo', [ProfileController::class, 'editShipping'])->name('editShipping');

Route::get('/forgotten-password', function() {
    return view('forgotten_password');
});

Route::get('/admin', [AdminController::class, 'product_menu'])->name('admin');

Route::get('/admin/create-product', function() {
    return view('create_product');
});
Route::post('/admin/create-product/confirm', [AdminController::class, 'create_product'])->name('createProduct');

Route::get('/admin/edit-product', function() {
    return view('edit_product');
});
Route::post('/admin/edit-product/confirm', [AdminController::class, 'edit_product'])->name('editProduct');

Route::get('/admin/delete-product', function() {
    return view('delete_product');
});
Route::get('/admin/delete-product/{product_id}', [AdminController::class, 'delete_product'])->name('deleteProduct');
