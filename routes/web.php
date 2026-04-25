<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/products/{productCode}', [HomeController::class, 'product'])->name('app.product');

Route::get('/categories/bikes', [CategoryController::class, 'bikes'])->name('app.categories.bikes');
Route::get('/categories/motos', [CategoryController::class, 'motos'])->name('app.categories.motos');
Route::get('/categories/bike-parts', [CategoryController::class, 'bikeParts'])->name('app.categories.bike-parts');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
