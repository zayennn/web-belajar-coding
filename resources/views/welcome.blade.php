@extends('layouts.app')

@section('content')
    <section id="home" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <h1>Belajar Coding Dari Nol <span>Sampai Siap Kerja.</span></h1>
                <p class="subheadline">Materi terstruktur, latihan langsung di browser, dan project nyata. Ga cuma
                    nonton. <span class="highlight">Kamu langsung ngoding.</span></p>
                <div class="hero-buttons">
                    <button class="btn btn-primary btn-large">Mulai Belajar</button>
                    <button class="btn btn-outline btn-large">Lihat Materi</button>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Materi</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">10k+</span>
                        <span class="stat-label">Siswa</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Project</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-editor-mockup">
                    <div class="editor-header">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                        <span class="filename">main.java</span>
                    </div>
                    <div class="editor-content">
                        <pre><code><span class="keyword">public</span> <span class="keyword">class</span> <span class="class">Main</span> {
    <span class="keyword">public</span> <span class="keyword">static</span> <span class="keyword">void</span> <span class="function">main</span>(String[] args) {
        <span class="comment">// Belajar coding jadi mudah</span>
        System.out.println(<span class="string">"Hello, MasterCode!"</span>);
        
        <span class="keyword">for</span>(<span class="keyword">int</span> i = 1; i <= 5; i++) {
            System.out.println(<span class="string">"Level "</span> + i);
        }
    }
}</code></pre>
                    </div>
                    <div class="editor-footer">
                        <span class="run-btn"><i class="fas fa-play"></i> Run</span>
                        <span class="output-preview">Output: Hello, MasterCode! Level 1 ...</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3️⃣ Section Kenapa Harus Di Sini -->
    <section class="why-us">
        <div class="container">
            <div class="section-header">
                <h2>Kenapa Harus <span>Di Sini?</span></h2>
                <p>Kami bikin belajar coding jadi pengalaman yang beda</p>
            </div>
            <div class="cards-grid">
                <div class="card">
                    <div class="card-icon">💻</div>
                    <h3>Ngoding Langsung di Browser</h3>
                    <p>Ga perlu install ribet. Tulis, run, lihat hasil langsung di browser. Bisa di mana aja.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📈</div>
                    <h3>Level System</h3>
                    <p>Belajar per level. Ga lompat-lompat kayak tutorial YouTube random. Progress jelas.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3>Mini Project Nyata</h3>
                    <p>Setiap level ada project kecil biar ngerti bukan cuma hafal. Langsung praktek.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3>Progress Tracker</h3>
                    <p>Lu tau udah sejauh apa. Ga belajar tapi ngerasa pinter doang. Data realtime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4️⃣ Section Bahasa yang Tersedia -->
    <section id="bahasa" class="languages">
        <div class="container">
            <div class="section-header">
                <h2>Bahasa yang <span>Tersedia</span></h2>
                <p>Pilih bahasa yang mau lu kuasai</p>
            </div>
            <div class="language-cards">
                <div class="lang-card">
                    <div class="lang-icon">☕</div>
                    <h3>Java</h3>
                    <div class="lang-details">
                        <span><i class="fas fa-layer-group"></i> 5 Level</span>
                        <span><i class="fas fa-book"></i> 32 Materi</span>
                        <span><i class="fas fa-clock"></i> 40 Jam</span>
                    </div>
                    <p class="lang-desc">10 Latihan • 5 Mini Project</p>
                    <button class="btn btn-primary btn-block">Lihat Roadmap</button>
                </div>
                <div class="lang-card featured">
                    <div class="popular-badge">Paling Populer</div>
                    <div class="lang-icon">🐍</div>
                    <h3>Python</h3>
                    <div class="lang-details">
                        <span><i class="fas fa-layer-group"></i> 6 Level</span>
                        <span><i class="fas fa-book"></i> 40 Materi</span>
                        <span><i class="fas fa-clock"></i> 45 Jam</span>
                    </div>
                    <p class="lang-desc">15 Latihan • 8 Mini Project</p>
                    <button class="btn btn-primary btn-block">Lihat Roadmap</button>
                </div>
                <div class="lang-card">
                    <div class="lang-icon">⚡</div>
                    <h3>C</h3>
                    <div class="lang-details">
                        <span><i class="fas fa-layer-group"></i> 4 Level</span>
                        <span><i class="fas fa-book"></i> 28 Materi</span>
                        <span><i class="fas fa-clock"></i> 35 Jam</span>
                    </div>
                    <p class="lang-desc">12 Latihan • 4 Mini Project</p>
                    <button class="btn btn-primary btn-block">Lihat Roadmap</button>
                </div>
            </div>
        </div>
    </section>

    <!-- 5️⃣ Contoh Roadmap Preview -->
    <section id="roadmap" class="roadmap-preview">
        <div class="container">
            <div class="section-header">
                <h2>Roadmap <span>Terstruktur</span></h2>
                <p>Ga bakal nyasar. Tinggal ikutin aja.</p>
            </div>
            <div class="roadmap-container">
                <div class="roadmap-tabs">
                    <button class="tab-btn active">Java</button>
                    <button class="tab-btn">Python</button>
                    <button class="tab-btn">C</button>
                </div>
                <div class="roadmap-content active" id="java-roadmap">
                    <div class="level-card">
                        <div class="level-header">
                            <h3>Level 1: Fundamental</h3>
                            <span class="level-duration">8 Jam</span>
                        </div>
                        <ul class="topic-list">
                            <li><i class="fas fa-check-circle"></i> Program pertama</li>
                            <li><i class="fas fa-check-circle"></i> Variable</li>
                            <li><i class="fas fa-check-circle"></i> Tipe data</li>
                            <li><i class="fas fa-check-circle"></i> Input Output</li>
                            <li class="badge-item"><span class="badge">Latihan</span> 5 soal</li>
                            <li class="badge-item"><span class="badge project">Mini Project</span> Kalkulator sederhana
                            </li>
                        </ul>
                    </div>
                    <div class="level-card">
                        <div class="level-header">
                            <h3>Level 2: Control Flow</h3>
                            <span class="level-duration">10 Jam</span>
                        </div>
                        <ul class="topic-list">
                            <li><i class="fas fa-check-circle"></i> If Else</li>
                            <li><i class="fas fa-check-circle"></i> Switch</li>
                            <li><i class="fas fa-check-circle"></i> Loop (for, while, do-while)</li>
                            <li><i class="fas fa-check-circle"></i> Break & Continue</li>
                            <li class="badge-item"><span class="badge">Latihan</span> 8 soal</li>
                            <li class="badge-item"><span class="badge project">Mini Project</span> Game tebak angka</li>
                        </ul>
                    </div>
                    <div class="level-card">
                        <div class="level-header">
                            <h3>Level 3: Array & Method</h3>
                            <span class="level-duration">12 Jam</span>
                        </div>
                        <ul class="topic-list">
                            <li><i class="fas fa-check-circle"></i> Array 1D & 2D</li>
                            <li><i class="fas fa-check-circle"></i> Method & Parameter</li>
                            <li><i class="fas fa-check-circle"></i> Overloading</li>
                            <li><i class="fas fa-check-circle"></i> Recursion</li>
                            <li class="badge-item"><span class="badge">Latihan</span> 10 soal</li>
                            <li class="badge-item"><span class="badge project">Mini Project</span> Aplikasi To-Do List
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="roadmap-cta">
                <button class="btn btn-outline">Lihat Roadmap Lengkap <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- 6️⃣ Demo Code Editor Section -->
    <section class="demo-editor">
        <div class="container">
            <div class="section-header">
                <h2>Coba <span>Live Editor</span></h2>
                <p>Tulis kode, lihat hasilnya langsung. Tanpa install.</p>
            </div>
            <div class="demo-container">
                <div class="editor-panel">
                    <div class="editor-panel-header">
                        <span class="editor-title">main.java</span>
                        <button class="btn btn-small btn-primary run-demo"><i class="fas fa-play"></i> Run</button>
                    </div>
                    <div class="code-area" contenteditable="false">
                        <pre><span class="line-numbers">1  2  3  4  5</span>
<span class="keyword">public</span> <span class="keyword">class</span> Main {
    <span class="keyword">public</span> <span class="keyword">static</span> <span class="keyword">void</span> main(String[] args) {
        System.out.println(<span class="string">"Hello World"</span>);
    }
}</pre>
                    </div>
                </div>
                <div class="output-panel">
                    <div class="output-header">
                        <span>Output</span>
                        <span class="output-clear"><i class="fas fa-eraser"></i></span>
                    </div>
                    <div class="output-content" id="demoOutput">
                        Hello World
                    </div>
                    <p class="output-hint"><i class="fas fa-info-circle"></i> Klik Run dan lihat hasilnya langsung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7️⃣ Section Target Audience -->
    <section class="target-audience">
        <div class="container">
            <div class="section-header">
                <h2>Buat <span>Siapa</span> Ini?</h2>
                <p>Kalau semua orang targetnya, berarti bukan siapa-siapa targetnya.</p>
            </div>
            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-icon">🎓</div>
                    <h3>Siswa SMA</h3>
                    <p>Yang mau masuk IT tapi bingung mulai dari mana. Dari nol sampai siap kuliah di IT.</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">📚</div>
                    <h3>Mahasiswa Informatika</h3>
                    <p>Semester awal yang butuh pondasi kuat biar ga kaget pas matkul berat.</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">💼</div>
                    <h3>Career Switcher</h3>
                    <p>Mau pindah karir ke tech tanpa harus kuliah lagi. Belajar praktis dan siap kerja.</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">🚀</div>
                    <h3>Programmer</h3>
                    <p>Yang mau belajar bahasa baru dengan struktur yang jelas dan efisien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8️⃣ Testimoni -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Apa Kata <span>Mereka</span></h2>
                <p>Yang udah gabung dan ngerasain bedanya</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Akhirnya ngerti Java tanpa pusing. Dulu cuma bisa copas kode, sekarang
                        bisa bikin program sendiri."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨‍🎓</div>
                        <div class="author-info">
                            <h4>Andi</h4>
                            <p>Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Level system-nya enak banget. Ga lompat-lompat, langsung praktek dengan
                        mini project tiap level."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👩‍💻</div>
                        <div class="author-info">
                            <h4>Rina</h4>
                            <p>Career Switcher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Live editornya bikin belajar jadi praktis. Ga perlu install Java di laptop
                        kentang saya."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨‍💻</div>
                        <div class="author-info">
                            <h4>Budi</h4>
                            <p>Siswa SMA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9️⃣ CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Berhenti Scroll Tutorial. <span>Mulai Ngoding Beneran.</span></h2>
            <p>Gabung dengan 10,000+ siswa yang udah ngerasain bedanya belajar di MasterCode</p>
            <button class="btn btn-primary btn-cta">
                🚀 Daftar Gratis Sekarang
            </button>
            <div class="trust-badges">
                <span><i class="fas fa-check-circle"></i> No credit card</span>
                <span><i class="fas fa-check-circle"></i> Akses selamanya</span>
                <span><i class="fas fa-check-circle"></i> Garansi puas</span>
            </div>
        </div>
    </section>
@endsection
