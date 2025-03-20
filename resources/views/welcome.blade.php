@extends('layout.app')
@section('title')
    <title>Home</title>
@endsection
@section('content')
    <!-- Slider -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="https://codeop.tech/wp-content/uploads/2023/11/florian-olivo-4hbJ-eymZ1o-unsplash-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover; filter: brightness(20%);">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <h1 class="text-white fw-bold">Welcome to Our Website</h1>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="https://codingweek.org/wp-content/uploads/2023/09/chris-ried-ieic5Tq8YMk-unsplash-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover; filter: brightness(20%);">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <h1 class="text-white fw-bold">Explore Our Portfolio</h1>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="https://www.computersciencedegreehub.com/wp-content/uploads/2023/02/shutterstock_535124956-scaled.jpg" class="d-block w-100" style="height: 400px; object-fit: cover; filter: brightness(20%);">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <h1 class="text-white fw-bold">Get in Touch</h1>
                </div>
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
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Nosotros</h5>
                        <p class="card-text flex-grow-1">Conoce acerca de nuestro equipo.</p>
                        <a href="#" class="btn btn-primary mt-auto" style="background-color:rgb(27, 0, 53)">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Portafolio</h5>
                        <p class="card-text flex-grow-1">Descubre nuestro amplio portafolio.</p>
                        <a href="#" class="btn btn-primary mt-auto" style="background-color:rgb(27, 0, 53)">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Contacto</h5>
                        <p class="card-text flex-grow-1">Contáctanos para obtener más información.</p>
                        <a href="#" class="btn btn-primary mt-auto" style="background-color:rgb(27, 0, 53)">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection