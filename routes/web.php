<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/we-are', [HomeController::class, 'weAre'])->name('app.we-are');
Route::get('/distributors', [HomeController::class, 'distributors'])->name('app.distributors');
Route::get('/products/{productCode}', [HomeController::class, 'product'])->name('app.product');
Route::get('/categories/{categoryName}', [HomeController::class, 'category'])->name('app.category');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
