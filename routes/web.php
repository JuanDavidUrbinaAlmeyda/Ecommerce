<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    //Listado de productos
    return view('products');
});

Route::get('/products/create', function () {
    //Crear producto
    return view('create');
});

Route::get('/products/{id}', function ($id) {
    //Detalle de producto
    return view('product');
});

Route::get('/products/{id}/{category}', function ($id, $category) {
    //Detalle de categoria
    return view('category');
});

