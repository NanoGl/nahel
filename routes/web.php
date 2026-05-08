<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/we-are', [HomeController::class, 'weAre'])->name('app.we-are');
Route::get('/distributors', [HomeController::class, 'distributors'])->name('app.distributors');
Route::get('/contact-us', [HomeController::class, 'contactUsForm'])->name('app.contact-us');
Route::post('/contact-us', [HomeController::class, 'contactUsSend'])->name('app.contact-us-send');
/* Route::get('/send-contact-us', function(){
    Mail::to('orgonlan2@gmail.com')
        ->send(new ContactUsMailable());

    return "Mensaje enviado";
}); */
Route::get('/products/{productCode}', [HomeController::class, 'product'])->name('app.product');
Route::get('/search', [HomeController::class, 'search'])->name('app.search');
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
