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

Route::get('/product', function () {
    return view('user.product');
});

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/signup', function () {
    return redirect(route('home'));
});
Route::get('/admin', function () {
    return view('auth.admin-home');
});
Route::post('/loginPost', [UserController::class, 'login']);
Route::post('/signupPost', [UserController::class,'signup']);
Route::get('/logout', [UserController::class,'logout']);
