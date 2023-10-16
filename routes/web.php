<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;   

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomePageController::class, 'index'])->name('homepage');

Route::get('/job/category/{category:slug}', [\App\Http\Controllers\Frontend\HomePageController::class, 'byCategory'])->name('by-category');
Route::get('/detail{job:slug}', [\App\Http\Controllers\Frontend\HomePageController::class, 'show'])->name('detail');
Route::get('/search', [\App\Http\Controllers\Frontend\HomePageController::class, 'search'])->name('search');

Route::get('/contact', [\App\Http\Controllers\Frontend\HomePageController::class, 'contact'])->name('contact');


Route::get('/sesi', [\App\Http\Controllers\SessionController::class, 'index']);
Route::get('/sesi/logout', [\App\Http\Controllers\SessionController::class, 'logout']);
Route::post('/sesi/login', [\App\Http\Controllers\SessionController::class, 'index']);
