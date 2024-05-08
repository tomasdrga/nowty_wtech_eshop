<?php

use App\Http\Controllers\ShippingInformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});

Route::get('/account', function () {
  return view('account');
})->middleware(['auth', 'userType']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.users')->middleware(['auth', 'admin']);
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy_user'])->name('admin.delete')->middleware(['auth', 'admin']);
Route::get('/admin/getUsers', [AdminController::class, 'getUsers'])->middleware(['auth', 'admin']);

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
})->middleware('userLogged');

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/signup', function () {
    return view('signup');
})->middleware('userLogged');

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
Route::post('/account', [ShippingInformationController::class, 'update']);

