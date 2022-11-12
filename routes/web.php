<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
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

// Route::get('/login-', function () {
//     return view('login');
// });

// Route::get('/registration', function () {
//     return view('Registration');
// });

Route::get('/homepage', function () {
    return view('/User/HomePage');
});

Route::get('/deposite', function () {
    return view('/User/Deposite');
});

Route::get('/withdraw', function () {
    return view('/User/Withdraw');
});

Route::get('/profile', function () {
    return view('/User/ProfilUser');
});

Route::get('/listmisi', function () {
    return view('/User/ListMisi');
});

Route::get('/change-password', function () {
    return view('/User/GantiKataSandi');
});

Route::get('/operator-homepage', function () {
    return view('/Operator/HomePageOperator');
});

Route::get('/operator-adspage', function () {
    return view('/Operator/AdsPage');
});

Route::get('/operator-listuser', function () {
    return view('/Operator/ListUserOperator');
});

Route::get('/operator-transaction', function () {
    return view('/Operator/TransactionOperator');
});

Route::get('/operator-profile', function () {
    return view('/Operator/ProfileOperator');
});

Route::get('/operator-change-password', function () {
    return view('/Operator/ChangePassOperator');
});

Route::get('/operator-addAds', function () {
    return view('/Operator/AddAdsPage');
});

Route::get('/operator-addDeposite', function () {
    return view('/Operator/AddDepositeOperator');
});

Route::get('/operator-addWithdraw', function () {
    return view('/Operator/AddWithdrawOperator');
});

Route::get('/operator-seeDeposite', function () {
    return view('/Operator/SeeDepositeOperator');
});

Route::get('/operator-seeWithdraw', function () {
    return view('/Operator/SeeWithdrawOperator');
});

Route::get('/admin-homepage', function () {
    return view('/Admin/HomePageAdmin');
});

Route::get('/admin-adspage', function () {
    return view('/Admin/AdsPage');
});

Route::get('/admin-listoperator', function () {
    return view('/Admin/ListOperatorAdmin');
});

Route::get('/admin-listuser', function () {
    return view('/Admin/ListUserAdmin');
});

Route::get('/admin-transaction', function () {
    return view('/Admin/TransactionAdmin');
});

Route::get('/admin-profile', function () {
    return view('/Admin/ProfileAdmin');
});

Route::get('/admin-change-password', function () {
    return view('/Admin/ChangePassAdmin');
});

Route::get('/admin-addAds', function () {
    return view('/Admin/AddAdsPage');
});

Route::get('/admin-addDeposite', function () {
    return view('/Admin/AddDepositeAdmin');
});

Route::get('/admin-addWithdraw', function () {
    return view('/Admin/AddWithdrawAdmin');
});

Route::get('/admin-seeDeposite', function () {
    return view('/Admin/SeeDepositeAdmin');
});

Route::get('/admin-seeWithdraw', function () {
    return view('/Admin/SeeWithdrawAdmin');
});

Route::get('/registration', [MainController::class, 'register'])->name('registration.action')->middleware('guest');
Route::post('/registration', [MainController::class, 'register_action']);

Route::get('/login-', [MainController::class, 'login'])->name('login-');
Route::post('/login-', [MainController::class, 'login_action'])->name('login.action');

Route::get('/profileuser', [MainController::class, 'profile'])->name('profile');

Route::get('logout', [MainController::class, 'logout'])->name('logout');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Operator/homepage', function () {
    return view('/Operator/HomePage_Operator');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
