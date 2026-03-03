// Roadmap Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // State management
    let isLoggedIn = true; // Default untuk demo
    
    // DOM Elements
    const loginToggle = document.getElementById('login-status-toggle');
    const loginStatusText = document.getElementById('login-status-text');
    const progressContainer = document.getElementById('progress-container');
    const progressPercentage = document.getElementById('progress-percentage');
    const progressBarFill = document.getElementById('progress-bar-fill');
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    // Progress data
    const progressData = {
        completed: 2, // Level 1 & 2 selesai
        total: 5,
        inProgress: 1, // Level 3
        locked: 2, // Level 4 & 5
        nextLevel: 'Level 4 - Collections & Exception Handling'
    };
    
    // Initialize
    initializeProgress();
    setupEventListeners();
    
    function initializeProgress() {
        updateProgressDisplay();
    }
    
    function setupEventListeners() {
        // Login toggle
        if (loginToggle) {
            loginToggle.addEventListener('change', function(e) {
                isLoggedIn = e.target.checked;
                loginStatusText.textContent = isLoggedIn ? 'Logged In' : 'Not Logged In';
                
                if (isLoggedIn) {
                    progressContainer.classList.add('active');
                    updateProgressDisplay();
                } else {
                    progressContainer.classList.remove('active');
                }
                
                // Update level actions based on login status
                updateLevelActions();
            });
        }
        
        // Continue buttons
        document.querySelectorAll('.btn-continue').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const level = this.closest('.timeline-item');
                const levelNumber = level.dataset.level;
                
                // Simulate starting/continuing level
                alert(`Melanjutkan Level ${levelNumber}: OOP`);
                
                // In real app, redirect to lesson page
                // window.location.href = `/belajar/java/level-${levelNumber}`;
            });
        });
        
        // Review buttons (for completed levels)
        document.querySelectorAll('.btn-review').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const level = this.closest('.timeline-item');
                const levelNumber = level.dataset.level;
                
                alert(`Review Level ${levelNumber}`);
            });
        });
        
        // Materi item clicks (for demo)
        document.querySelectorAll('.materi-list li:not(.locked)').forEach(item => {
            item.addEventListener('click', function() {
                const materiName = this.querySelector('span')?.textContent || 'Materi';
                alert(`Membuka: ${materiName}\n(Demo - akan redirect ke halaman materi)`);
            });
        });
        
        // Project card clicks
        document.querySelectorAll('.project-card:not(.locked)').forEach(card => {
            card.addEventListener('click', function() {
                const projectName = this.querySelector('strong')?.textContent || 'Project';
                alert(`Membuka: ${projectName}\n(Demo - akan redirect ke halaman project)`);
            });
        });
    }
    
    function updateProgressDisplay() {
        if (!isLoggedIn) return;
        
        const percentage = Math.round((progressData.completed / progressData.total) * 100);
        
        if (progressPercentage) {
            progressPercentage.textContent = `${percentage}%`;
        }
        
        if (progressBarFill) {
            progressBarFill.style.width = `${percentage}%`;
        }
        
        const progressDetail = document.querySelector('.progress-detail');
        if (progressDetail) {
            progressDetail.innerHTML = `
                <span>${progressData.completed} dari ${progressData.total} level selesai</span>
                <span class="next-level">Next: ${progressData.nextLevel}</span>
            `;
        }
    }
    
    function updateLevelActions() {
        timelineItems.forEach(item => {
            const status = item.dataset.status;
            const actions = item.querySelector('.level-actions');
            
            if (!actions) return;
            
            if (!isLoggedIn) {
                // If not logged in, show login prompt
                actions.innerHTML = `
                    <button class="btn-locked" onclick="alert('Silakan login terlebih dahulu')">
                        <i class="fas fa-lock"></i> Login untuk mengakses
                    </button>
                `;
            } else {
                // Restore original buttons based on status
                if (status === 'completed') {
                    actions.innerHTML = `
                        <button class="btn-review" disabled>
                            <i class="fas fa-check"></i> Selesai
                        </button>
                    `;
                } else if (status === 'in-progress') {
                    actions.innerHTML = `
                        <button class="btn-continue">
                            <i class="fas fa-play"></i> Lanjutkan Belajar
                        </button>
                    `;
                } else if (status === 'locked') {
                    // Keep locked state
                }
            }
        });
    }
    
    // Simulate progress update (for demo)
    window.simulateProgress = function(levelCompleted) {
        if (levelCompleted === 3) {
            progressData.completed = 3;
            progressData.inProgress = 0;
            progressData.locked = 2;
            progressData.nextLevel = 'Level 4 - Collections & Exception Handling';
            
            updateProgressDisplay();
            
            // Update UI to show level 3 as completed
            const level3 = document.querySelector('[data-level="3"]');
            if (level3) {
                level3.dataset.status = 'completed';
                
                // Update marker
                const marker = level3.querySelector('.marker-dot');
                marker.classList.remove('in-progress');
                marker.classList.add('completed');
                marker.innerHTML = '<i class="fas fa-check"></i>';
                
                // Update status badge
                const statusBadge = level3.querySelector('.status-badge');
                statusBadge.classList.remove('in-progress');
                statusBadge.classList.add('completed');
                statusBadge.innerHTML = '<i class="fas fa-check-circle"></i> Selesai';
                
                // Update actions
                const actions = level3.querySelector('.level-actions');
                actions.innerHTML = `
                    <button class="btn-review" disabled>
                        <i class="fas fa-check"></i> Selesai
                    </button>
                `;
            }
            
            // Unlock level 4
            const level4 = document.querySelector('[data-level="4"]');
            if (level4) {
                level4.dataset.status = 'in-progress';
                level4.classList.remove('locked');
                
                const content = level4.querySelector('.timeline-content');
                content.classList.remove('locked');
                
                // Update marker
                const marker = level4.querySelector('.marker-dot');
                marker.classList.remove('locked');
                marker.classList.add('in-progress');
                marker.innerHTML = '<i class="fas fa-play"></i>';
                
                // Update status badge
                const statusBadge = level4.querySelector('.status-badge');
                statusBadge.classList.remove('locked');
                statusBadge.classList.add('in-progress');
                statusBadge.innerHTML = '<i class="fas fa-play-circle"></i> Sedang Berjalan';
                
                // Update materi items
                const materiItems = level4.querySelectorAll('.materi-list li');
                materiItems.forEach((item, index) => {
                    item.classList.remove('locked');
                    if (index === 0) {
                        item.classList.add('in-progress');
                        item.innerHTML = '<i class="fas fa-play-circle"></i> Array dan ArrayList<span class="materi-desc">Struktur data dasar</span>';
                    } else {
                        item.classList.add('locked');
                    }
                });
                
                // Update actions
                const actions = level4.querySelector('.level-actions');
                actions.innerHTML = `
                    <button class="btn-continue">
                        <i class="fas fa-play"></i> Mulai Level
                    </button>
                `;
                
                // Remove unlock condition
                const unlockCondition = level4.querySelector('.unlock-condition');
                if (unlockCondition) {
                    unlockCondition.remove();
                }
            }
        }
    };
    
    // Add keyboard shortcut for demo (press 'p' to simulate progress)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'p' || e.key === 'P') {
            simulateProgress(3);
        }
    });
    
    console.log('Roadmap page loaded. Press "P" to simulate completing Level 3');
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