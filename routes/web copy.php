<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ProductController;
use App\Models\Akun;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});









Route::resource('/cars', CarController::class);
Route::resource('/types', TypeController::class);
Route::resource('/akuns', AkunController::class);
Route::resource('/loans', LoanController::class);










Route::get('/products', [ProductController::class, 'index']);