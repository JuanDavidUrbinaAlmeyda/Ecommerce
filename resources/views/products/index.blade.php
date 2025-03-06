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
            <!-- Producto 1 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://olimpica.vtexassets.com/arquivos/ids/1287038/197497161786-1.jpg?v=638412068654670000"
                        class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 1</h6>
                    <p class="text-muted">Categoría A</p>
                    <p class="product-price">$19.99</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://m.media-amazon.com/images/I/61goypdjAYL.jpg" class="product-img mx-auto"
                        alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 2</h6>
                    <p class="text-muted">Categoría B</p>
                    <p class="product-price">$25.50</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://m.media-amazon.com/images/I/618Bb+QzCmL.jpg" class="product-img mx-auto"
                        alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 3</h6>
                    <p class="text-muted">Categoría C</p>
                    <p class="product-price">$10.00</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://co.celulares.com/fotos/nokia-3310-1431-g.jpg" class="product-img mx-auto"
                        alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 4</h6>
                    <p class="text-muted">Categoría D</p>
                    <p class="product-price">$30.75</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://panamericana.vtexassets.com/arquivos/ids/562816/consola-nintendo-switch-oled-blanca-juego-mario-kart-8-45496885144.jpg?v=638665868079530000"
                        class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 5</h6>
                    <p class="text-muted">Categoría A</p>
                    <p class="product-price">$15.99</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://itechcolombia.co/wp-content/uploads/2022/05/play-station-5-itechcolombia-2.jpg"
                        class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 6</h6>
                    <p class="text-muted">Categoría B</p>
                    <p class="product-price">$18.00</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://unaluka.com/cdn/shop/files/Apple_Vision_Pro_1000_0001_2048x.jpg?v=1705943785"
                        class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 7</h6>
                    <p class="text-muted">Categoría C</p>
                    <p class="product-price">$22.49</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 8 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://via.placeholder.com/100" class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 8</h6>
                    <p class="text-muted">Categoría D</p>
                    <p class="product-price">$27.99</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 9 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://via.placeholder.com/100" class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 9</h6>
                    <p class="text-muted">Categoría A</p>
                    <p class="product-price">$14.50</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>
        </div>
    </div>
@endsection
