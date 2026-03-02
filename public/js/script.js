const navbar = document.querySelector(".navbar__container");

window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

const hamburger = document.getElementById("hamburger-toggle");
const overlay = document.querySelector(".nav__overlay");
const navMenu = document.querySelector(".nav__menu");
const links = document.querySelectorAll(".nav__link");
const line = document.querySelector(".line__tracking");

let defaultLink = null;

function setDefaultByRoute() {
    defaultLink = links[0];
    moveLine(defaultLink);
}

function moveLine(el) {
    if (!el || window.innerWidth <= 992) return;
    
    const rect = el.getBoundingClientRect();
    const parentRect = el.parentElement.getBoundingClientRect();

    line.style.width = `${rect.width}px`;
    line.style.left = `${rect.left - parentRect.left}px`;
}

if (window.innerWidth > 992) {
    links.forEach(link => {
        link.addEventListener("mouseenter", () => {
            moveLine(link);
        });

        link.addEventListener("mouseleave", () => {
            if (defaultLink) moveLine(defaultLink);
        });
    });

    setDefaultByRoute();
}

window.addEventListener('resize', () => {
    if (window.innerWidth > 992) {
        setDefaultByRoute();
    }
});

hamburger.addEventListener("change", () => {
    if (hamburger.checked) {
        overlay.classList.add("active");

        setTimeout(() => {
            navMenu.classList.add("active");
        }, 300);
        
        document.body.style.overflow = 'hidden';
    } else {
        navMenu.classList.remove("active");

        setTimeout(() => {
            overlay.classList.remove("active");
        }, 400);
        
        document.body.style.overflow = '';
    }
});

links.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        hamburger.checked = false;
        navMenu.classList.remove("active");
        
        setTimeout(() => {
            overlay.classList.remove("active");
        }, 400);
        
        document.body.style.overflow = '';
        
        if (targetSection) {
            setTimeout(() => {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 500);
        }
    });
});

overlay.addEventListener('click', () => {
    hamburger.checked = false;
    navMenu.classList.remove("active");
    
    setTimeout(() => {
        overlay.classList.remove("active");
    }, 400);
    
    document.body.style.overflow = '';
});

const themeToggle = document.querySelector('.theme-toggle');
const mobileThemeToggle = document.querySelector('.mobile-theme');
const body = document.body;

const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    body.classList.add('dark-theme');
}

function toggleTheme() {
    body.classList.toggle('dark-theme');
    
    if (body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}

themeToggle.addEventListener('click', toggleTheme);
if (mobileThemeToggle) {
    mobileThemeToggle.addEventListener('click', toggleTheme);
}

const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    let current = '';
    const scrollPosition = window.scrollY;
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        const sectionId = section.getAttribute('id');
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            current = sectionId;
        }
    });
    
    links.forEach(link => {
        link.classList.remove('active');
        const href = link.getAttribute('href').replace('#', '');
        if (href === current) {
            link.classList.add('active');
            if (window.innerWidth > 992) {
                defaultLink = link;
                moveLine(link);
            }
        }
    });
});

window.dispatchEvent(new Event('scroll'));