<?php
use App\Http\Controllers\UserController;
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
Route::get('/login', [UserController::class,'showLogin'])-> name('login');
Route::get('/signup', [UserController::class,'showSignup'])->name('signup');
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::post('/loginPost', [UserController::class, 'login']);
Route::post('/signupPost', [UserController::class,'signup']);
Route::get('/logout', [UserController::class,'logout']);
