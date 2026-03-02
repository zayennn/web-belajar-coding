document.addEventListener('DOMContentLoaded', function () {
    // Demo Code Editor Simulation
    const runButton = document.getElementById('demo-run-btn');
    const outputDiv = document.getElementById('demo-output');
    const editorContent = document.getElementById('demo-editor-content');

    if (runButton && outputDiv && editorContent) {
        runButton.addEventListener('click', function () {
            // Simulasi loading state
            const originalText = runButton.innerHTML;
            runButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Running...';
            runButton.disabled = true;
            
            // Simulasi proses eksekusi
            setTimeout(() => {
                const code = editorContent.innerText;

                // Deteksi tipe output berdasarkan konten
                if (code.includes('println') || code.includes('print')) {
                    // Cek apakah ada angka atau teks spesifik
                    if (code.includes('angka = 10') || code.includes('Nilai angka')) {
                        outputDiv.innerHTML = `
                            <div class="output-header">
                                <span><i class="fas fa-terminal"></i> Output</span>
                                <span class="output-status">Selesai dalam 0.23s</span>
                            </div>
                            <div class="output-content">
                                <div class="output-line">Belajar coding itu menyenangkan!</div>
                                <div class="output-line">Nilai angka: 10</div>
                                <div class="output-line" style="color: #6a9955;">Program selesai (exit code 0)</div>
                            </div>
                        `;
                    } else if (code.includes('Hello, CodeMaster')) {
                        outputDiv.innerHTML = `
                            <div class="output-header">
                                <span><i class="fas fa-terminal"></i> Output</span>
                                <span class="output-status">Selesai dalam 0.18s</span>
                            </div>
                            <div class="output-content">
                                <div class="output-line">Hello, CodeMaster!</div>
                                <div class="output-line" style="color: #6a9955;">Program selesai (exit code 0)</div>
                            </div>
                        `;
                    } else {
                        outputDiv.innerHTML = `
                            <div class="output-header">
                                <span><i class="fas fa-terminal"></i> Output</span>
                                <span class="output-status">Selesai dalam 0.15s</span>
                            </div>
                            <div class="output-content">
                                <div class="output-line">Hello World!</div>
                                <div class="output-line" style="color: #6a9955;">Program selesai (exit code 0)</div>
                            </div>
                        `;
                    }
                } else {
                    outputDiv.innerHTML = `
                        <div class="output-header">
                            <span><i class="fas fa-terminal"></i> Output</span>
                            <span class="output-status">Error (0.05s)</span>
                        </div>
                        <div class="output-content" style="color: #ff6b6b;">
                            <div class="output-line">Error: No print statement found</div>
                            <div class="output-line" style="color: #ff6b6b;">Main.java:3: error: ';' expected</div>
                            <div class="output-line" style="color: #ff6b6b;">System.out.println("Hello")</div>
                            <div class="output-line" style="color: #ff6b6b;">                           ^</div>
                        </div>
                    `;
                }

                // Animasi output
                outputDiv.style.animation = 'none';
                outputDiv.offsetHeight; // Trigger reflow
                outputDiv.style.animation = 'fadeInUp 0.5s ease-out';

                // Kembalikan tombol ke状態 awal
                runButton.innerHTML = originalText;
                runButton.disabled = false;
            }, 800);
        });
    }

    // Parallax effect untuk hero section
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.3; // Efek lebih subtle
            
            // Hanya terapkan jika tidak di mobile
            if (window.innerWidth > 768) {
                hero.style.backgroundPosition = `center ${rate}px`;
            }
        });
    }

    // Intersection Observer untuk fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Trigger counter animation jika ini adalah stat section
                if (entry.target.classList.contains('hero') || entry.target.querySelector('.stat-number')) {
                    animateStats(entry.target);
                }
            }
        });
    }, observerOptions);

    // Observe semua section
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(section);
    });

    // Counter animation untuk stats
    function animateStats(container) {
        const statNumbers = container.querySelectorAll('.stat-number');
        
        statNumbers.forEach(stat => {
            // Ambil angka dari teks (misal "50+" -> 50)
            const text = stat.textContent;
            const target = parseInt(text.replace(/[^0-9]/g, ''));
            
            if (!isNaN(target)) {
                let current = 0;
                const increment = target / 50; // 50 steps
                const suffix = text.includes('+') ? '+' : '';
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + suffix;
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + suffix;
                    }
                }, 20);
            }
        });
    }

    // Hover effects untuk cards
    document.querySelectorAll('.feature-card, .language-card, .audience-card, .testimonial-card').forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
        });
    });

    // Tab switching di editor
    const editorTabs = document.querySelectorAll('.editor-tab');
    if (editorTabs.length > 0) {
        editorTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                editorTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Get the code area
                const codeArea = document.querySelector('.code-area');
                const lineNumbers = document.querySelector('.line-numbers');
                
                if (codeArea) {
                    if (this.textContent.includes('Latihan.java')) {
                        // Update line numbers
                        if (lineNumbers) {
                            lineNumbers.innerHTML = Array.from({length: 9}, (_, i) => `<span>${i + 1}</span>`).join('');
                        }
                        
                        // Update code content
                        codeArea.innerHTML = `
                            <pre><span class="keyword">public class</span> <span class="class">Latihan</span> {</pre>
                            <pre>    <span class="keyword">public static void</span> <span class="method">main</span>(String[] args) {</pre>
                            <pre>        <span class="comment">// TODO: Tampilkan "Halo Dunia"</span></pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Halo Dunia"</span>);</pre>
                            <pre>        </pre>
                            <pre>        <span class="comment">// Buat variabel dan tampilkan</span></pre>
                            <pre>        <span class="keyword">String</span> nama = <span class="string">"CodeMaster"</span>;</pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Selamat datang di "</span> + nama);</pre>
                            <pre>    }</pre>
                            <pre>}</pre>
                        `;
                    } else {
                        // Update line numbers
                        if (lineNumbers) {
                            lineNumbers.innerHTML = Array.from({length: 10}, (_, i) => `<span>${i + 1}</span>`).join('');
                        }
                        
                        // Update code content
                        codeArea.innerHTML = `
                            <pre><span class="keyword">public class</span> <span class="class">Main</span> {</pre>
                            <pre>    <span class="keyword">public static void</span> <span class="method">main</span>(String[] args) {</pre>
                            <pre>        <span class="comment">// Tampilkan pesan ke layar</span></pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Belajar coding itu menyenangkan!"</span>);</pre>
                            <pre>        </pre>
                            <pre>        <span class="comment">// Deklarasi variabel</span></pre>
                            <pre>        <span class="keyword">int</span> angka = <span class="number">10</span>;</pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Nilai angka: "</span> + angka);</pre>
                            <pre>    }</pre>
                            <pre>}</pre>
                        `;
                    }
                }
            });
        });
    }

    // Glow effect untuk roadmap badges
    const levelBadges = document.querySelectorAll('.level-badge');
    levelBadges.forEach(badge => {
        badge.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 0 15px rgba(0, 255, 157, 0.5)';
        });
        
        badge.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });

    // Smooth scroll untuk CTA buttons (tanpa mengganggu navbar.js)
    document.querySelectorAll('.btn-primary, .btn-secondary, .cta-button, .btn-detail').forEach(button => {
        button.addEventListener('click', function(e) {
            // Hanya terapkan jika link mengarah ke anchor
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                
                const targetId = href;
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Animation untuk roadmap items
    const roadmapItems = document.querySelectorAll('.roadmap-level');
    const roadmapObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Stagger animation
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';
                }, index * 150);
            }
        });
    }, { threshold: 0.2 });

    roadmapItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';
        item.style.transition = 'all 0.5s ease';
        roadmapObserver.observe(item);
    });

    // Tooltip untuk fitur-fitur editor
    const featureTags = document.querySelectorAll('.feature-tag');
    featureTags.forEach(tag => {
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.backgroundColor = 'rgba(0, 255, 157, 0.1)';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.backgroundColor = '';
        });
    });

    // Counter untuk roadmap note (optional)
    const roadmapNote = document.querySelector('.roadmap-note');
    if (roadmapNote) {
        roadmapNote.addEventListener('mouseenter', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'rotate(360deg)';
                icon.style.transition = 'transform 0.5s ease';
            }
        });
        
        roadmapNote.addEventListener('mouseleave', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'rotate(0deg)';
            }
        });
    }
});

// Window load event
window.addEventListener('load', function () {
    document.body.classList.add('loaded');
    
    // Trigger initial animations untuk stats yang mungkin sudah terlihat
    const heroSection = document.querySelector('.hero');
    if (heroSection && isElementInViewport(heroSection)) {
        const stats = heroSection.querySelectorAll('.stat-number');
        stats.forEach(stat => {
            // Trigger counter animation
            const text = stat.textContent;
            const target = parseInt(text.replace(/[^0-9]/g, ''));
            if (!isNaN(target)) {
                stat.textContent = '0+';
                setTimeout(() => {
                    // Counter akan di-trigger oleh observer
                }, 100);
            }
        });
    }
});

// Helper function untuk cek apakah element dalam viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Validasi functions (opsional, bisa dipanggil jika diperlukan)
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    return password.length >= 6;
}

// Error handling untuk images
document.querySelectorAll('img').forEach(img => {
    img.addEventListener('error', function () {
        this.style.display = 'none';
        // Optional: tambah placeholder
        const parent = this.parentElement;
        if (parent) {
            const placeholder = document.createElement('div');
            placeholder.className = 'image-placeholder';
            placeholder.innerHTML = '<i class="fas fa-image"></i>';
            parent.appendChild(placeholder);
        }
    });
});

// Handle resize events untuk responsive behavior
window.addEventListener('resize', function() {
    // Disable parallax on mobile
    const hero = document.querySelector('.hero');
    if (hero) {
        if (window.innerWidth <= 768) {
            hero.style.backgroundPosition = 'center';
        }
    }
    
    // Re-check visibility for stats
    const heroSection = document.querySelector('.hero');
    if (heroSection && isElementInViewport(heroSection)) {
        // Trigger stats jika perlu
    }
});

// Optional: Copy code functionality
function setupCopyButtons() {
    const codeBlocks = document.querySelectorAll('.code-area');
    codeBlocks.forEach(block => {
        // Bisa ditambahkan copy button jika diperlukan
    });
}

// Initialize copy buttons jika ada
setupCopyButtons();