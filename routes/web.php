<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CUSTOMER PAGES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('customer.home');
})->name('home');

Route::get('/products', function () {
    return view('customer.products');
})->name('products');

Route::get('/cart', function () {
    return view('customer.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('customer.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| ADMIN PAGES
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/products', function () {
    return view('admin.products');
})->name('admin.products');

Route::get('/admin/orders', function () {
    return view('admin.orders');
})->name('admin.orders');

Route::get('/admin/inventory', function () {
    return view('admin.inventory');
})->name('admin.inventory');