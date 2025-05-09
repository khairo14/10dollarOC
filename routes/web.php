<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/customer-reviews', [HomeController::class, 'reviews'])->name('reviews');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('price');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/our-course', [HomeController::class, 'course'])->name('course');
Route::get('/our-license', [HomeController::class, 'license'])->name('license');
