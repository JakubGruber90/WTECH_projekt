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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function() {
    return view('homepage');
});

Route::get('/all-products', function() {
    return view('all_products');
});

Route::get('/selected-product', function() {
    return view('selected_product');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/business-conditions', function() {
    return view('business_conditions');
});

Route::get('/complaint', function() {
    return view('complaints');
});

Route::get('/cart', function() {
    return view('cart');
});

Route::get('/cart-payment', function() {
    return view('cart_payment');
});

Route::get('/cart-address', function() {
    return view('cart_address');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('registration');
});

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