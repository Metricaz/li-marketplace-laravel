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
Route::get('/pdp', function() {
	return view('newlayout.pdp');
});



Route::apiResource('/', MarketPlaceController::class);
Route::apiResource('/product', ProductPageController::class);

Route::apiResource('/shopee', MarketPlaceShopeeController::class);

Route::apiResource('/category', CategoryController::class);
Route::post('/category/{id}/search', [CategoryController::class, 'search']);

Route::get('health-check', [HealthCheckController::class, 'check']);
