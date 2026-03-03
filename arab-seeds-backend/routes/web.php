<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ProductsController;
use App\Http\Controllers\Web\ProjectsController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\InvestorsController;
use App\Http\Controllers\Web\ShareholdersController;
use App\Http\Controllers\Web\ContactController;

// Language switcher
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

// Web Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/investors', [InvestorsController::class, 'index'])->name('investors');
Route::get('/shareholders', [ShareholdersController::class, 'index'])->name('shareholders');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

