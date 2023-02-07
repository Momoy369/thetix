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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/details/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');

Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/tickets', [App\Http\Controllers\DashboardTicketController::class, 'index'])->name('dashboard-my-ticket');
Route::get('/dashboard/tickets/{id}', [App\Http\Controllers\DashboardTicketController::class, 'details'])->name('dashboard-my-ticket-details');

Route::get('/dashboard/account', [App\Http\Controllers\DashboardSettingController::class, 'account'])->name('dashboard-settings-account');

Route::prefix('admin')
    // ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin-dashboard');
        Route::resource('user', 'App\Http\Controllers\Admin\UserController');
        Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
        Route::resource('product-gallery', 'App\Http\Controllers\Admin\ProductGalleryController');
    });

Auth::routes();
