@extends('layouts.app')

@section('content')
    <!-- 1️⃣ Header Section (Hero Mini) -->
    <section class="roadmap-header">
        <div class="container">
            <div class="roadmap-header-content">
                <div class="header-left">
                    <h1 class="roadmap-title">
                        Roadmap Pembelajaran <span class="gradient-text">Java</span>
                    </h1>
                    <p class="roadmap-subtitle">
                        Ikuti jalur belajar terstruktur dari fundamental hingga konsep lanjutan.
                        Setiap level dilengkapi materi, latihan, dan mini project.
                    </p>

                    <!-- Quick Stats -->
                    <div class="quick-stats">
                        <div class="stat-item">
                            <span class="stat-value">5</span>
                            <span class="stat-label">Level</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">32</span>
                            <span class="stat-label">Materi</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">10</span>
                            <span class="stat-label">Latihan</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">5</span>
                            <span class="stat-label">Mini Project</span>
                        </div>
                    </div>
                </div>

                <div class="header-right">
                    <div class="language-badge">
                        <i class="fa-brands fa-java"></i>
                        <span>Java</span>
                    </div>
                    <div class="time-estimate">
                        <i class="far fa-clock"></i>
                        <span>Estimasi total: 8-12 minggu</span>
                    </div>
                </div>
            </div>

            <!-- Progress Bar (muncul jika user login) -->
            <div class="progress-container" id="progress-container">
                <div class="progress-header">
                    <span class="progress-label">Progress Anda:</span>
                    <span class="progress-percentage" id="progress-percentage">40%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" id="progress-bar-fill" style="width: 40%"></div>
                </div>
                <div class="progress-detail">
                    <span>3 dari 5 level selesai</span>
                    <span class="next-level">Next: Level 4 - Collections & Exception Handling</span>
                </div>
            </div>

            <!-- Login Toggle (untuk demo) -->
            <div class="demo-toggle">
                <label class="switch">
                    <input type="checkbox" id="login-status-toggle" checked>
                    <span class="slider round"></span>
                </label>
                <span class="toggle-label">Mode Demo: <span id="login-status-text">Logged In</span></span>
            </div>
        </div>
    </section>

    <!-- 2️⃣ Timeline / Vertical Roadmap Section -->
    <section class="roadmap-timeline">
        <div class="container">
            <div class="timeline-container" id="timeline-container">
                <!-- Level 1 - Fundamental Java (Terbuka) -->
                <div class="timeline-item" data-level="1" data-status="completed">
                    <div class="timeline-marker">
                        <div class="marker-dot completed">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="level-header">
                            <div class="level-badge-container">
                                <span class="level-badge">Level 1</span>
                                <h2 class="level-title">Fundamental Java</h2>
                            </div>
                            <div class="level-status">
                                <span class="status-badge completed">
                                    <i class="fas fa-check-circle"></i> Selesai
                                </span>
                                <span class="level-duration"><i class="far fa-clock"></i> 1-2 minggu</span>
                            </div>
                        </div>

                        <p class="level-description">
                            Memahami dasar pemrograman Java mulai dari struktur program hingga manipulasi data sederhana.
                        </p>

                        <div class="level-meta">
                            <span class="meta-item"><i class="fas fa-book"></i> 5 Materi</span>
                            <span class="meta-item"><i class="fas fa-code"></i> 2 Latihan</span>
                            <span class="meta-item"><i class="fas fa-project-diagram"></i> 1 Mini Project</span>
                        </div>

                        <div class="level-progress">
                            <div class="progress-text">
                                <span>Progress Level</span>
                                <span class="progress-percent">100%</span>
                            </div>
                            <div class="progress-bar-small">
                                <div class="progress-fill" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="materi-list">
                            <h4>Materi:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Program Java Pertama</span>
                                    <span class="materi-desc">Memahami struktur dasar class, method main, dan cara
                                        menjalankan program.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Variabel & Tipe Data</span>
                                    <span class="materi-desc">Mengenal tipe data primitif dan deklarasi variabel.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Input & Output</span>
                                    <span class="materi-desc">Menggunakan System.out dan Scanner untuk interaksi
                                        dasar.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Operator Dasar</span>
                                    <span class="materi-desc">Aritmatika, logika, dan perbandingan.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Penggabungan Teks dan Variabel</span>
                                    <span class="materi-desc">String concatenation dan formatting sederhana.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="latihan-section">
                            <h4>Latihan:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i> Membuat program kalkulator sederhana.
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i> Validasi nilai kelulusan.
                                </li>
                            </ul>
                        </div>

                        <div class="mini-project">
                            <h4>Mini Project:</h4>
                            <div class="project-card completed">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Program Sistem Penilaian Sederhana</strong>
                                    <p>Aplikasi console untuk input nilai dan hitung rata-rata</p>
                                </div>
                            </div>
                        </div>

                        <div class="level-actions">
                            <button class="btn-review" disabled>
                                <i class="fas fa-check"></i> Selesai
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Level 2 - Control Flow (Completed) -->
                <div class="timeline-item" data-level="2" data-status="completed">
                    <div class="timeline-marker">
                        <div class="marker-dot completed">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="level-header">
                            <div class="level-badge-container">
                                <span class="level-badge">Level 2</span>
                                <h2 class="level-title">Control Flow</h2>
                            </div>
                            <div class="level-status">
                                <span class="status-badge completed">
                                    <i class="fas fa-check-circle"></i> Selesai
                                </span>
                                <span class="level-duration"><i class="far fa-clock"></i> 1-2 minggu</span>
                            </div>
                        </div>

                        <p class="level-description">
                            Mengontrol alur program menggunakan percabangan dan perulangan.
                        </p>

                        <div class="level-meta">
                            <span class="meta-item"><i class="fas fa-book"></i> 4 Materi</span>
                            <span class="meta-item"><i class="fas fa-code"></i> 2 Latihan</span>
                            <span class="meta-item"><i class="fas fa-project-diagram"></i> 1 Mini Project</span>
                        </div>

                        <div class="level-progress">
                            <div class="progress-text">
                                <span>Progress Level</span>
                                <span class="progress-percent">100%</span>
                            </div>
                            <div class="progress-bar-small">
                                <div class="progress-fill" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="materi-list">
                            <h4>Materi:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>If–Else Statement</span>
                                    <span class="materi-desc">Percabangan dengan kondisi boolean.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Switch Case</span>
                                    <span class="materi-desc">Seleksi dengan banyak pilihan.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Perulangan For</span>
                                    <span class="materi-desc">Loop dengan counter.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Perulangan While & Do-While</span>
                                    <span class="materi-desc">Loop dengan kondisi.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="latihan-section">
                            <h4>Latihan:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i> Program ganjil/genap.
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i> Tabel perkalian.
                                </li>
                            </ul>
                        </div>

                        <div class="mini-project">
                            <h4>Mini Project:</h4>
                            <div class="project-card completed">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>Program Menu Interaktif Berbasis Console</strong>
                                    <p>Menu dengan pilihan operasi matematika</p>
                                </div>
                            </div>
                        </div>

                        <div class="level-actions">
                            <button class="btn-review" disabled>
                                <i class="fas fa-check"></i> Selesai
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Level 3 - Object Oriented Programming (In Progress) -->
                <div class="timeline-item" data-level="3" data-status="in-progress">
                    <div class="timeline-marker">
                        <div class="marker-dot in-progress">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="level-header">
                            <div class="level-badge-container">
                                <span class="level-badge">Level 3</span>
                                <h2 class="level-title">Object Oriented Programming (OOP)</h2>
                            </div>
                            <div class="level-status">
                                <span class="status-badge in-progress">
                                    <i class="fas fa-play-circle"></i> Sedang Berjalan
                                </span>
                                <span class="level-duration"><i class="far fa-clock"></i> 2-3 minggu</span>
                            </div>
                        </div>

                        <p class="level-description">
                            Memahami konsep OOP sebagai fondasi pengembangan aplikasi skala besar.
                        </p>

                        <div class="level-meta">
                            <span class="meta-item"><i class="fas fa-book"></i> 5 Materi</span>
                            <span class="meta-item"><i class="fas fa-code"></i> 2 Latihan</span>
                            <span class="meta-item"><i class="fas fa-project-diagram"></i> 1 Mini Project</span>
                        </div>

                        <div class="level-progress">
                            <div class="progress-text">
                                <span>Progress Level</span>
                                <span class="progress-percent">60%</span>
                            </div>
                            <div class="progress-bar-small">
                                <div class="progress-fill" style="width: 60%"></div>
                            </div>
                        </div>

                        <div class="materi-list">
                            <h4>Materi:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Class dan Object</span>
                                    <span class="materi-desc">Blueprint dan instance.</span>
                                </li>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Constructor</span>
                                    <span class="materi-desc">Membuat dan menginisialisasi object.</span>
                                </li>
                                <li class="in-progress">
                                    <i class="fas fa-play-circle"></i>
                                    <span>Encapsulation</span>
                                    <span class="materi-desc">Getter, setter, dan access modifier.</span>
                                </li>
                                <li class="locked">
                                    <i class="fas fa-lock"></i>
                                    <span>Inheritance</span>
                                    <span class="materi-desc">Pewarisan sifat class.</span>
                                </li>
                                <li class="locked">
                                    <i class="fas fa-lock"></i>
                                    <span>Polymorphism</span>
                                    <span class="materi-desc">Method overloading dan overriding.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="latihan-section">
                            <h4>Latihan:</h4>
                            <ul>
                                <li class="completed">
                                    <i class="fas fa-check-circle"></i> Membuat class Kendaraan.
                                </li>
                                <li class="in-progress">
                                    <i class="fas fa-play-circle"></i> Simulasi sistem bank sederhana.
                                </li>
                            </ul>
                        </div>

                        <div class="mini-project">
                            <h4>Mini Project:</h4>
                            <div class="project-card in-progress">
                                <i class="fas fa-play-circle"></i>
                                <div>
                                    <strong>Aplikasi Manajemen Data Mahasiswa</strong>
                                    <p>CRUD sederhana dengan OOP (In Progress)</p>
                                </div>
                            </div>
                        </div>

                        <div class="level-actions">
                            <button class="btn-continue">
                                <i class="fas fa-play"></i> Lanjutkan Belajar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Level 4 - Collections & Exception Handling (Locked) -->
                <div class="timeline-item" data-level="4" data-status="locked">
                    <div class="timeline-marker">
                        <div class="marker-dot locked">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="timeline-line"></div>
                    </div>
                    <div class="timeline-content locked">
                        <div class="level-header">
                            <div class="level-badge-container">
                                <span class="level-badge">Level 4</span>
                                <h2 class="level-title">Collections & Exception Handling</h2>
                            </div>
                            <div class="level-status">
                                <span class="status-badge locked">
                                    <i class="fas fa-lock"></i> Terkunci
                                </span>
                                <span class="level-duration"><i class="far fa-clock"></i> 2 minggu</span>
                            </div>
                        </div>

                        <p class="level-description">
                            Bekerja dengan struktur data dan penanganan error.
                        </p>

                        <div class="level-meta">
                            <span class="meta-item"><i class="fas fa-book"></i> 4 Materi</span>
                            <span class="meta-item"><i class="fas fa-code"></i> 2 Latihan</span>
                            <span class="meta-item"><i class="fas fa-project-diagram"></i> 1 Mini Project</span>
                        </div>

                        <div class="level-progress">
                            <div class="progress-text">
                                <span>Progress Level</span>
                                <span class="progress-percent">0%</span>
                            </div>
                            <div class="progress-bar-small">
                                <div class="progress-fill" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="materi-list">
                            <h4>Materi:</h4>
                            <ul>
                                <li class="locked"><i class="fas fa-lock"></i> Array dan ArrayList</li>
                                <li class="locked"><i class="fas fa-lock"></i> HashMap</li>
                                <li class="locked"><i class="fas fa-lock"></i> Try-Catch</li>
                                <li class="locked"><i class="fas fa-lock"></i> Custom Exception</li>
                            </ul>
                        </div>

                        <div class="mini-project">
                            <h4>Mini Project:</h4>
                            <div class="project-card locked">
                                <i class="fas fa-lock"></i>
                                <div>
                                    <strong>Aplikasi Manajemen Inventaris</strong>
                                    <p>Mengelola data inventaris dengan collection</p>
                                </div>
                            </div>
                        </div>

                        <div class="level-actions">
                            <button class="btn-locked" disabled>
                                <i class="fas fa-lock"></i> Selesaikan Level 3
                            </button>
                        </div>

                        <div class="unlock-condition">
                            <i class="fas fa-info-circle"></i>
                            <span>Buka dengan menyelesaikan Level 3: OOP</span>
                        </div>
                    </div>
                </div>

                <!-- Level 5 - File Handling & Final Project (Locked) -->
                <div class="timeline-item" data-level="5" data-status="locked">
                    <div class="timeline-marker">
                        <div class="marker-dot locked">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <div class="timeline-content locked">
                        <div class="level-header">
                            <div class="level-badge-container">
                                <span class="level-badge">Level 5</span>
                                <h2 class="level-title">File Handling & Final Project</h2>
                            </div>
                            <div class="level-status">
                                <span class="status-badge locked">
                                    <i class="fas fa-lock"></i> Terkunci
                                </span>
                                <span class="level-duration"><i class="far fa-clock"></i> 2-3 minggu</span>
                            </div>
                        </div>

                        <p class="level-description">
                            Bekerja dengan file dan menyelesaikan final project sebagai portofolio.
                        </p>

                        <div class="level-meta">
                            <span class="meta-item"><i class="fas fa-book"></i> 3 Materi</span>
                            <span class="meta-item"><i class="fas fa-code"></i> 1 Latihan</span>
                            <span class="meta-item"><i class="fas fa-project-diagram"></i> 1 Final Project</span>
                        </div>

                        <div class="level-progress">
                            <div class="progress-text">
                                <span>Progress Level</span>
                                <span class="progress-percent">0%</span>
                            </div>
                            <div class="progress-bar-small">
                                <div class="progress-fill" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="materi-list">
                            <h4>Materi:</h4>
                            <ul>
                                <li class="locked"><i class="fas fa-lock"></i> Membaca File</li>
                                <li class="locked"><i class="fas fa-lock"></i> Menulis File</li>
                                <li class="locked"><i class="fas fa-lock"></i> Struktur Folder & Modularisasi</li>
                            </ul>
                        </div>

                        <div class="mini-project">
                            <h4>Final Project:</h4>
                            <div class="project-card locked">
                                <i class="fas fa-lock"></i>
                                <div>
                                    <strong>Aplikasi CLI Sistem Manajemen Perpustakaan</strong>
                                    <p>Final project menggabungkan semua konsep</p>
                                </div>
                            </div>
                        </div>

                        <div class="level-actions">
                            <button class="btn-locked" disabled>
                                <i class="fas fa-lock"></i> Selesaikan Semua Level
                            </button>
                        </div>

                        <div class="unlock-condition">
                            <i class="fas fa-info-circle"></i>
                            <span>Buka setelah menyelesaikan Level 1-4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="roadmap-info">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Sertifikat Kelulusan</h3>
                    <p>Dapatkan sertifikat setelah menyelesaikan semua level dan final project.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-users"></i>
                    <h3>Mentor Support</h3>
                    <p>Diskusi dengan mentor di setiap level jika mengalami kesulitan.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-rocket"></i>
                    <h3>Portofolio Siap Kerja</h3>
                    <p>Final project bisa ditambahkan ke portfolio GitHub Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Link ke CSS dan JS khusus roadmap -->
    <link rel="stylesheet" href="{{ asset('css/roadmap.css') }}">
    <script src="{{ asset('js/roadmap.js') }}"></script>
@endsection