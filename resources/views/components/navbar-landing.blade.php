<div class="navbar__container">
    <a href="/" class="brand">MasterCode</a>

    <!-- Nav Menu Desktop -->
    <nav class="nav__menu">
        <a href="#home" class="nav__link" data-route="/">Home</a>

        <div class="nav-actions-desktop">
            <div class="theme-toggle">
                <i class="fas fa-sun"></i>
                <i class="fas fa-moon"></i>
                <div class="toggle-ball"></div>
            </div>
            <button class="btn btn-outline">Sign In</button>
            <button class="btn btn-primary">Sign Up</button>
        </div>

        <div class="line__tracking"></div>
    </nav>

    <!-- Theme Toggle Mobile & Hamburger -->
    <div class="nav-actions-mobile">
        <div class="theme-toggle mobile-theme">
            <i class="fas fa-sun"></i>
            <i class="fas fa-moon"></i>
            <div class="toggle-ball"></div>
        </div>

        <label class="hamburger">
            <input type="checkbox" id="hamburger-toggle">
            <svg viewBox="0 0 32 32">
                <path class="line line-top-bottom"
                    d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                </path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
        </label>
    </div>

    {{-- overlay --}}
    <div class="nav__overlay"></div>
</div>
