<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/index', [ProductController::class, 'indexc'])->name('index');

Route::get('/', function () {
    return view('connect');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
});

Route::get('/register', function () {
    return view('auth/register');
})->name('register');
Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
Route::resource('products', ProductController::class);
