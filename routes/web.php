<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/hizmetlerimiz', [ServiceController::class, 'index'])->name('service');
Route::get('/hizmetlerimiz/{slug}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/bilgi-bankasi', [BlogController::class, 'index'])->name('blog');
Route::get('/bilgi-bankasi/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/bilgi-bankasi/{category}/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/icerik/', [BlogController::class, 'search'])->name('blog.search');
Route::get('/{slug}', [PageController::class, 'business'])->name('business');

Route::middleware(['notLoggedIn'])->group(function () {
    Route::get('pdf/{quotationForm}', PdfController::class)->name('pdf');
});
