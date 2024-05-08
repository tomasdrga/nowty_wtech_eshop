<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ProductController@index');

Route::get('/account', function () {
    return view('account');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products', 'App\Http\Controllers\ProductController@loadProducts');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product/{slug}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/size_guide', function () {
    return view('size_guide');
});

Route::get('/terms', function () {
    return view('terms_conditions');
});

Route::get('/404', function() {
    abort(404);
});
