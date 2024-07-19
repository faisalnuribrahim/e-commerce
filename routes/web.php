<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('success');
Route::get('/register/success', [RegisterController::class, 'success'])->name('register success');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/product', [DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/product/add', [DashboardProductController::class, 'add'])->name('dashboard-product-add');
Route::get('/dashboard/product/{id}', [DashboardProductController::class, 'details'])->name('dashboard-product-details');
Route::get('/dashboard/transaction', [DashboardTransactionController::class, 'index'])->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transaction-details');
Route::get('/dashboard/setting', [DashboardSettingController::class, 'store'])->name('dashboard-setting-store');
Route::get('/dashboard/account', [DashboardSettingController::class, 'account'])->name('dashboard-setting-account');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');