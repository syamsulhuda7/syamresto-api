<?php

use App\Http\Controllers\Api\CarouselController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return 'Hello';
});

Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::apiResource('/categories', CategoryController::class);

Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::apiResource('/products', ProductController::class);

Route::apiResource('/carousels', CarouselController::class);
