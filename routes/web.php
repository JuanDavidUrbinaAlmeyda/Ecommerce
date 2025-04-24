<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/','index');
    Route::get('/create','create');
    Route::get('/{id}', 'detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
