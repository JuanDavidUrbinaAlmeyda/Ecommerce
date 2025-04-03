@extends('layout.app')
@section('title')
    <title>Index</title>
@endsection
@section('css')
    <style>
        .product-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="display-5 fw-bolder mb-5 mt-5">
                <span class="text-gradient d-inline">Nuestros Productos</span>
            </h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($list as $product)
            <!-- Producto 1 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src={{$product->url_image}}
                        class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">{{$product->name}}</h6>
                    <p class="text-muted">{{$product->category_id}}</p>
                    <p class="product-price">{{$product->price}}</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
