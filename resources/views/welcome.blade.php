@extends('layouts.app')

@section('content')
    <!-- 2️⃣ Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Belajar Coding Dari Nol <span class="gradient-text">Sampai Siap Kerja.</span></h1>
                <p class="hero-subtitle">Materi terstruktur, latihan langsung di browser, dan project nyata. Ga cuma nonton.
                    Lu langsung ngoding.</p>
                <div class="hero-cta">
                    <a href="#" class="btn btn-primary">Mulai Belajar</a>
                    <a href="#" class="btn btn-secondary">Lihat Materi</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-mockup">
                    <div class="code-header">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                        <span class="filename">Main.java</span>
                    </div>
                    <div class="code-body">
                        <pre><span class="keyword">public class</span> <span class="class">Main</span> {</pre>
                        <pre>    <span class="keyword">public static void</span> <span class="method">main</span>(String[] args) {</pre>
                        <pre>        System.out.<span class="method">println</span>(<span class="string">"Hello World!"</span>);</pre>
                        <pre>    }</pre>
                        <pre>}</pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3️⃣ Section "Kenapa Harus Di Sini?" -->
    <section class="why-us">
        <div class="container">
            <h2 class="section-title">Kenapa Harus <span class="gradient-text">Di Sini?</span></h2>
            <div class="card-grid">
                <div class="feature-card">
                    <div class="card-icon">💻</div>
                    <h3>Ngoding Langsung di Browser</h3>
                    <p>Ga perlu install ribet. Tulis, run, lihat hasil langsung.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📈</div>
                    <h3>Level System</h3>
                    <p>Belajar per level. Ga lompat-lompat kayak tutorial YouTube random.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">🎯</div>
                    <h3>Mini Project Nyata</h3>
                    <p>Setiap level ada project kecil biar ngerti bukan cuma hafal.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📊</div>
                    <h3>Progress Tracker</h3>
                    <p>Lu tau udah sejauh apa. Ga belajar tapi ngerasa pinter doang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4️⃣ Section Bahasa yang Tersedia -->
    <section id="bahasa" class="languages">
        <div class="container">
            <h2 class="section-title">Bahasa Yang <span class="gradient-text">Tersedia</span></h2>
            <div class="language-grid">
                <!-- Java Card -->
                <div class="language-card">
                    <div class="language-header java">
                        <h3>Java</h3>
                    </div>
                    <div class="language-body">
                        <div class="language-stats">
                            <span>5 Level</span> •
                            <span>32 Materi</span> •
                            <span>10 Latihan</span> •
                            <span>5 Mini Project</span>
                        </div>
                        <div class="language-meta">
                            <span><i class="far fa-clock"></i> Estimasi: 40 jam</span>
                        </div>
                        <a href="#" class="btn-roadmap">Lihat Roadmap <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Python Card -->
                <div class="language-card">
                    <div class="language-header python">
                        <h3>Python</h3>
                    </div>
                    <div class="language-body">
                        <div class="language-stats">
                            <span>6 Level</span> •
                            <span>38 Materi</span> •
                            <span>12 Latihan</span> •
                            <span>6 Mini Project</span>
                        </div>
                        <div class="language-meta">
                            <span><i class="far fa-clock"></i> Estimasi: 45 jam</span>
                        </div>
                        <a href="#" class="btn-roadmap">Lihat Roadmap <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- C Card -->
                <div class="language-card">
                    <div class="language-header c">
                        <h3>C</h3>
                    </div>
                    <div class="language-body">
                        <div class="language-stats">
                            <span>4 Level</span> •
                            <span>28 Materi</span> •
                            <span>8 Latihan</span> •
                            <span>4 Mini Project</span>
                        </div>
                        <div class="language-meta">
                            <span><i class="far fa-clock"></i> Estimasi: 35 jam</span>
                        </div>
                        <a href="#" class="btn-roadmap">Lihat Roadmap <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5️⃣ Contoh Roadmap (Preview) -->
    <section id="roadmap" class="roadmap-preview">
        <div class="container">
            <h2 class="section-title">Roadmap <span class="gradient-text">Java</span></h2>
            <p class="section-subtitle">Struktur belajar yang jelas, ga bakal nyasar</p>
            <div class="roadmap-container">
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 1</span>
                        <h3>Fundamental</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> Program pertama</li>
                        <li><i class="fas fa-check-circle"></i> Variable</li>
                        <li><i class="fas fa-check-circle"></i> Tipe data</li>
                        <li><i class="fas fa-check-circle"></i> Input Output</li>
                        <li class="badge-item"><span class="badge">Latihan</span> <span class="badge">Mini Project</span>
                        </li>
                    </ul>
                </div>
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 2</span>
                        <h3>Control Flow</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> If Else</li>
                        <li><i class="fas fa-check-circle"></i> Switch</li>
                        <li><i class="fas fa-check-circle"></i> Loop</li>
                        <li class="badge-item"><span class="badge">Latihan</span> <span class="badge">Mini Project</span>
                        </li>
                    </ul>
                </div>
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 3</span>
                        <h3>Array & Method</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> Array 1D</li>
                        <li><i class="fas fa-check-circle"></i> Array 2D</li>
                        <li><i class="fas fa-check-circle"></i> Method</li>
                        <li><i class="fas fa-check-circle"></i> Overloading</li>
                        <li class="badge-item"><span class="badge">Latihan</span> <span class="badge">Mini
                                Project</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 6️⃣ Demo Code Editor Section -->
    <section class="demo-editor">
        <div class="container">
            <h2 class="section-title">Coba <span class="gradient-text">Langsung</span></h2>
            <p class="section-subtitle">Klik Run dan lihat hasilnya langsung di browser</p>
            <div class="editor-container">
                <div class="editor-panel">
                    <div class="editor-header">
                        <span class="editor-title">main.java</span>
                        <button class="btn-run" id="demo-run-btn"><i class="fas fa-play"></i> Run</button>
                    </div>
                    <div class="editor-content" id="demo-editor-content">
                        <pre><span class="keyword">public class</span> <span class="class">Main</span> {</pre>
                        <pre>    <span class="keyword">public static void</span> <span class="method">main</span>(String[] args) {</pre>
                        <pre>        System.out.<span class="method">println</span>(<span class="string">"Hello World!"</span>);</pre>
                        <pre>    }</pre>
                        <pre>}</pre>
                    </div>
                </div>
                <div class="output-panel" id="demo-output">
                    <div class="output-header">
                        <span>Output</span>
                    </div>
                    <div class="output-content">
                        Hello World!
                    </div>
                </div>
            </div>
            <p class="demo-caption"><i class="fas fa-mouse-pointer"></i> Kode bisa diedit, klik Run untuk lihat hasilnya
            </p>
        </div>
    </section>

    <!-- 7️⃣ Section Target Audience -->
    <section class="target-audience">
        <div class="container">
            <h2 class="section-title">Buat <span class="gradient-text">Siapa?</span></h2>
            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-icon">🎓</div>
                    <h3>Siswa SMA</h3>
                    <p>Yang mau masuk IT tapi bingung mulai dari mana</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">📚</div>
                    <h3>Mahasiswa Informatika</h3>
                    <p>Semester awal yang butuh pondasi kuat</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">🔄</div>
                    <h3>Career Switcher</h3>
                    <p>Mau pindah karir ke dunia tech</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">🚀</div>
                    <h3>Programmer</h3>
                    <p>Yang mau belajar bahasa baru dengan cepat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8️⃣ Testimoni -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Apa Kata <span class="gradient-text">Mereka?</span></h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-text">Akhirnya ngerti Java tanpa pusing. Materinya step-by-step, langsung
                        praktek.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Andi</h4>
                            <p>Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-text">Ga nyangka bisa bikin project Python cuma dalam 2 bulan. Recommended
                        banget!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">B</div>
                        <div class="author-info">
                            <h4>Budi</h4>
                            <p>Career Switcher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-text">Roadmap-nya jelas banget. Ga kayak tutorial random di YouTube yang
                        lompat-lompat.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">C</div>
                        <div class="author-info">
                            <h4>Citra</h4>
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
            <h2 class="cta-title">Berhenti Scroll Tutorial.<br><span class="gradient-text">Mulai Ngoding Beneran.</span>
            </h2>
            <a href="#" class="btn cta-button">🚀 Daftar Gratis Sekarang</a>
        </div>
    </section>
@endsection