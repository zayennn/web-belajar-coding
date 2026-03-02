// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (navToggle) {
        navToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');

            // Toggle icon
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
        if (navMenu && navToggle) {
            if (!navMenu.contains(event.target) && !navToggle.contains(event.target)) {
                navMenu.classList.remove('active');
                const icon = navToggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        }
    });

    // Active link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');

    function highlightNavLink() {
        const scrollY = window.pageYOffset;

        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightNavLink);

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Close mobile menu after clicking
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    const icon = navToggle.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
            }
        });
    });

    // Demo Code Editor Simulation
    const runButton = document.getElementById('demo-run-btn');
    const outputDiv = document.getElementById('demo-output');
    const editorContent = document.getElementById('demo-editor-content');

    if (runButton && outputDiv && editorContent) {
        runButton.addEventListener('click', function () {
            // Simulate code execution
            const code = editorContent.innerText;

            // Simple simulation for demo
            if (code.includes('println') || code.includes('print')) {
                outputDiv.innerHTML = `
                    <div class="output-header">
                        <span>Output</span>
                    </div>
                    <div class="output-content">
                        Hello World!
                    </div>
                `;

                // Add animation effect
                outputDiv.style.animation = 'none';
                outputDiv.offsetHeight; // Trigger reflow
                outputDiv.style.animation = 'fadeInUp 0.5s ease-out';
            } else {
                outputDiv.innerHTML = `
                    <div class="output-header">
                        <span>Output</span>
                    </div>
                    <div class="output-content" style="color: #ff6b6b;">
                        Error: No print statement found
                    </div>
                `;
            }

            // Button feedback
            const originalText = runButton.innerHTML;
            runButton.innerHTML = '<i class="fas fa-check"></i> Run';
            setTimeout(() => {
                runButton.innerHTML = originalText;
            }, 1000);
        });
    }

    // Parallax effect for hero section
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.5;

            // Subtle parallax for hero background
            hero.style.backgroundPosition = `center ${rate}px`;
        });
    }

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(section);
    });

    // Counter animation for stats (if any)
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            element.textContent = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Add hover effect for cards
    document.querySelectorAll('.feature-card, .language-card, .audience-card, .testimonial-card').forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-5px)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
        });
    });

    // Glare effect enhancement
    // Glare effect enhancement - FIXED VERSION
    const logo = document.querySelector('.logo-gradient.glare');
    if (logo) {
        setInterval(() => {
            logo.style.animation = 'none';
            logo.offsetHeight;
            logo.style.animation = null;

            const style = document.createElement('style');
            style.innerHTML = `
            .glare::before {
                animation: glare-move 4s infinite !important;
            }
        `;
            document.head.appendChild(style);

            setTimeout(() => {
                style.remove();
            }, 100);
        }, 8000);
    }

    const logoAlt = document.querySelector('.logo-gradient.glare-smooth');
    if (logoAlt) {
    }
});

// Add loading animation
window.addEventListener('load', function () {
    document.body.classList.add('loaded');

    // Simulate typing effect for hero subtitle (optional)
    const subtitle = document.querySelector('.hero-subtitle');
    if (subtitle) {
        const originalText = subtitle.textContent;
        // Optional: Add typing effect here if desired
    }
});

// Form validation for login/register (if added later)
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    return password.length >= 6;
}

// Error handling for images
document.querySelectorAll('img').forEach(img => {
    img.addEventListener('error', function () {
        this.style.display = 'none';
    });
});