@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f6f9;
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-card {
        background: white;
        padding: 2rem 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        width: 100%;
        max-width: 420px;
    }

    .login-title {
        font-weight: 600;
        font-size: 2rem;
        color: #000000;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
    }

    .btn-primary {
        border-radius: 0.5rem;
        background-color:rgb(27, 0, 53)
    }

    .form-check-label, .form-text {
        font-size: 0.9rem;
    }

    .btn-link {
        font-size: 0.9rem;
        color: #6c757d;
    }
    .btn-link:hover {
        color:rgb(27, 0, 53);
        text-decoration: underline;
    }

</style>

<div class="container login-container">
    <div class="login-card">
        <img src="../iron_logo.png" alt="Logo" width="100" class="mb-3 mx-auto d-block">

        <div class="login-title">Iniciar Sesión</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autofocus>

                @error('email')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required>

                @error('password')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Recuérdame</label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>

            @if (Route::has('password.request'))
                <div class="text-center mt-3">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
