const languagesData = [
    {
        id: 1,
        name: 'Java',
        slug: 'java',
        icon: 'fa-brands fa-java',
        iconClass: 'java',
        description: 'Bahasa berorientasi objek yang banyak digunakan untuk aplikasi enterprise dan Android.',
        level: 'intermediate',
        stats: {
            levels: 5,
            materials: 32,
            exercises: 10,
            projects: 5
        },
        isActive: true,
        isPopular: true,
        isNew: false,
        progress: 40,
        color: '#f093fb'
    },
    {
        id: 2,
        name: 'Python',
        slug: 'python',
        icon: 'fa-brands fa-python',
        iconClass: 'python',
        description: 'Bahasa yang sederhana dan fleksibel, populer untuk data science dan automation.',
        level: 'beginner',
        stats: {
            levels: 4,
            materials: 28,
            exercises: 12,
            projects: 4
        },
        isActive: true,
        isPopular: true,
        isNew: true,
        progress: 60,
        color: '#4facfe'
    },
    {
        id: 3,
        name: 'C',
        slug: 'c',
        icon: 'fa-solid fa-c',
        iconClass: 'c',
        description: 'Bahasa fundamental yang banyak digunakan untuk sistem operasi dan pemrograman tingkat rendah.',
        level: 'advanced',
        stats: {
            levels: 4,
            materials: 24,
            exercises: 8,
            projects: 3
        },
        isActive: true,
        isPopular: false,
        isNew: false,
        progress: 20,
        color: '#43e97b'
    },
    {
        id: 4,
        name: 'JavaScript',
        slug: 'javascript',
        icon: 'fa-brands fa-js',
        iconClass: 'javascript',
        description: 'Bahasa untuk web development, bisa jalan di browser maupun server (Node.js).',
        level: 'beginner',
        stats: {
            levels: 6,
            materials: 40,
            exercises: 15,
            projects: 6
        },
        isActive: true,
        isPopular: true,
        isNew: true,
        progress: 0,
        color: '#f7df1e'
    },
    {
        id: 5,
        name: 'Go',
        slug: 'go',
        icon: 'fa-brands fa-golang',
        iconClass: 'go',
        description: 'Bahasa modern dari Google, efisien untuk backend dan microservices.',
        level: 'intermediate',
        stats: {
            levels: 4,
            materials: 26,
            exercises: 9,
            projects: 3
        },
        isActive: false,
        isPopular: false,
        isNew: true,
        progress: 0,
        color: '#00add8'
    },
    {
        id: 6,
        name: 'Rust',
        slug: 'rust',
        icon: 'fa-brands fa-rust',
        iconClass: 'rust',
        description: 'Bahasa sistem yang fokus pada keamanan memory dan performa tinggi.',
        level: 'advanced',
        stats: {
            levels: 5,
            materials: 30,
            exercises: 10,
            projects: 4
        },
        isActive: false, // Coming soon
        isPopular: false,
        isNew: false,
        progress: 0,
        color: '#dea584'
    },
    {
        id: 7,
        name: 'PHP',
        slug: 'php',
        icon: 'fa-brands fa-php',
        iconClass: 'php',
        description: 'Bahasa populer untuk web development, terutama di WordPress dan Laravel.',
        level: 'beginner',
        stats: {
            levels: 4,
            materials: 28,
            exercises: 8,
            projects: 3
        },
        isActive: true,
        isPopular: true,
        isNew: false,
        progress: 75,
        color: '#777bb3'
    },
    {
        id: 8,
        name: 'Ruby',
        slug: 'ruby',
        icon: 'fa-brands fa-ruby',
        iconClass: 'ruby',
        description: 'Bahasa dengan sintaks elegan, populer dengan framework Ruby on Rails.',
        level: 'intermediate',
        stats: {
            levels: 4,
            materials: 25,
            exercises: 7,
            projects: 3
        },
        isActive: true,
        isPopular: false,
        isNew: false,
        progress: 15,
        color: '#cc342d'
    },
    {
        id: 9,
        name: 'Kotlin',
        slug: 'kotlin',
        icon: 'fa-brands fa-kotlin',
        iconClass: 'kotlin',
        description: 'Bahasa modern untuk Android development, fully interoperable dengan Java.',
        level: 'intermediate',
        stats: {
            levels: 4,
            materials: 26,
            exercises: 8,
            projects: 3
        },
        isActive: false, // Coming soon
        isPopular: true,
        isNew: true,
        progress: 0,
        color: '#7f52ff'
    }
];

let currentUser = {
    isLoggedIn: false,
    name: 'Guest'
};

let currentFilter = 'all';
let currentSort = 'popular';

// DOM Elements
const languageGrid = document.getElementById('language-grid');
const loadingState = document.getElementById('loading-state');
const emptyState = document.getElementById('empty-state');
const filterLevel = document.getElementById('filter-level');
const sortBy = document.getElementById('sort-by');
const loginToggle = document.getElementById('login-status-toggle');
const loginStatusText = document.getElementById('login-status-text');
const navAuth = document.getElementById('nav-auth');

document.addEventListener('DOMContentLoaded', function() {
    initializeNavbar();
    loadLanguages();
    setupEventListeners();
});

// Load and display languages
function loadLanguages() {
    // Show loading
    loadingState.style.display = 'block';
    languageGrid.style.display = 'none';
    emptyState.style.display = 'none';
    
    // Simulate network delay
    setTimeout(() => {
        let filteredLanguages = filterLanguages(languagesData, currentFilter);
        filteredLanguages = sortLanguages(filteredLanguages, currentSort);
        
        displayLanguages(filteredLanguages);
        
        loadingState.style.display = 'none';
        languageGrid.style.display = 'grid';
        
        if (filteredLanguages.length === 0) {
            emptyState.style.display = 'block';
        }
    }, 500);
}

// Filter languages by level
function filterLanguages(languages, level) {
    if (level === 'all') return languages;
    return languages.filter(lang => lang.level === level);
}

// Sort languages
function sortLanguages(languages, sortBy) {
    const sorted = [...languages];
    
    switch(sortBy) {
        case 'popular':
            return sorted.sort((a, b) => (b.isPopular ? 1 : 0) - (a.isPopular ? 1 : 0));
        case 'newest':
            return sorted.sort((a, b) => (b.isNew ? 1 : 0) - (a.isNew ? 1 : 0));
        case 'name-asc':
            return sorted.sort((a, b) => a.name.localeCompare(b.name));
        case 'name-desc':
            return sorted.sort((a, b) => b.name.localeCompare(a.name));
        case 'level-asc':
            return sorted.sort((a, b) => a.stats.levels - b.stats.levels);
        case 'level-desc':
            return sorted.sort((a, b) => b.stats.levels - a.stats.levels);
        default:
            return sorted;
    }
}

// Display languages in grid
function displayLanguages(languages) {
    languageGrid.innerHTML = '';
    
    languages.forEach(lang => {
        const card = createLanguageCard(lang);
        languageGrid.appendChild(card);
    });
}

// Create language card element
function createLanguageCard(language) {
    const card = document.createElement('div');
    card.className = `language-card ${!language.isActive ? 'coming-soon' : ''}`;
    
    // Coming soon badge
    const comingSoonBadge = !language.isActive ? 
        '<span class="coming-soon-badge">Coming Soon</span>' : '';
    
    // Progress bar (only if user logged in and has progress > 0)
    const progressBar = currentUser.isLoggedIn && language.progress > 0 ? `
        <div class="progress-section">
            <div class="progress-header">
                <span class="progress-label">Progress Anda:</span>
                <span class="progress-percentage">${language.progress}%</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: ${language.progress}%"></div>
            </div>
        </div>
    ` : '';
    
    // Button (disabled if coming soon)
    const button = language.isActive ? 
        `<a href="/roadmap/${language.slug}" class="btn-start">Lihat Roadmap</a>` :
        `<button class="btn-start" disabled style="opacity: 0.5; cursor: not-allowed;">Segera Hadir</button>`;
    
    card.innerHTML = `
        ${comingSoonBadge}
        <div class="language-header">
            <div class="language-icon ${language.iconClass}">
                <i class="${language.icon}"></i>
            </div>
            <div class="language-name">
                <h3>${language.name}</h3>
                <p>${language.level.charAt(0).toUpperCase() + language.level.slice(1)} Level</p>
            </div>
        </div>
        <div class="language-body">
            <p class="language-description">${language.description}</p>
            <div class="language-stats">
                <div class="stat-item">
                    <span class="stat-value">${language.stats.levels}</span>
                    <span class="stat-label">Level</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">${language.stats.materials}+</span>
                    <span class="stat-label">Materi</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">${language.stats.exercises}</span>
                    <span class="stat-label">Latihan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">${language.stats.projects}</span>
                    <span class="stat-label">Project</span>
                </div>
            </div>
            ${progressBar}
            ${button}
        </div>
    `;
    
    return card;
}

// Setup event listeners
function setupEventListeners() {
    // Filter by level
    if (filterLevel) {
        filterLevel.addEventListener('change', function(e) {
            currentFilter = e.target.value;
            loadLanguages();
        });
    }
    
    // Sort by
    if (sortBy) {
        sortBy.addEventListener('change', function(e) {
            currentSort = e.target.value;
            loadLanguages();
        });
    }
    
    // Login status toggle (untuk demo)
    if (loginToggle) {
        loginToggle.addEventListener('change', function(e) {
            currentUser.isLoggedIn = e.target.checked;
            currentUser.name = currentUser.isLoggedIn ? 'Andi Pratama' : 'Guest';
            
            loginStatusText.textContent = currentUser.isLoggedIn ? 'Logged In' : 'Belum Login';
            
            updateNavbarAuth();
            loadLanguages(); // Reload cards dengan progress bar
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const navMenu = document.getElementById('nav-menu');
        const navToggle = document.getElementById('nav-toggle');
        
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
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

// Animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe language cards
document.querySelectorAll('.language-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(card);
});

// Export functions for global use (if needed)
window.bahasaPage = {
    filterLanguages,
    sortLanguages,
    loadLanguages
};