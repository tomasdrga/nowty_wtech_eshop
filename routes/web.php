<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/shipping', function () {
    return view('shipping');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/size_guide', function () {
    return view('size_guide');
});

Route::get('/terms_conditions', function () {
    return view('terms_conditions');
});
