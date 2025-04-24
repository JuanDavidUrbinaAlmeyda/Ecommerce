@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f6f9;
    }

    .verify-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .verify-card {
        background: white;
        padding: 2.5rem 2rem;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 500px;
        text-align: center;
    }

    .verify-title {
        font-size: 1.6rem;
        font-weight: 600;
        color: rgb(27, 0, 53);
        margin-bottom: 1rem;
    }

    .verify-message {
        font-size: 1rem;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .btn-resend {
        color: rgb(27, 0, 53);
        font-weight: 500;
        text-decoration: underline;
        padding: 0;
        background: none;
        border: none;
    }

    .alert-success {
        font-size: 0.95rem;
        color: #155724;
        background-color: #d4edda;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
    }

</style>

<div class="container verify-container">
    <div class="verify-card">
        <div class="verify-title">
            Verifica tu dirección de correo
        </div>

        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
            </div>
        @endif

        <div class="verify-message">
            Antes de continuar, revisa tu correo para ver el enlace de verificación.
            <br>Si no recibiste el correo,
        </div>

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn-resend">haz clic aquí para solicitar uno nuevo</button>.
        </form>
    </div>
</div>
@endsection
