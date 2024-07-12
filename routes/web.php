<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/welcome', [DashboardController::class, 'index']);
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('carlist', [FrontendController::class, 'carlist'])->name('carlist');
Route::get('detail', [FrontendController::class, 'detail'])->name('detail');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/cars', CarController::class);
    Route::resource('/types', TypeController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/loans', LoanController::class);
});

require __DIR__.'/auth.php';
