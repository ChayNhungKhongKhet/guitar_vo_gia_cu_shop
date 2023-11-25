<?php

use App\Http\Controllers\ProductController;
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
Route::get('/product', [ProductController::class, 'show'])->name('product.show') ;
// Route::get('/product', function () {
//     return view('user.product');
// });

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'show'])->name('admin.show');
    
    Route::get('/product', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');

    Route::get('/account', [UserController::class, 'index'])->name('account.index')->middleware('auth');
    Route::get('/account/create', [UserController::class, 'create'])->name('account.create')->middleware('auth');
    Route::post('/account', [UserController::class, 'store'])->name('account.store')->middleware('auth');
    Route::get('/account/edit/{id}', [UserController::class, 'edit'])->name('account.edit')->middleware('auth');
    Route::put('/account/update/{id}', [UserController::class, 'update'])->name('account.update')->middleware('auth');
    Route::get('/account/delete/{id}', [UserController::class, 'destroy'])->name('account.destroy')->middleware('auth');
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

Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('profile.change-password')->middleware('auth');
Route::post('/change-password', [UserController::class, 'changePassword'])->name('profile.update-password')->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit_profile')->middleware('auth');
Route::put('/profile/update',[UserController::class, 'updateProfile'])->name('profile.update_profile')->middleware('auth');


