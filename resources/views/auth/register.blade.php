@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f6f9;
    }

    .register-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .register-card {
        background: white;
        padding: 2rem 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        width: 100%;
        max-width: 460px;
    }

    .register-title {
        font-weight: 600;
        font-size: 2rem;
        color: #000000;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
    }

    .input-group-text {
        background: #f1f3f5;
        border-radius: 0.5rem 0 0 0.5rem;
    }

    .btn-primary {
        border-radius: 0.5rem;
        background-color:rgb(27, 0, 53)
    }

    .form-check-label,
    .btn-link {
        font-size: 0.9rem;
    }
</style>

<div class="container register-container">
    <div class="register-card">
        <div class="register-title">Crear Cuenta</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre completo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input id="name" type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autofocus>
                </div>
                @error('name')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                </div>
                @error('password')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>
</div>
@endsection
