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

        /* Estilos para el paginador */
        .d-flex.justify-content-center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* Contenedor principal centrado en toda la página */
        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Estilos del paginador */
        .pagination {
            display: flex;
            gap: 5px;
            padding: 10px;
            border-radius: 8px;
            background-color: #f8f9fa;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para los botones de paginación */
        .pagination .page-item .page-link {
            border: none;
            color: #007bff;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        /* Efecto al pasar el mouse */
        .pagination .page-item .page-link:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.1);
        }

        /* Estilo para el botón activo */
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        /* Estilos para los botones de navegación */
        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: transparent;
        }

        /* Animación de aparición */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Aplicar animación al paginador */
        .pagination {
            animation: fadeIn 0.5s ease-in-out;
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
            @foreach ($list as $product)
                <!-- Producto 1 -->
                <div class="col">
                    <div class="card p-3 text-center">
                        <img src={{ $product->url_image }} class="product-img mx-auto" alt="Producto">
                        <h6 class="fw-bold mt-2">{{ $product->name }}</h6>
                        <p class="text-muted">Categoría: {{ $product->category_id }}</p>
                        <p class="product-price">{{ $product->price }}$</p>
                        <button class="btn btn-primary">Ver</button>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4 pagination-container">
                {{ $list->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
@endsection
