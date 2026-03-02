// Auth Pages JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functions
    initFormValidation();
    initPasswordToggle();
    initPasswordStrength();
    initPasswordRequirements();
    initAlertAutoClose();
    initInputEffects();
    
    // Login form validation
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', validateLoginForm);
    }
    
    // Register form validation
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', validateRegisterForm);
        
        // Real-time validation
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        
        if (password) {
            password.addEventListener('input', function() {
                validatePasswordStrength(this.value);
                checkPasswordMatch();
            });
        }
        
        if (confirmPassword) {
            confirmPassword.addEventListener('input', checkPasswordMatch);
        }
        
        // Terms checkbox
        const termsCheckbox = document.getElementById('terms');
        const submitBtn = document.getElementById('submitBtn');
        
        if (termsCheckbox && submitBtn) {
            termsCheckbox.addEventListener('change', function() {
                submitBtn.disabled = !this.checked;
            });
        }
    }
});

// Form Validation Functions
function initFormValidation() {
    // Email validation
    const emailInputs = document.querySelectorAll('input[type="email"]');
    emailInputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateEmail(this);
        });
        
        input.addEventListener('input', function() {
            removeError(this);
        });
    });
    
    // Password validation for login
    const passwordInputs = document.querySelectorAll('#loginForm input[type="password"]');
    passwordInputs.forEach(input => {
        input.addEventListener('blur', function() {
            validatePassword(this);
        });
    });
}

function validateLoginForm(e) {
    e.preventDefault();
    let isValid = true;
    
    // Validate email
    const email = document.getElementById('email');
    if (!validateEmail(email)) {
        isValid = false;
    }
    
    // Validate password
    const password = document.getElementById('password');
    if (!validatePassword(password)) {
        isValid = false;
    }
    
    if (isValid) {
        // Show loading state
        const submitBtn = document.getElementById('submitBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="spinner"></span> Loading...';
        submitBtn.disabled = true;
        
        // Submit form
        e.target.submit();
    }
}

function validateRegisterForm(e) {
    e.preventDefault();
    let isValid = true;
    
    // Validate name
    const name = document.getElementById('name');
    if (!validateName(name)) {
        isValid = false;
    }
    
    // Validate email
    const email = document.getElementById('email');
    if (!validateEmail(email)) {
        isValid = false;
    }
    
    // Validate password
    const password = document.getElementById('password');
    if (!validatePasswordStrength(password.value)) {
        isValid = false;
        showError(password, 'Password terlalu lemah');
    }
    
    // Validate confirm password
    const confirmPassword = document.getElementById('password_confirmation');
    if (password.value !== confirmPassword.value) {
        isValid = false;
        showError(confirmPassword, 'Password tidak cocok');
    }
    
    // Check terms
    const terms = document.getElementById('terms');
    if (!terms.checked) {
        alert('Anda harus menyetujui Syarat & Ketentuan');
        isValid = false;
    }
    
    if (isValid) {
        // Show loading state
        const submitBtn = document.getElementById('submitBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="spinner"></span> Loading...';
        submitBtn.disabled = true;
        
        // Submit form
        e.target.submit();
    }
}

// Validation Helpers
function validateName(input) {
    const value = input.value.trim();
    const errorElement = document.getElementById('name-error');
    
    if (value.length < 3) {
        showError(input, 'Nama minimal 3 karakter');
        return false;
    }
    
    if (value.length > 50) {
        showError(input, 'Nama maksimal 50 karakter');
        return false;
    }
    
    removeError(input);
    return true;
}

function validateEmail(input) {
    const value = input.value.trim();
    const errorElement = document.getElementById('email-error');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!value) {
        showError(input, 'Email tidak boleh kosong');
        return false;
    }
    
    if (!emailRegex.test(value)) {
        showError(input, 'Format email tidak valid');
        return false;
    }
    
    removeError(input);
    return true;
}

function validatePassword(input) {
    const value = input.value;
    const errorElement = document.getElementById('password-error');
    
    if (!value) {
        showError(input, 'Password tidak boleh kosong');
        return false;
    }
    
    removeError(input);
    return true;
}

function validatePasswordStrength(password) {
    const requirements = {
        length: password.length >= 6,
        uppercase: /[A-Z]/.test(password),
        lowercase: /[a-z]/.test(password),
        number: /[0-9]/.test(password)
    };
    
    // Update requirement indicators
    document.getElementById('req-length').className = requirements.length ? 'valid' : 'invalid';
    document.getElementById('req-uppercase').className = requirements.uppercase ? 'valid' : 'invalid';
    document.getElementById('req-lowercase').className = requirements.lowercase ? 'valid' : 'invalid';
    document.getElementById('req-number').className = requirements.number ? 'valid' : 'invalid';
    
    // Update requirement icons
    document.getElementById('req-length').innerHTML = `<i class="fas fa-${requirements.length ? 'check' : 'times'}-circle"></i> Minimal 6 karakter`;
    document.getElementById('req-uppercase').innerHTML = `<i class="fas fa-${requirements.uppercase ? 'check' : 'times'}-circle"></i> Minimal 1 huruf besar`;
    document.getElementById('req-lowercase').innerHTML = `<i class="fas fa-${requirements.lowercase ? 'check' : 'times'}-circle"></i> Minimal 1 huruf kecil`;
    document.getElementById('req-number').innerHTML = `<i class="fas fa-${requirements.number ? 'check' : 'times'}-circle"></i> Minimal 1 angka`;
    
    // Calculate strength
    const strength = Object.values(requirements).filter(Boolean).length;
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    
    if (strength === 0 || strength === 1) {
        strengthBar.className = 'strength-bar weak';
        strengthText.textContent = 'Lemah';
        return false;
    } else if (strength === 2 || strength === 3) {
        strengthBar.className = 'strength-bar medium';
        strengthText.textContent = 'Sedang';
        return false;
    } else if (strength === 4) {
        strengthBar.className = 'strength-bar strong';
        strengthText.textContent = 'Kuat';
        return true;
    }
}

function checkPasswordMatch() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    const errorElement = document.getElementById('confirm-password-error');
    
    if (confirmPassword.value && password.value !== confirmPassword.value) {
        showError(confirmPassword, 'Password tidak cocok');
        return false;
    } else {
        removeError(confirmPassword);
        return true;
    }
}

// UI Helpers
function showError(input, message) {
    const inputGroup = input.closest('.input-group');
    const errorElement = input.closest('.form-group').querySelector('.error-message');
    
    input.classList.add('error');
    errorElement.textContent = message;
    errorElement.classList.add('show');
}

function removeError(input) {
    input.classList.remove('error');
    const errorElement = input.closest('.form-group').querySelector('.error-message');
    errorElement.classList.remove('show');
}

// Password Toggle
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const icon = input.nextElementSibling;
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

function initPasswordToggle() {
    // Function is already global for onclick
}

// Password Strength
function initPasswordStrength() {
    const passwordInput = document.getElementById('password');
    const requirements = document.getElementById('password-requirements');
    
    if (passwordInput && requirements) {
        passwordInput.addEventListener('focus', function() {
            requirements.classList.add('show');
        });
        
        passwordInput.addEventListener('blur', function() {
            if (!this.value) {
                requirements.classList.remove('show');
            }
        });
    }
}

function initPasswordRequirements() {
    // Handled in validatePasswordStrength
}

// Alert Auto Close
function initAlertAutoClose() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => {
                alert.remove();
            }, 300);
        }, 5000);
    });
}

// Input Effects
function initInputEffects() {
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            this.closest('.input-group')?.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.closest('.input-group')?.classList.remove('focused');
        });
        
        // Auto capitalize name
        if (input.id === 'name') {
            input.addEventListener('input', function() {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            });
        }
    });
}

// Add slideOut animation
const style = document.createElement('style');
style.textContent = `
    @keyframes slideOut {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-10px);
        }
    }
    
    .input-group.focused i {
        color: var(--accent-primary);
    }
`;
document.head.appendChild(style);

// Export functions for global use
window.togglePassword = togglePassword;