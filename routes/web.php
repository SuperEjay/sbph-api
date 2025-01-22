<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', \App\Http\Controllers\CategoryController::class);

//create prefix for product
Route::prefix('products')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\ProductController::class, 'save']);
});
