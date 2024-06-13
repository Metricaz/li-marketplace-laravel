<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketPlaceController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::apiResource('/', MarketPlaceController::class);

Route::apiResource('/product', ProductPageController::class);

Route::apiResource('/category', CategoryController::class);
Route::post('/category/{id}/search', [CategoryController::class, 'search']);