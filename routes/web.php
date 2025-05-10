<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/customer-reviews', [HomeController::class, 'reviews'])->name('reviews');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('price');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/our-course', [HomeController::class, 'course'])->name('course');
Route::get('/our-license', [HomeController::class, 'license'])->name('license');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/user', [HomeController::class, 'user'])->name('user')->middleware('guest');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment')->middleware('auth');
Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');


Route::post('/user-login', [HomeController::class, 'userLogin'])->name('user.login');
Route::post('/user-logout', [HomeController::class, 'logout'])->name('user.logout');
Route::post('/user-registration', [HomeController::class, 'userRegistration'])->name('user.registration');
