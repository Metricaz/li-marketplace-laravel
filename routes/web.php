<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketPlaceController;
use App\Http\Controllers\MarketPlaceShopeeController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TextController;
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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('/text', TextController::class);
});

/**
 * Rotas teste para desenvolvimento dos layouts
 */
Route::get('/newlayout', function() {
    return view('newlayout.home.index');
});

Route::get('/newlayout/categoria', function() {
    return view('newlayout.category.index');
});

Route::get('/newlayout/produto', function() {
    return view('newlayout.product.index');
});

Route::get('/termos-de-uso', function() {
    return view('newlayout.pages.terms-of-use');
});

Route::get('/politica-e-privacidade', function() {
    return view('newlayout.pages.policy-and-privacy');
});

Route::get('/quem-somos', function() {
    return view('newlayout.pages.about-us');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/product-sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/category-sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', [HomeController::class, 'index']);

Route::get('/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('s/{search}/', [SearchController::class, 'index'])->name('search');

Route::get('/{sku}/p', [ProductPageController::class, 'show']);

Route::get('health-check', [HealthCheckController::class, 'check']);
