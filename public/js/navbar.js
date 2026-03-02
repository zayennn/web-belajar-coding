document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar__container');
    const hamburger = document.getElementById('hamburger-toggle');
    const overlay = document.getElementById('navOverlay');
    const navMenu = document.getElementById('navMenu');
    const links = document.querySelectorAll('.nav__link');
    const line = document.querySelector('.line__tracking');
    const body = document.body;

    // Scroll effect for navbar
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Line tracking for desktop
    let activeLink = null;

    function setActiveLink() {
        const currentHash = window.location.hash || '#home';
        
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentHash) {
                activeLink = link;
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        if (!activeLink && links.length > 0) {
            activeLink = links[0];
            activeLink.classList.add('active');
        }

        if (window.innerWidth > 992) {
            moveLine(activeLink);
        }
    }

    function moveLine(el) {
        if (!el || !line || window.innerWidth <= 992) return;
        
        const rect = el.getBoundingClientRect();
        const parentRect = el.parentElement.getBoundingClientRect();
        
        line.style.width = `${rect.width}px`;
        line.style.left = `${rect.left - parentRect.left}px`;
    }

    // Hover effect for line tracking
    links.forEach(link => {
        link.addEventListener('mouseenter', () => {
            if (window.innerWidth > 992) {
                moveLine(link);
            }
        });

        link.addEventListener('mouseleave', () => {
            if (window.innerWidth > 992 && activeLink) {
                moveLine(activeLink);
            }
        });

        // Click handler for smooth scroll
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update active state
                    links.forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                    activeLink = link;
                    
                    // Close mobile menu if open
                    if (hamburger.checked) {
                        closeMenu();
                    }
                }
            }
        });
    });

    // Initialize active link
    setActiveLink();

    // Resize handler
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            // Desktop mode
            if (activeLink) {
                moveLine(activeLink);
            }
            // Ensure menu is closed when resizing to desktop
            if (hamburger.checked) {
                closeMenu();
            }
        } else {
            // Mobile mode - hide line tracking
            if (line) {
                line.style.width = '0';
            }
        }
    });

    // Mobile menu functionality
    function openMenu() {
        // Show overlay with bubble effect
        overlay.classList.add('active');
        
        // Prevent body scroll
        body.classList.add('menu-open');
        
        // Wait for overlay to expand, then show menu items
        setTimeout(() => {
            navMenu.classList.add('active');
        }, 800); // 500ms = overlay expansion time
    }

    function closeMenu() {
        // Hide menu items first
        navMenu.classList.remove('active');
        
        // Wait for menu items to fade out, then hide overlay
        setTimeout(() => {
            overlay.classList.remove('active');
            // Re-enable body scroll
            body.classList.remove('menu-open');
            
            // Uncheck hamburger
            hamburger.checked = false;
        }, 400); // 400ms = menu items fade out time
    }

    // Hamburger toggle handler
    hamburger.addEventListener('change', () => {
        if (hamburger.checked) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    // Close menu when clicking on a link (mobile)
    links.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992 && hamburger.checked) {
                closeMenu();
            }
        });
    });

    // Close menu with escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && hamburger.checked) {
            closeMenu();
        }
    });

    // Handle hash changes (back/forward buttons)
    window.addEventListener('hashchange', () => {
        setActiveLink();
    });

    // Observe DOM changes for line tracking
    const observer = new ResizeObserver(() => {
        if (window.innerWidth > 992 && activeLink) {
            moveLine(activeLink);
        }
    });

    observer.observe(document.body);

    // Glare effect optimization
    const logo = document.querySelector('.glare');
    if (logo) {
        // Remove and re-add animation periodically for smoother effect
        setInterval(() => {
            logo.style.animation = 'none';
            logo.offsetHeight; // Trigger reflow
            logo.style.animation = null;
        }, 8000);
    }

    // Update active link on scroll (for highlighting)
    const sections = document.querySelectorAll('section[id]');
    
    function highlightOnScroll() {
        const scrollY = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');
            
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                links.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                        activeLink = link;
                        
                        if (window.innerWidth > 992) {
                            moveLine(link);
                        }
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightOnScroll);
});