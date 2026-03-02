<!-- Navbar -->
<nav class="navbar">
    <div class="navbar__container">
        <a href="/" class="brand">
            <span class="logo-gradient glare">MasterCode</span>
        </a>

        <nav class="nav__menu" id="navMenu">
            <a href="#home" class="nav__link active" data-route="#home">Home</a>
            <a href="#bahasa" class="nav__link" data-route="#bahasa">Bahasa Pemrogramman</a>
            <a href="#tentang" class="nav__link" data-route="#tentang">Tentang</a>
            <a href="#roadmap" class="nav__link" data-route="#roadmap">Roadmap</a>
            <div class="nav-auth-mobile">
                <a href="#" class="btn-login">Login</a>
                <a href="#" class="btn-register">Register</a>
            </div>
            <div class="line__tracking"></div>
        </nav>

        <div class="nav-auth-desktop">
            <a href="#" class="btn-login">Login</a>
            <a href="#" class="btn-register">Register</a>
        </div>

        <label class="hamburger" id="hamburger">
            <input type="checkbox" id="hamburger-toggle">
            <svg viewBox="0 0 32 32">
                <path class="line line-top-bottom"
                    d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                </path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
        </label>

        <!-- Overlay Bubble -->
        <div class="nav__overlay" id="navOverlay"></div>
    </div>
</nav>