// Materi Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // State management
    let materiProgress = 0;
    let isCompleted = false;
    
    // DOM Elements
    const progressBar = document.querySelector('.progress-bar-fill');
    const progressPercent = document.querySelector('.progress-percent');
    const progressCircle = document.querySelector('.progress-fill');
    const circleText = document.querySelector('.progress-text');
    const markCompleteBtn = document.querySelector('.btn-mark-complete');
    const nextMateriBtn = document.getElementById('next-materi');
    const completionMessage = document.getElementById('completion-message');
    const tableOfContents = document.querySelectorAll('.table-of-contents a');
    const sections = document.querySelectorAll('.content-section');
    
    // Initialize
    initScrollSpy();
    initCopyButtons();
    
    function initScrollSpy() {
        window.addEventListener('scroll', function() {
            // Update scroll percentage
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercentage = (scrollTop / docHeight) * 100;
            
            // Update progress if scroll > 80%
            if (scrollPercentage >= 80 && !isCompleted && materiProgress < 80) {
                updateProgress(80);
            }
            
            // Update active section in TOC
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (scrollTop >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });
            
            tableOfContents.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    }
    
    function initCopyButtons() {
        document.querySelectorAll('.btn-copy, .btn-copy-small').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                let codeElement;
                
                // Find the nearest code block
                codeElement = this.closest('.code-example')?.querySelector('code') ||
                             this.closest('.terminal-command')?.querySelector('code');
                
                if (codeElement) {
                    const code = codeElement.textContent;
                    navigator.clipboard.writeText(code).then(() => {
                        const originalText = this.innerHTML;
                        this.innerHTML = '<i class="fas fa-check"></i> Tersalin';
                        setTimeout(() => {
                            this.innerHTML = originalText;
                        }, 2000);
                    });
                }
            });
        });
    }
    
    // Quiz functionality
    window.checkQuiz = function() {
        const answers = {
            q1: 'b',
            q2: 'c',
            q3: 'b'
        };
        
        let correctCount = 0;
        
        for (let [question, correctAnswer] of Object.entries(answers)) {
            const selected = document.querySelector(`input[name="${question}"]:checked`);
            const questionNum = question.slice(1);
            const feedbackDiv = document.querySelector(`[data-question="${questionNum}"] .quiz-feedback`);
            
            if (selected) {
                if (selected.value === correctAnswer) {
                    feedbackDiv.innerHTML = '✓ Benar!';
                    feedbackDiv.className = 'quiz-feedback correct';
                    correctCount++;
                } else {
                    feedbackDiv.innerHTML = '✗ Salah, coba lagi';
                    feedbackDiv.className = 'quiz-feedback incorrect';
                }
            } else {
                feedbackDiv.innerHTML = 'Pilih jawaban terlebih dahulu';
                feedbackDiv.className = 'quiz-feedback incorrect';
            }
        }
        
        // Update progress if quiz passed
        if (correctCount === 3 && !isCompleted) {
            updateProgress(100);
            markAsComplete();
        }
        
        // Show result message
        alert(`Nilai kuis: ${correctCount}/3 ${correctCount === 3 ? '🎉' : ''}`);
    };
    
    // Code editor functionality
    window.runCode = function() {
        const code = document.getElementById('code-editor').value;
        const outputContainer = document.getElementById('output-container');
        const outputContent = document.getElementById('output-content');
        
        // Simple simulation for demo
        outputContainer.style.display = 'block';
        
        // Check if code contains the required println statements
        if (code.includes('println("Saya sedang belajar Java")') && 
            code.includes('println("di MasterCode!")')) {
            outputContent.innerHTML = 'Saya sedang belajar Java<br>di MasterCode!';
            outputContent.style.color = 'var(--accent-primary)';
            
            // Update progress if exercise completed
            if (!isCompleted && materiProgress < 90) {
                updateProgress(90);
            }
        } else if (code.includes('println')) {
            outputContent.innerHTML = 'Kode berhasil dijalankan, tapi output belum sesuai.<br>Coba periksa teks yang diminta.';
            outputContent.style.color = 'var(--warning)';
        } else {
            outputContent.innerHTML = 'Error: Tidak ada statement println yang ditemukan';
            outputContent.style.color = 'var(--danger)';
        }
    };
    
    window.resetCode = function() {
        document.getElementById('code-editor').value = `public class Main {
    public static void main(String[] args) {
        // Tulis kode Anda di sini
        
    }
}`;
        document.getElementById('output-container').style.display = 'none';
    };
    
    window.clearOutput = function() {
        document.getElementById('output-container').style.display = 'none';
    };
    
    window.showSolution = function() {
        document.getElementById('solution-container').style.display = 'block';
    };
    
    window.hideSolution = function() {
        document.getElementById('solution-container').style.display = 'none';
    };
    
    window.markAsComplete = function() {
        if (isCompleted) return;
        
        isCompleted = true;
        updateProgress(100);
        
        // Update button
        markCompleteBtn.innerHTML = '<i class="fas fa-check-circle"></i> Selesai';
        markCompleteBtn.classList.add('completed');
        markCompleteBtn.disabled = true;
        
        // Enable next button
        if (nextMateriBtn) {
            nextMateriBtn.classList.remove('disabled');
        }
        
        // Show completion message
        if (completionMessage) {
            completionMessage.style.display = 'flex';
        }
        
        // Simple confetti effect
        createConfetti();
    };
    
    function createConfetti() {
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.animationDelay = Math.random() * 3 + 's';
            confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
            document.body.appendChild(confetti);
            
            setTimeout(() => {
                confetti.remove();
            }, 3000);
        }
    }
    
    function updateProgress(percentage) {
        materiProgress = percentage;
        
        // Update progress bar
        if (progressBar) {
            progressBar.style.width = `${percentage}%`;
        }
        
        // Update percentage text
        if (progressPercent) {
            progressPercent.textContent = `${percentage}%`;
        }
        
        // Update circle progress
        if (progressCircle) {
            const circumference = 2 * Math.PI * 36; // r=36
            const offset = circumference - (percentage / 100) * circumference;
            progressCircle.style.strokeDashoffset = offset;
        }
        
        // Update circle text
        if (circleText) {
            circleText.textContent = `${percentage}%`;
        }
    }
    
    // Smooth scroll for TOC links
    tableOfContents.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    
    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        // Ctrl+Enter to run code
        if (e.ctrlKey && e.key === 'Enter') {
            e.preventDefault();
            runCode();
        }
        
        // Ctrl+M to mark as complete
        if (e.ctrlKey && e.key === 'm') {
            e.preventDefault();
            markAsComplete();
        }
    });
    
    // Auto-save code to localStorage
    const codeEditor = document.getElementById('code-editor');
    if (codeEditor) {
        // Load saved code
        const savedCode = localStorage.getItem('java-program-pertama');
        if (savedCode) {
            codeEditor.value = savedCode;
        }
        
        // Save on input
        codeEditor.addEventListener('input', function() {
            localStorage.setItem('java-program-pertama', this.value);
        });
    }
    
    console.log('Materi page loaded. Press Ctrl+Enter to run code, Ctrl+M to mark complete');
});

// Global functions untuk onclick
function copyCode(id) {
    const codeElement = document.getElementById(id);
    if (codeElement) {
        const code = codeElement.textContent;
        navigator.clipboard.writeText(code).then(() => {
            alert('Kode berhasil disalin!');
        });
    }
}

function checkQuiz() {
    if (window.checkQuiz) {
        window.checkQuiz();
    }
}

function resetCode() {
    if (window.resetCode) {
        window.resetCode();
    }
}

function runCode() {
    if (window.runCode) {
        window.runCode();
    }
}

function clearOutput() {
    if (window.clearOutput) {
        window.clearOutput();
    }
}

function showSolution() {
    if (window.showSolution) {
        window.showSolution();
    }
}

function hideSolution() {
    if (window.hideSolution) {
        window.hideSolution();
    }
}

function markAsComplete() {
    if (window.markAsComplete) {
        window.markAsComplete();
    }
}

// Add confetti styles
const style = document.createElement('style');
style.textContent = `
    .confetti {
        position: fixed;
        width: 10px;
        height: 10px;
        background: #f00;
        top: -10px;
        z-index: 9999;
        animation: confetti-fall 3s linear forwards;
    }
    
    @keyframes confetti-fall {
        to {
            transform: translateY(100vh) rotate(720deg);
        }
    }
`;
document.head.appendChild(style);

// Safety: ensure the materi content remains visible if other scripts/styles hide it.
;(function ensureMateriVisible(){
    try {
        const css = `
            .materi-content { display: block !important; opacity: 1 !important; visibility: visible !important; }
            .content-main { display: block !important; }
        `;
        const s = document.createElement('style');
        s.setAttribute('data-fix','materi-visible');
        s.appendChild(document.createTextNode(css));
        document.head.appendChild(s);

        // Also observe DOM for accidental removals and re-add the style if needed
        const observer = new MutationObserver(() => {
            if (!document.head.contains(s)) {
                document.head.appendChild(s);
            }
            const el = document.querySelector('.materi-content');
            if (el) {
                el.style.display = 'block';
                el.style.opacity = '1';
                el.style.visibility = 'visible';
            }
        });
        observer.observe(document.documentElement, { childList: true, subtree: true });
    } catch (e) {
        console.error('materi visibility fix failed', e);
    }
})();