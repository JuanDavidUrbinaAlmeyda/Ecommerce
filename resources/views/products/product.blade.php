@extends('layout.app')
@section('title')
    <title>Product</title>
@endsection
@section('css')
    <style>
        .product-name {
            font-weight: bold;
            color: #4B0082;
            /* Morado oscuro */
            font-size: 1.8rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>
@section('content')
    <div class="container mt-5">
        <div class="card p-4 shadow col-md-8 mx-auto">
            <div class="row ">
                <!-- Imagen a la izquierda -->
                <div class="col-md-4 text-center">
                    <img src="https://m.media-amazon.com/images/I/61goypdjAYL.jpg" alt="Producto" class="img-fluid rounded">
                </div>

                <!-- Información del producto -->
                <div class="col-md-8">
                    <h2 class="product-name">{{$product->name}}</h2>
                    <p class="text-muted">Categoría: {{$product->category_id}}</p>
                    <p>{{$product->description}}</p>
                    <p class="product-price">${{$product->price}}</p>

                    <!-- Botón añadir al carrito -->
                    <button class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>

@endsection
