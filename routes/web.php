<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/','index');
    Route::get('/create','create');
    Route::get('/{id}', 'detail');
});

