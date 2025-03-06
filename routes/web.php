<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/products',[ProductController::class, 'index']);

Route::get('/products/create',[ProductController::class, 'create']);

Route::get('/products/{id}', [ProductController::class, 'detail']);
