<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MasterCode</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Back to Home -->
    <a href="{{ url('/') }}" class="back-home">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Beranda</span>
    </a>

    <div class="auth-container">
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
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan email kamu"
                            value="{{ old('email') }}" required autofocus>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    <div class="error-message" id="email-error"></div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Masukkan password kamu"
                            required>
                        <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    <div class="error-message" id="password-error"></div>
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
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>

</html>
