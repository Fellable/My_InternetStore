<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

ROute::post('/orders', \App\Http\Controllers\API\Order\StoreController::class);
ROute::post('/products', \App\Http\Controllers\API\Product\IndexController::class);
ROute::get('/products/filters', \App\Http\Controllers\API\Product\FilterListController::class);
ROute::get('/products/{product}', \App\Http\Controllers\API\Product\ShowController::class);

