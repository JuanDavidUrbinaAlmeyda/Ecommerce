<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Index</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

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
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="iron_logo.png" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products/create') }}">Crear</a></li>

                </ul>
            </div>
        </div>
    </nav>
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
                    <img src="https://panamericana.vtexassets.com/arquivos/ids/562816/consola-nintendo-switch-oled-blanca-juego-mario-kart-8-45496885144.jpg?v=638665868079530000" class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 5</h6>
                    <p class="text-muted">Categoría A</p>
                    <p class="product-price">$15.99</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://itechcolombia.co/wp-content/uploads/2022/05/play-station-5-itechcolombia-2.jpg" class="product-img mx-auto" alt="Producto">
                    <h6 class="fw-bold mt-2">Producto 6</h6>
                    <p class="text-muted">Categoría B</p>
                    <p class="product-price">$18.00</p>
                    <button class="btn btn-primary">Ver</button>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="col">
                <div class="card p-3 text-center">
                    <img src="https://unaluka.com/cdn/shop/files/Apple_Vision_Pro_1000_0001_2048x.jpg?v=1705943785" class="product-img mx-auto" alt="Producto">
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



</body>
<footer class="footer text-center mt-5 bg-white">
    <p>Hecho por Iron Coding - 2025</p>
</footer>

</html>
