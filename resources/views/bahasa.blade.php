@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Pilih <span class="gradient-text">Bahasa Pemrograman</span></h1>
            <p class="page-subtitle">Pilih bahasa yang ingin Anda pelajari dan mulai dari level dasar hingga mahir. Semua
                materi terstruktur dengan project nyata.</p>

            <div class="filter-section">
                <div class="filter-group">
                    <label for="filter-level"><i class="fas fa-filter"></i> Level:</label>
                    <select id="filter-level" class="filter-select">
                        <option value="all">Semua Level</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>

                    <label for="sort-by"><i class="fas fa-sort"></i> Urutkan:</label>
                    <select id="sort-by" class="filter-select">
                        <option value="popular">Terpopuler</option>
                        <option value="newest">Terbaru</option>
                        <option value="name-asc">Nama A-Z</option>
                        <option value="name-desc">Nama Z-A</option>
                        <option value="level-asc">Level (Terendah)</option>
                        <option value="level-desc">Level (Tertinggi)</option>
                    </select>
                </div>

                <div class="login-toggle">
                    <label class="switch">
                        <input type="checkbox" id="login-status-toggle">
                        <span class="slider round"></span>
                    </label>
                    <span class="toggle-label">Mode: <span id="login-status-text">Belum Login</span></span>
                </div>
            </div>
        </div>
    </section>

    <section class="language-grid-section">
        <div class="container">
            <div class="language-grid" id="language-grid">
                <!-- Cards akan di-generate oleh JavaScript -->
            </div>

            <div class="loading-state" id="loading-state">
                <div class="spinner"></div>
                <p>Memuat bahasa...</p>
            </div>

            <div class="empty-state" id="empty-state" style="display: none;">
                <i class="fas fa-search"></i>
                <h3>Tidak Ada Bahasa Ditemukan</h3>
                <p>Coba filter atau kata kunci yang berbeda</p>
            </div>
        </div>
    </section>
@endsection
