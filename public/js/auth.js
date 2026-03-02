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
        
        input.addEventListener('input', function() {
            removeError(this);
        });
    });
    
    // Name validation for register
    const nameInput = document.getElementById('name');
    if (nameInput) {
        nameInput.addEventListener('blur', function() {
            validateName(this);
        });
        
        nameInput.addEventListener('input', function() {
            removeError(this);
        });
    }
}

function validateLoginForm(e) {
    e.preventDefault();
    let isValid = true;
    
    // Clear all errors first
    clearAllErrors();
    
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
        submitBtn.innerHTML = '<span class="spinner"></span> Loading...';
        submitBtn.disabled = true;
        
        // Submit form
        e.target.submit();
    }
}

function validateRegisterForm(e) {
    e.preventDefault();
    let isValid = true;
    
    // Clear all errors first
    clearAllErrors();
    
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
    const passwordStrength = validatePasswordStrength(password.value);
    if (!passwordStrength.isValid) {
        isValid = false;
        showError(password, passwordStrength.message);
    }
    
    // Validate confirm password
    const confirmPassword = document.getElementById('password_confirmation');
    if (password.value !== confirmPassword.value) {
        isValid = false;
        showError(confirmPassword, 'Password tidak cocok');
    } else if (confirmPassword.value && !validatePassword(confirmPassword)) {
        isValid = false;
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
        submitBtn.innerHTML = '<span class="spinner"></span> Loading...';
        submitBtn.disabled = true;
        
        // Submit form
        e.target.submit();
    }
}

// Clear all errors helper
function clearAllErrors() {
    document.querySelectorAll('.form-group').forEach(group => {
        const input = group.querySelector('input');
        if (input) {
            input.classList.remove('error');
        }
        
        const errorIcon = group.querySelector('.error-mes .fa-exclamation-circle');
        const errorMessage = group.querySelector('.error-message');
        
        if (errorIcon) errorIcon.classList.remove('show');
        if (errorMessage) {
            errorMessage.textContent = '';
            errorMessage.classList.remove('show');
        }
    });
}

// Validation Helpers
function validateName(input) {
    const value = input.value.trim();
    
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
    
    if (!value) {
        showError(input, 'Password tidak boleh kosong');
        return false;
    }
    
    if (value.length < 6) {
        showError(input, 'Password minimal 6 karakter');
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
    const reqLength = document.getElementById('req-length');
    const reqUppercase = document.getElementById('req-uppercase');
    const reqLowercase = document.getElementById('req-lowercase');
    const reqNumber = document.getElementById('req-number');
    
    if (reqLength) {
        reqLength.className = requirements.length ? 'valid' : 'invalid';
        reqLength.innerHTML = `<i class="fas fa-${requirements.length ? 'check' : 'times'}-circle"></i> Minimal 6 karakter`;
    }
    
    if (reqUppercase) {
        reqUppercase.className = requirements.uppercase ? 'valid' : 'invalid';
        reqUppercase.innerHTML = `<i class="fas fa-${requirements.uppercase ? 'check' : 'times'}-circle"></i> Minimal 1 huruf besar`;
    }
    
    if (reqLowercase) {
        reqLowercase.className = requirements.lowercase ? 'valid' : 'invalid';
        reqLowercase.innerHTML = `<i class="fas fa-${requirements.lowercase ? 'check' : 'times'}-circle"></i> Minimal 1 huruf kecil`;
    }
    
    if (reqNumber) {
        reqNumber.className = requirements.number ? 'valid' : 'invalid';
        reqNumber.innerHTML = `<i class="fas fa-${requirements.number ? 'check' : 'times'}-circle"></i> Minimal 1 angka`;
    }
    
    // Calculate strength
    const strength = Object.values(requirements).filter(Boolean).length;
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    
    if (strengthBar && strengthText) {
        if (strength <= 1) {
            strengthBar.className = 'strength-bar weak';
            strengthText.textContent = 'Lemah';
            return { isValid: false, message: 'Password terlalu lemah' };
        } else if (strength <= 3) {
            strengthBar.className = 'strength-bar medium';
            strengthText.textContent = 'Sedang';
            return { isValid: false, message: 'Password masih sedang, tambah variasi karakter' };
        } else {
            strengthBar.className = 'strength-bar strong';
            strengthText.textContent = 'Kuat';
            return { isValid: true, message: 'Password kuat' };
        }
    }
    
    return { isValid: true, message: '' };
}

function checkPasswordMatch() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    
    if (confirmPassword.value && password.value !== confirmPassword.value) {
        showError(confirmPassword, 'Password tidak cocok');
        return false;
    } else if (confirmPassword.value) {
        removeError(confirmPassword);
        return true;
    }
    return true;
}

// UI Helpers - REVISED untuk struktur error-mes baru
function showError(input, message) {
    const formGroup = input.closest('.form-group');
    const errorMes = formGroup.querySelector('.error-mes');
    const errorIcon = errorMes.querySelector('.fa-exclamation-circle');
    const errorMessage = errorMes.querySelector('.error-message');
    
    // Add error class to input
    input.classList.add('error');
    
    // Show error icon and message
    if (errorIcon) errorIcon.classList.add('show');
    if (errorMessage) {
        errorMessage.textContent = message;
        errorMessage.classList.add('show');
    }
    
    // Add shake animation
    input.style.animation = 'shake 0.5s ease-in-out';
    setTimeout(() => {
        input.style.animation = '';
    }, 500);
}

function removeError(input) {
    const formGroup = input.closest('.form-group');
    const errorMes = formGroup.querySelector('.error-mes');
    const errorIcon = errorMes.querySelector('.fa-exclamation-circle');
    const errorMessage = errorMes.querySelector('.error-message');
    
    // Remove error class from input
    input.classList.remove('error');
    
    // Hide error icon and message
    if (errorIcon) errorIcon.classList.remove('show');
    if (errorMessage) {
        errorMessage.textContent = '';
        errorMessage.classList.remove('show');
    }
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
            if (this.value) {
                requirements.classList.add('show');
            }
        });
        
        passwordInput.addEventListener('blur', function() {
            if (!this.value) {
                requirements.classList.remove('show');
            }
        });
        
        // Show requirements if there's value on page load
        if (passwordInput.value) {
            requirements.classList.add('show');
        }
    }
}

function initPasswordRequirements() {
    // Initialize password requirements if there's existing value
    const passwordInput = document.getElementById('password');
    if (passwordInput && passwordInput.value) {
        validatePasswordStrength(passwordInput.value);
    }
}

// Alert Auto Close
function initAlertAutoClose() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.animation = 'slideOut 0.3s ease-out forwards';
            setTimeout(() => {
                if (alert.parentNode) {
                    alert.remove();
                }
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
                // Only capitalize first letter of each word
                this.value = this.value.replace(/\b\w/g, l => l.toUpperCase());
            });
        }
        
        // Remove error on input
        input.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                removeError(this);
            }
        });
    });
}

// Add animations
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
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
    
    .input-group.focused i {
        color: var(--accent-primary);
    }
    
    .error-mes .fa-exclamation-circle {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .error-mes .fa-exclamation-circle.show {
        opacity: 1;
    }
    
    .error-message {
        opacity: 0;
        transform: translateY(-5px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .error-message.show {
        opacity: 1;
        transform: translateY(0);
    }
`;
document.head.appendChild(style);

// Export functions for global use
window.togglePassword = togglePassword;