<?php

use App\Http\Controllers\ShippingInformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', 'App\Http\Controllers\ProductController@index');

Route::get('/account', function () {
  return view('account');
})->middleware(['auth', 'userType']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.users')->middleware(['auth', 'admin']);
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy_user'])->name('admin.delete')->middleware(['auth', 'admin']);
Route::get('/admin/getUsers', [AdminController::class, 'getUsers'])->middleware(['auth', 'admin']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart');

Route::post('/add-product', 'App\Http\Controllers\CartController@addToCart')->name('add-to-cart');

Route::get('/products', 'App\Http\Controllers\ProductController@loadProducts');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('/checkout/create-order', 'App\Livewire\Checkout@createOrder')->name('create-order');

Route::get('/login', function () {
    return view('login');
})->middleware('userLogged');

Route::get('/product/{slug}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/signup', function () {
    return view('signup');
})->middleware('userLogged');

Route::get('/size_guide', function () {
    return view('size_guide');
});

Route::get('/terms', function () {
    return view('terms_conditions');
});

Route::get('/404', function() {
    abort(404);
});

Route::get('/search', 'App\Http\Controllers\ProductController@search')->name('search');

Route::post("/register", [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/account', [UserController::class, 'update']);
Route::post('/account', [ShippingInformationController::class, 'update']);
