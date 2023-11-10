<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('user.home');
});

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
