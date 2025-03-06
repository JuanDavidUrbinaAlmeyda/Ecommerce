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

    <title>Create Product</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
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
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 fw-bolder mb-5 mt-5">
                <span class="text-gradient d-inline">Crear Producto</span>
            </h1>
        </div>
        <div class="card p-4 shadow">
            <form id="productForm">
                <!-- Nombre del Producto -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="productName" placeholder="Ej. Smartphone X" required>
                </div>

                <!-- Descripción -->
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Descripción</label>
                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Escribe una breve descripción"
                        required></textarea>
                </div>

                <!-- Categoría -->
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Categoría</label>
                    <select class="form-select" id="productCategory" required>
                        <option value="">Selecciona una categoría</option>
                        <option value="tecnologia">Tecnología</option>
                        <option value="ropa">Ropa</option>
                        <option value="hogar">Hogar</option>
                    </select>
                </div>

                <!-- Precio -->
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Ej. 199.99" step="0.01"
                        min="0" required>
                </div>

                <!-- Imagen (URL) -->
                <div class="mb-3">
                    <label for="productImage" class="form-label">URL de la Imagen</label>
                    <input type="url" class="form-control" id="productImage"
                        placeholder="Ej. https://imagen.com/foto.jpg" required>
                </div>

                <!-- Botón Crear -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Crear Producto</button>
                </div>
            </form>
        </div>
    </div>
</body>
<footer class="footer text-center mt-5 bg-white">
    <p>Hecho por Iron Coding - 2025</p>
</footer>

</html>
