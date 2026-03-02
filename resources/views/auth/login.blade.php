@extends('auth.layout.app')

@section('content')
    <div class="auth-card">
        <!-- Logo -->
        <div class="auth-logo">
            <span class="logo-gradient glare">MasterCode</span>
        </div>

        <!-- Header -->
        <div class="auth-header">
            <h1>Selamat Datang <span class="gradient-text">Kembali!</span></h1>
            <p>Silakan login untuk melanjutkan perjalanan codingmu</p>
        </div>

        <!-- Alert Messages -->
        @if (session('success'))
            <div class="alert alert-success" id="alert-message">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
                <i class="fas fa-times close-btn" onclick="this.parentElement.remove()"></i>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error" id="alert-message">
                <i class="fas fa-exclamation-circle"></i>
                <span>{{ $errors->first() }}</span>
                <i class="fas fa-times close-btn" onclick="this.parentElement.remove()"></i>
            </div>
        @endif

        <!-- Login Form -->
        <form class="auth-form" id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Field -->
            <!-- Email Field -->
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Masukkan email kamu"
                        value="{{ old('email') }}" required autofocus>
                </div>
                <div class="error-mes">
                    <i class="fas fa-exclamation-circle error-icon"></i>
                    <div class="error-message" id="email-error"></div>
                </div>
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan password kamu" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                </div>
                <div class="error-mes">
                    <i class="fas fa-exclamation-circle error-icon"></i>
                    <div class="error-message" id="password-error"></div>
                </div>
            </div>

            <!-- Form Options -->
            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="forgot-password">Lupa password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-submit" id="submitBtn">
                <span>Login</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>

        <!-- Register Link -->
        <div class="auth-footer">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
        </div>

        <!-- Social Login -->
        <div class="social-login">
            <p>Atau login dengan</p>
            <div class="social-icons">
                <a href="#" class="social-icon google">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon github">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </div>
@endsection