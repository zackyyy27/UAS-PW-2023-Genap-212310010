<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FinanceController;
use App\Models\Menu;

// Dasboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'dashbord');
    Route::get('/dashbord', 'home');
    Route::get('/about', 'about');
    Route::get('/menu', 'menu');
    Route::get('/outlet', 'outlets');
    Route::get('/contact', 'contact');
    Route::post('/dashbord', 'store');
});

// Login
Route::controller(LoginController::class)->group((function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
}));

// manage produk
Route::controller(ProductsController::class)->group(function () {
    Route::get('/Admin/product/create', 'index2')->middleware('auth');
    Route::post('/product/{id}', 'update')->middleware('auth');
    Route::get('/product', 'index')->name('product')->middleware('auth');
    Route::get('/menu', 'menu');
    Route::post('/product', 'store')->middleware('auth');
    Route::delete('/product/{id}', 'destroy')->name('product.destroy')->middleware('auth');
    Route::get('/product/edit/{id}', 'edit')->middleware('auth');
    // ->middleware('auth');
});

Route::controller(FinanceController::class)->group(function () {
    Route::get('/finance', 'index')->middleware('auth');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/overview', 'index')->middleware('auth');
    Route::get('/Feedback', 'feedback')->middleware('auth');
});
