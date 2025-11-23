<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/outlets', [OutletController::class, 'index'])->name('outlets');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('role:admin')
    ->name('admin.dashboard');

Route::get('/supplier', [SupplierController::class, 'index'])
    ->middleware('role:supplier')
    ->name('supplier.dashboard');


Route::fallback(function () {
    abort(404);
});
