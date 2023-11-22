<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/product_detail', function () {
    return view('user.product_detail');
});

Route::get('/checkout', function () {
    return view('user.checkout');
});

Route::get('/cart', function () {
    return view('user.cart');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/products', function () {
    return view('user.product');
});


//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/product', function () {
        return view('admin.product');
    });

    Route::get('/addproduct', function () {
        return view('admin.addproduct');
    });

    Route::get('/account', function () {
        return view('admin.account');
    });

    Route::get('/addaccount', function () {
        return view('admin.addaccount');
    });
});
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::get('/signup', [UserController::class, 'showSignup'])->name('signup');
Route::post('/loginPost', [UserController::class, 'login']);
Route::post('/signupPost', [UserController::class, 'signup']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class,'showLogin'])-> name('login');
Route::get('/signup', [UserController::class,'showSignup'])->name('signup');
Route::post('/loginPost', [UserController::class, 'login']);
Route::post('/signupPost', [UserController::class,'signup']);
Route::get('/logout', [UserController::class,'logout']);
