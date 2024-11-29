<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\MarketPlaceController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\MarketPlaceShopeeController;
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

Route::get('/newlayout/termos-de-uso', function() {
	return view('newlayout.pages.terms-of-use');
});

Route::get('/newlayout/politica-e-privacidade', function() {
	return view('newlayout.pages.policy-and-privacy');
});

Route::get('/newlayout/quem-somos', function() {
	return view('newlayout.pages.about-us');
});

Route::get('/', [ProductPageController::class, 'index']);

Route::get('/{category}', [CategoryController::class, 'index']);

Route::apiResource('/product', ProductPageController::class);

Route::apiResource('/shopee', MarketPlaceShopeeController::class);

Route::post('/category/{id}/search', [CategoryController::class, 'search']);

Route::get('health-check', [HealthCheckController::class, 'check']);
