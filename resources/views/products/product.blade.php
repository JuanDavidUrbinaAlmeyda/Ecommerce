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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .product-name {
            font-weight: bold;
            color: #1b002e;
            /* Morado oscuro */
            font-size: 1.8rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>
    <title>Product</title>
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
    <div class="container mt-5">
        <div class="card p-4 shadow col-md-8 mx-auto">
            <div class="row ">
                <!-- Imagen a la izquierda -->
                <div class="col-md-4 text-center">
                    <img src="https://m.media-amazon.com/images/I/61goypdjAYL.jpg" alt="Producto"
                        class="img-fluid rounded">
                </div>

                <!-- Información del producto -->
                <div class="col-md-8">
                    <h2 class="product-name">Nombre del Producto</h2>
                    <p class="text-muted">Categoría: Tecnología</p>
                    <p>Este es un producto de alta calidad con todas las características que necesitas para mejorar tu
                        día a día.</p>
                    <p class="product-price">$199.99</p>

                    <!-- Botón añadir al carrito -->
                    <button class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>

</body>
<footer class="footer text-center mt-5 bg-white">
    <p>Hecho por Iron Coding - 2025</p>
</footer>

</html>
