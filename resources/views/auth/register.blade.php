<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - MasterCode</title>
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
        <div class="auth-card register">
            <!-- Logo -->
            <div class="auth-logo">
                <span class="logo-gradient glare">MasterCode</span>
            </div>

            <!-- Header -->
            <div class="auth-header">
                <h1>Mulai <span class="gradient-text">Perjalananmu!</span></h1>
                <p>Daftar gratis dan mulai belajar coding sekarang</p>
            </div>

            <!-- Alert Messages -->
            @if(session('error'))
            <div class="alert alert-error" id="alert-message">
                <i class="fas fa-exclamation-circle"></i>
                <span>{{ session('error') }}</span>
                <i class="fas fa-times close-btn" onclick="this.parentElement.remove()"></i>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-error" id="alert-message">
                <i class="fas fa-exclamation-circle"></i>
                <span>{{ $errors->first() }}</span>
                <i class="fas fa-times close-btn" onclick="this.parentElement.remove()"></i>
            </div>
            @endif

            <!-- Register Form -->
            <form class="auth-form" id="registerForm" method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               placeholder="Masukkan nama lengkap kamu" 
                               value="{{ old('name') }}"
                               required 
                               autofocus>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    <div class="error-message" id="name-error"></div>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               placeholder="Masukkan email kamu" 
                               value="{{ old('email') }}"
                               required>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    <div class="error-message" id="email-error"></div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="Buat password (min. 6 karakter)" 
                               required>
                        <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    
                    <!-- Password Strength -->
                    <div class="password-strength">
                        <div class="strength-bar" id="strength-bar"></div>
                        <span class="strength-text" id="strength-text">Kekuatan password</span>
                    </div>

                    <!-- Password Requirements -->
                    <div class="password-requirements" id="password-requirements">
                        <p>Password harus memiliki:</p>
                        <ul>
                            <li id="req-length" class="invalid">
                                <i class="fas fa-times-circle"></i> Minimal 6 karakter
                            </li>
                            <li id="req-uppercase" class="invalid">
                                <i class="fas fa-times-circle"></i> Minimal 1 huruf besar
                            </li>
                            <li id="req-lowercase" class="invalid">
                                <i class="fas fa-times-circle"></i> Minimal 1 huruf kecil
                            </li>
                            <li id="req-number" class="invalid">
                                <i class="fas fa-times-circle"></i> Minimal 1 angka
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               placeholder="Masukkan ulang password kamu" 
                               required>
                        <i class="fas fa-eye toggle-password" onclick="togglePassword('password_confirmation')"></i>
                        <i class="fas fa-exclamation-circle error-icon"></i>
                    </div>
                    <div class="error-message" id="confirm-password-error"></div>
                </div>

                <!-- Terms and Conditions -->
                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan 
                        <a href="#">Kebijakan Privasi</a> yang berlaku
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit" id="submitBtn" disabled>
                    <span>Daftar Gratis</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <!-- Login Link -->
            <div class="auth-footer">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
            </div>

            <!-- Social Register -->
            <div class="social-login">
                <p>Atau daftar dengan</p>
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