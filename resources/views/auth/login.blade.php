@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center vh-100" style="background-image: url('{{ asset('backend/img/langit.jpg') }}'); background-size: cover; background-position: center;">
    <div class="login-box p-4" style="
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        backdrop-filter: blur(10px);
        width: 350px;
        max-width: 400px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
        
        <!-- Judul -->
        <div class="text-center mb-4">
            <h2 style="color: #fff;">Login</h2>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="
                    background: transparent;
                    border: 1px solid #fff;
                    color: #fff;
                    border-radius: 5px;">
                
                <!-- Pesan error email -->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="
                    background: transparent;
                    border: 1px solid #fff;
                    color: #fff;
                    border-radius: 5px;">
                
                <!-- Pesan error password -->
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember" style="color: #fff;">
                    Remember Me
                </label>
            </div>

            <!-- Tombol Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>

            <!-- Forgot Password dan Register Link -->
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" style="color: #fff;">Forgot password?</a>
                <br>
                <a href="{{ route('register') }}" style="color: #fff;">Don't have an account? Register</a>
            </div>
        </form>

        <!-- Tampilkan pesan error jika login gagal -->
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection
