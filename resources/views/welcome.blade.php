<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img src="iron_logo.png" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products')}}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/create')}}">Crear</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://codeop.tech/wp-content/uploads/2023/11/florian-olivo-4hbJ-eymZ1o-unsplash-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://codingweek.org/wp-content/uploads/2023/09/chris-ried-ieic5Tq8YMk-unsplash-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://www.computersciencedegreehub.com/wp-content/uploads/2023/02/shutterstock_535124956-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Cards -->
    <div class="container mt-5 bg-light">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Nosotros</h5>
                        <p class="card-text">Conoce acerca de nuestro equipo.</p>
                        <a href="#" class="btn btn-primary" style="background-color:rgb(27, 0, 53) ">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Portafolio</h5>
                        <p class="card-text">Descubre nuestro amplio portafolio.</p>
                        <a href="#" class="btn btn-primary" style="background-color:rgb(27, 0, 53) ">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Contacto</h5>
                        <p class="card-text">Contáctanos para obtener más información.</p>
                        <a href="#" class="btn btn-primary" style="background-color:rgb(27, 0, 53) ">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer text-center mt-5 bg-white">
    <p>Hecho por Iron Coding - 2025</p>
</footer>
</html>