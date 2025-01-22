<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(App\Http\Controllers\ProductController::class)
    ->prefix('products')
    ->group(function () {
        Route::get('/', 'index');
    });

Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::controller(App\Http\Controllers\ProductController::class)
            ->prefix('products')
            ->group(function () {
                Route::post('/', 'store');
            });
    });
});
