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

    Route::get('/account', [UserController::class, 'index'])->name('account.index');
    Route::get('/account/create', [UserController::class, 'create'])->name('account.create');
    Route::post('/account', [UserController::class, 'store'])->name('account.store');
    Route::get('/account/edit/{id}', [UserController::class, 'edit'])->name('account.edit');
    Route::put('/account/update/{id}', [UserController::class, 'update'])->name('account.update');
    Route::get('/account/delete/{id}', [UserController::class, 'destroy'])->name('account.destroy');
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

Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('profile.change-password')->middleware('auth');
Route::post('/change-password', [UserController::class, 'changePassword'])->name('profile.update-password')->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit_profile')->middleware('auth');
Route::put('/profile/update',[UserController::class, 'update'])->name('profile.edit_profile')->middleware('auth');


