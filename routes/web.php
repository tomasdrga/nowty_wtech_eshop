<?php

use App\Http\Controllers\ShippingInformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/account', function () {
  return view('account');
})->middleware('auth');

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

Route::post("/register", [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/account', [UserController::class, 'update']);
Route::post('/account', 'App\Http\Controllers\UserController@update');
Route::post('/account', [ShippingInformationController::class, 'update']);

