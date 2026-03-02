@extends('layouts.app')

@section('content')
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Belajar Coding <span class="gradient-text">Terstruktur</span> Dari Nol Hingga Mahir</h1>
                <p class="hero-subtitle">Kurikulum bertahap dengan latihan interaktif dan project nyata. Bukan sekedar video tutorial, tapi praktik langsung.</p>
                <div class="hero-cta">
                    <a href="#" class="btn btn-primary">Mulai Belajar Gratis</a>
                    <a href="#" class="btn btn-secondary">Lihat Kurikulum</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Materi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100+</span>
                        <span class="stat-label">Latihan</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Project</span>
                    </div>
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
                        <pre>        System.out.<span class="method">println</span>(<span class="string">"Hello, CodeMaster!"</span>);</pre>
                        <pre>    }</pre>
                        <pre>}</pre>
                    </div>
                    <div class="code-output">
                        <span class="output-label">Output:</span>
                        <span class="output-value">Hello, CodeMaster!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3️⃣ Mengapa Memilih Platform Ini? -->
    <section class="why-us">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih <span class="gradient-text">Platform Ini?</span></h2>
            <div class="card-grid">
                <div class="feature-card">
                    <div class="card-icon">💻</div>
                    <h3>Praktik Langsung di Browser</h3>
                    <p>Tulis kode dan jalankan langsung tanpa perlu konfigurasi lingkungan pengembangan.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📚</div>
                    <h3>Kurikulum Bertahap</h3>
                    <p>Materi disusun berdasarkan level, sehingga pembelajaran lebih terarah dan sistematis.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">🎯</div>
                    <h3>Latihan & Mini Project</h3>
                    <p>Setiap level dilengkapi latihan dan proyek kecil untuk memperkuat konsep.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📊</div>
                    <h3>Progress Tracking</h3>
                    <p>Pantau perkembangan belajar dan lanjutkan materi sesuai progres Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4️⃣ Bahasa yang Tersedia -->
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
                            <span><i class="fas fa-layer-group"></i> 5 Level</span>
                            <span><i class="fas fa-file-alt"></i> 30+ Materi</span>
                            <span><i class="fas fa-code"></i> Latihan & Mini Project</span>
                        </div>
                        <div class="language-description">
                            <p>Dasar hingga konsep OOP dengan studi kasus aplikasi nyata.</p>
                        </div>
                        <a href="#" class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Python Card -->
                <div class="language-card">
                    <div class="language-header python">
                        <h3>Python</h3>
                    </div>
                    <div class="language-body">
                        <div class="language-stats">
                            <span><i class="fas fa-layer-group"></i> 4 Level</span>
                            <span><i class="fas fa-file-alt"></i> 25+ Materi</span>
                            <span><i class="fas fa-code"></i> Latihan Interaktif</span>
                        </div>
                        <div class="language-description">
                            <p>Fundamental hingga manipulasi data dengan latihan praktis.</p>
                        </div>
                        <a href="#" class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- C Card -->
                <div class="language-card">
                    <div class="language-header c">
                        <h3>C</h3>
                    </div>
                    <div class="language-body">
                        <div class="language-stats">
                            <span><i class="fas fa-layer-group"></i> 4 Level</span>
                            <span><i class="fas fa-file-alt"></i> 20+ Materi</span>
                            <span><i class="fas fa-code"></i> Fokus Fundamental</span>
                        </div>
                        <div class="language-description">
                            <p>Pemrograman prosedural dan manajemen memori untuk pemula.</p>
                        </div>
                        <a href="#" class="btn-detail">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5️⃣ Roadmap Pembelajaran (Contoh: Java) -->
    <section id="roadmap" class="roadmap-preview">
        <div class="container">
            <h2 class="section-title">Roadmap Pembelajaran <span class="gradient-text">Java</span></h2>
            <p class="section-subtitle">Setiap level harus diselesaikan sebelum membuka level berikutnya</p>
            <div class="roadmap-container">
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 1</span>
                        <h3>Fundamental</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> Program Java Pertama</li>
                        <li><i class="fas fa-check-circle"></i> Variabel & Tipe Data</li>
                        <li><i class="fas fa-check-circle"></i> Input & Output</li>
                        <li><i class="fas fa-check-circle"></i> Penggabungan Teks dan Variabel</li>
                        <li class="badge-item">
                            <span class="badge"><i class="fas fa-pencil-alt"></i> Latihan</span>
                            <span class="badge"><i class="fas fa-project-diagram"></i> Mini Project</span>
                        </li>
                    </ul>
                </div>
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 2</span>
                        <h3>Control Flow</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> If–Else</li>
                        <li><i class="fas fa-check-circle"></i> Switch</li>
                        <li><i class="fas fa-check-circle"></i> Perulangan (For, While)</li>
                        <li class="badge-item">
                            <span class="badge"><i class="fas fa-pencil-alt"></i> Latihan</span>
                            <span class="badge"><i class="fas fa-project-diagram"></i> Mini Project</span>
                        </li>
                    </ul>
                </div>
                <div class="roadmap-level">
                    <div class="level-header">
                        <span class="level-badge">Level 3</span>
                        <h3>Array & Method</h3>
                    </div>
                    <ul class="level-items">
                        <li><i class="fas fa-check-circle"></i> Array 1 Dimensi</li>
                        <li><i class="fas fa-check-circle"></i> Array 2 Dimensi</li>
                        <li><i class="fas fa-check-circle"></i> Method & Overloading</li>
                        <li class="badge-item">
                            <span class="badge"><i class="fas fa-pencil-alt"></i> Latihan</span>
                            <span class="badge"><i class="fas fa-project-diagram"></i> Mini Project</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="roadmap-note">
                <i class="fas fa-lock-open"></i>
                <span>Setiap level akan terbuka setelah menyelesaikan level sebelumnya</span>
            </div>
        </div>
    </section>

    <!-- 6️⃣ Fitur Code Editor Interaktif -->
    <section class="demo-editor">
        <div class="container">
            <h2 class="section-title">Belajar Dengan <span class="gradient-text">Praktik Nyata</span></h2>
            <p class="section-subtitle">Editor interaktif memungkinkan Anda menulis, menjalankan, dan melihat hasil kode secara langsung</p>
            <div class="editor-container">
                <div class="editor-panel">
                    <div class="editor-header">
                        <div class="editor-tabs">
                            <span class="editor-tab active">Main.java</span>
                            <span class="editor-tab">Latihan.java</span>
                        </div>
                        <button class="btn-run" id="demo-run-btn">
                            <i class="fas fa-play"></i> Jalankan
                        </button>
                    </div>
                    <div class="editor-content" id="demo-editor-content">
                        <div class="line-numbers">
                            <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span>
                        </div>
                        <div class="code-area">
                            <pre><span class="keyword">public class</span> <span class="class">Main</span> {</pre>
                            <pre>    <span class="keyword">public static void</span> <span class="method">main</span>(String[] args) {</pre>
                            <pre>        <span class="comment">// Tampilkan pesan ke layar</span></pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Belajar coding itu menyenangkan!"</span>);</pre>
                            <pre>        </pre>
                            <pre>        <span class="keyword">int</span> angka = <span class="number">10</span>;</pre>
                            <pre>        System.out.<span class="method">println</span>(<span class="string">"Nilai angka: "</span> + angka);</pre>
                            <pre>    }</pre>
                            <pre>}</pre>
                        </div>
                    </div>
                </div>
                <div class="output-panel" id="demo-output">
                    <div class="output-header">
                        <span><i class="fas fa-terminal"></i> Output</span>
                        <span class="output-status">Selesai dalam 0.23s</span>
                    </div>
                    <div class="output-content">
                        <div class="output-line">Belajar coding itu menyenangkan!</div>
                        <div class="output-line">Nilai angka: 10</div>
                    </div>
                </div>
            </div>
            <div class="editor-features">
                <div class="feature-tag">
                    <i class="fas fa-check-circle"></i> Evaluasi otomatis
                </div>
                <div class="feature-tag">
                    <i class="fas fa-check-circle"></i> Syntax highlighting
                </div>
                <div class="feature-tag">
                    <i class="fas fa-check-circle"></i> Auto-completion
                </div>
                <div class="feature-tag">
                    <i class="fas fa-check-circle"></i> Error detection
                </div>
            </div>
        </div>
    </section>

    <!-- 7️⃣ Siapa yang Cocok Menggunakan Platform Ini? -->
    <section class="target-audience">
        <div class="container">
            <h2 class="section-title">Siapa yang Cocok <span class="gradient-text">Menggunakan Platform Ini?</span></h2>
            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-icon">🎓</div>
                    <h3>Siswa SMA</h3>
                    <p>Yang ingin mempersiapkan diri masuk jurusan IT dengan dasar yang kuat</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">📚</div>
                    <h3>Mahasiswa Awal</h3>
                    <p>Semester awal jurusan informatika yang butuh pondasi pemrograman</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">🌟</div>
                    <h3>Pemula Total</h3>
                    <p>Belajar dari nol tanpa pengalaman coding sebelumnya</p>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">🔄</div>
                    <h3>Programmer</h3>
                    <p>Yang ingin mempelajari bahasa baru secara terstruktur</p>
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
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Materinya runtut dan mudah dipahami. Latihannya membantu memahami konsep secara praktik."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>R</span>
                        </div>
                        <div class="author-info">
                            <h4>Rizki</h4>
                            <p>Mahasiswa Informatika</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Sangat membantu untuk memahami dasar Java sebelum masuk materi yang lebih kompleks."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>A</span>
                        </div>
                        <div class="author-info">
                            <h4>Andini</h4>
                            <p>Pelajar</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Akhirnya nemu platform yang bener-bener step by step. Ga bingung lagi mau mulai dari mana."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>D</span>
                        </div>
                        <div class="author-info">
                            <h4>Dimas</h4>
                            <p>Career Switcher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9️⃣ Call To Action Akhir -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Siap Memulai Perjalanan<br><span class="gradient-text">Belajar Coding?</span></h2>
            <p class="cta-description">Daftar sekarang dan mulai belajar secara terstruktur</p>
            <a href="#" class="btn cta-button">
                <i class="fas fa-rocket"></i>
                Daftar Gratis Sekarang
            </a>
            <p class="cta-note">Tidak perlu kartu kredit. Akses langsung semua materi dasar.</p>
        </div>
    </section>
@endsection