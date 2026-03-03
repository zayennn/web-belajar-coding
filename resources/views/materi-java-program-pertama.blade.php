@extends('layouts.app')

@section('content')
<!-- 1️⃣ Header Materi -->
<section class="materi-header">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="/">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="/bahasa">Bahasa</a>
            <i class="fas fa-chevron-right"></i>
            <a href="/roadmap-java">Java</a>
            <i class="fas fa-chevron-right"></i>
            <a href="/roadmap-java#level-1">Level 1</a>
            <i class="fas fa-chevron-right"></i>
            <span class="current">Program Java Pertama</span>
        </div>

        <div class="header-grid">
            <div class="header-left">
                <h1 class="materi-title">Program Java Pertama</h1>
                <p class="materi-description">
                    Materi ini membahas struktur dasar program Java dan cara menjalankannya 
                    menggunakan compiler. Anda akan memahami komponen-komponen penting dalam 
                    program Java dan cara menampilkan output ke layar.
                </p>
                
                <!-- Info Meta -->
                <div class="materi-meta">
                    <div class="meta-item">
                        <i class="far fa-clock"></i>
                        <span>Durasi: <strong>± 20 menit</strong></span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-signal"></i>
                        <span>Level: <strong class="beginner">Beginner</strong></span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-laptop-code"></i>
                        <span>Tipe: <strong>Teori + Praktik</strong></span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-tasks"></i>
                        <span>Prasyarat: <strong>Tidak ada</strong></span>
                    </div>
                </div>
            </div>

            <!-- Progress Card -->
            <div class="header-right">
                <div class="progress-card">
                    <div class="progress-header">
                        <span>Progress Materi</span>
                        <span class="progress-percent">0%</span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" style="width: 0%"></div>
                    </div>
                    <div class="progress-status">
                        <i class="fas fa-info-circle"></i>
                        <span>Tandai selesai untuk menyimpan progress</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="materi-content">
    <div class="container">
        <div class="content-grid">
            <!-- Left Sidebar - Daftar Isi -->
            <aside class="content-sidebar">
                <div class="sidebar-sticky">
                    <h3>Daftar Isi</h3>
                    <ul class="table-of-contents">
                        <li><a href="#tujuan" class="active">Tujuan Pembelajaran</a></li>
                        <li><a href="#struktur">Struktur Dasar Program Java</a></li>
                        <li><a href="#compile">Cara Compile dan Run</a></li>
                        <li><a href="#visualisasi">Visualisasi Alur</a></li>
                        <li><a href="#contoh">Contoh Kasus Nyata</a></li>
                        <li><a href="#kesalahan">Kesalahan Umum</a></li>
                        <li><a href="#ringkasan">Ringkasan</a></li>
                        <li><a href="#kuis">Kuis Singkat</a></li>
                        <li><a href="#latihan">Latihan Praktik</a></li>
                    </ul>

                    <!-- Progress Mini -->
                    <div class="sidebar-progress">
                        <div class="progress-circle" data-progress="0">
                            <svg width="80" height="80" viewBox="0 0 80 80">
                                <circle class="progress-bg" cx="40" cy="40" r="36" fill="none" stroke="#333" stroke-width="8"/>
                                <circle class="progress-fill" cx="40" cy="40" r="36" fill="none" stroke="#00ff9d" stroke-width="8" stroke-linecap="round" stroke-dasharray="226.2" stroke-dashoffset="226.2" transform="rotate(-90 40 40)"/>
                            </svg>
                            <span class="progress-text">0%</span>
                        </div>
                        <p>Progress materi</p>
                    </div>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="content-main">
                <!-- 2️⃣ Tujuan Pembelajaran -->
                <section id="tujuan" class="content-section">
                    <h2 class="section-title">Tujuan Pembelajaran</h2>
                    <div class="objectives-box">
                        <p class="objectives-intro">Setelah menyelesaikan materi ini, Anda akan mampu:</p>
                        <ul class="objectives-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Memahami struktur dasar file Java</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Menjelaskan fungsi method main</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Menjalankan program Java melalui terminal</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Menampilkan output ke layar dengan System.out.println()</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- 3️⃣ Penjelasan Materi - Struktur Dasar -->
                <section id="struktur" class="content-section">
                    <h2 class="section-title">Struktur Dasar Program Java</h2>
                    
                    <div class="explanation-box">
                        <p>
                            Java adalah bahasa pemrograman berbasis class dan object-oriented. 
                            Setiap program Java harus berada di dalam sebuah class. Nama file harus 
                            sama persis dengan nama class (termasuk huruf besar/kecil).
                        </p>
                        
                        <div class="code-example">
                            <div class="code-header">
                                <span class="filename">Main.java</span>
                                <button class="btn-copy" onclick="copyCode('code-struktur')">
                                    <i class="far fa-copy"></i> Salin
                                </button>
                            </div>
                            <pre><code id="code-struktur" class="language-java">public class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
    }
}</code></pre>
                        </div>

                        <div class="explanation-details">
                            <h4>Penjelasan:</h4>
                            <ul>
                                <li>
                                    <strong>public class Main</strong> - Mendeklarasikan class dengan nama "Main". 
                                    Nama class harus sama dengan nama file (Main.java).
                                </li>
                                <li>
                                    <strong>public static void main(String[] args)</strong> - Method main adalah 
                                    titik awal eksekusi program. JVM akan mencari method ini saat menjalankan program.
                                </li>
                                <li>
                                    <strong>System.out.println()</strong> - Method untuk menampilkan output ke konsol 
                                    dan menambahkan baris baru setelahnya.
                                </li>
                                <li>
                                    <strong>Tanda kurung kurawal { }</strong> - Menandai blok kode untuk class dan method.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 3.2 Cara Compile dan Run -->
                <section id="compile" class="content-section">
                    <h2 class="section-title">Cara Compile dan Run</h2>
                    
                    <div class="steps-container">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Simpan file</h4>
                                <p>Simpan kode program dengan nama <code>Main.java</code>. Pastikan nama file sama persis dengan nama class.</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Compile</h4>
                                <p>Buka terminal/command prompt dan jalankan perintah:</p>
                                <div class="terminal-command">
                                    <span class="prompt">$</span>
                                    <code>javac Main.java</code>
                                    <button class="btn-copy-small" onclick="copyCode('javac-command')">
                                        <i class="far fa-copy"></i>
                                    </button>
                                </div>
                                <p class="command-desc">Jika berhasil, akan menghasilkan file <code>Main.class</code> (bytecode).</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Run</h4>
                                <p>Jalankan program dengan perintah:</p>
                                <div class="terminal-command">
                                    <span class="prompt">$</span>
                                    <code>java Main</code>
                                    <button class="btn-copy-small" onclick="copyCode('java-command')">
                                        <i class="far fa-copy"></i>
                                    </button>
                                </div>
                                <p class="command-desc">Output akan muncul: <span class="output-sample">Hello World</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="tip-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Tips:</strong> Jika terjadi error, periksa:
                            <ul>
                                <li>Nama file sudah sesuai (Main.java vs main.java)</li>
                                <li>Tidak ada typo dalam kode</li>
                                <li>Semua kurung kurawal berpasangan</li>
                                <li>Titik koma di setiap akhir statement</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 4️⃣ Visualisasi / Diagram -->
                <section id="visualisasi" class="content-section">
                    <h2 class="section-title">Visualisasi Alur Program Java</h2>
                    
                    <div class="diagram-container">
                        <div class="diagram-step">
                            <div class="step-icon">
                                <i class="fas fa-file-code"></i>
                            </div>
                            <div class="step-label">Source Code</div>
                            <div class="step-desc">Main.java</div>
                        </div>
                        
                        <div class="diagram-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        
                        <div class="diagram-step">
                            <div class="step-icon">
                                <i class="fas fa-compress-alt"></i>
                            </div>
                            <div class="step-label">Compile</div>
                            <div class="step-desc">javac Main.java</div>
                        </div>
                        
                        <div class="diagram-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        
                        <div class="diagram-step">
                            <div class="step-icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <div class="step-label">Bytecode</div>
                            <div class="step-desc">Main.class</div>
                        </div>
                        
                        <div class="diagram-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        
                        <div class="diagram-step">
                            <div class="step-icon">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="step-label">Run</div>
                            <div class="step-desc">java Main</div>
                        </div>
                        
                        <div class="diagram-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        
                        <div class="diagram-step">
                            <div class="step-icon">
                                <i class="fas fa-terminal"></i>
                            </div>
                            <div class="step-label">Output</div>
                            <div class="step-desc">Hello World</div>
                        </div>
                    </div>
                </section>

                <!-- 5️⃣ Contoh Kasus Nyata -->
                <section id="contoh" class="content-section">
                    <h2 class="section-title">Contoh Kasus Nyata</h2>
                    
                    <div class="example-card">
                        <h4>Program Sapaan Personal</h4>
                        <p>
                            Misalkan kita ingin membuat program yang menyapa pengguna. 
                            Ini bisa menjadi dasar untuk aplikasi yang lebih kompleks seperti 
                            sistem login atau chatbot sederhana.
                        </p>
                        
                        <div class="code-example small">
                            <pre><code>public class Salam {
    public static void main(String[] args) {
        System.out.println("Selamat datang di MasterCode");
        System.out.println("Semangat belajar Java!");
    }
}</code></pre>
                        </div>
                        
                        <div class="example-output">
                            <strong>Output:</strong>
                            <div class="output-box">
                                Selamat datang di MasterCode<br>
                                Semangat belajar Java!
                            </div>
                        </div>
                        
                        <p class="example-note">
                            <i class="fas fa-info-circle"></i>
                            Program sederhana ini menunjukkan bagaimana kita bisa menampilkan pesan 
                            personal kepada pengguna. Konsep ini akan berkembang menjadi aplikasi 
                            yang lebih kompleks di level selanjutnya.
                        </p>
                    </div>
                </section>

                <!-- 6️⃣ Kesalahan Umum -->
                <section id="kesalahan" class="content-section">
                    <h2 class="section-title">Kesalahan Umum</h2>
                    
                    <div class="errors-container">
                        <div class="error-item">
                            <div class="error-icon">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div class="error-content">
                                <h4>Salah penulisan nama class</h4>
                                <div class="error-demo">
                                    <div class="error-code">
                                        <strong>Salah:</strong>
                                        <pre><code>public class main {  // huruf kecil</code></pre>
                                    </div>
                                    <div class="correct-code">
                                        <strong>Benar:</strong>
                                        <pre><code>public class Main {  // huruf besar</code></pre>
                                    </div>
                                </div>
                                <p class="error-explanation">
                                    Java case-sensitive. Nama class harus sama persis dengan nama file. 
                                    Jika file bernama "Main.java", class harus "Main".
                                </p>
                            </div>
                        </div>
                        
                        <div class="error-item">
                            <div class="error-icon">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div class="error-content">
                                <h4>Lupa tanda titik koma</h4>
                                <div class="error-demo">
                                    <div class="error-code">
                                        <strong>Salah:</strong>
                                        <pre><code>System.out.println("Hello World")  // titik koma hilang</code></pre>
                                    </div>
                                    <div class="correct-code">
                                        <strong>Benar:</strong>
                                        <pre><code>System.out.println("Hello World");</code></pre>
                                    </div>
                                </div>
                                <p class="error-explanation">
                                    Setiap statement di Java harus diakhiri dengan titik koma (;).
                                </p>
                            </div>
                        </div>
                        
                        <div class="error-item">
                            <div class="error-icon">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div class="error-content">
                                <h4>Salah kapitalisasi method</h4>
                                <div class="error-demo">
                                    <div class="error-code">
                                        <strong>Salah:</strong>
                                        <pre><code>System.out.Println("Hello");  // huruf P besar</code></pre>
                                    </div>
                                    <div class="correct-code">
                                        <strong>Benar:</strong>
                                        <pre><code>System.out.println("Hello");  // huruf p kecil</code></pre>
                                    </div>
                                </div>
                                <p class="error-explanation">
                                    Method println() menggunakan huruf kecil semua. Java membedakan huruf besar/kecil.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 7️⃣ Ringkasan Materi -->
                <section id="ringkasan" class="content-section">
                    <h2 class="section-title">Ringkasan Materi</h2>
                    
                    <div class="summary-box">
                        <h4>Dalam materi ini Anda telah mempelajari:</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Struktur dasar program Java dengan class dan method main</li>
                            <li><i class="fas fa-check"></i> Fungsi method main sebagai entry point program</li>
                            <li><i class="fas fa-check"></i> Cara compile program dengan perintah <code>javac</code></li>
                            <li><i class="fas fa-check"></i> Cara menjalankan program dengan perintah <code>java</code></li>
                            <li><i class="fas fa-check"></i> Menggunakan <code>System.out.println()</code> untuk output</li>
                            <li><i class="fas fa-check"></i> Kesalahan umum yang sering terjadi pada program Java pertama</li>
                        </ul>
                    </div>
                </section>

                <!-- 8️⃣ Kuis Singkat -->
                <section id="kuis" class="content-section">
                    <h2 class="section-title">Kuis Singkat</h2>
                    
                    <div class="quiz-container">
                        <div class="quiz-question" data-question="1">
                            <h4>Soal 1: Method utama dalam Java adalah?</h4>
                            <div class="quiz-options">
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="a">
                                    <span class="option-text">a. start()</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="b">
                                    <span class="option-text">b. main()</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="c">
                                    <span class="option-text">c. run()</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="d">
                                    <span class="option-text">d. init()</span>
                                </label>
                            </div>
                            <div class="quiz-feedback"></div>
                        </div>
                        
                        <div class="quiz-question" data-question="2">
                            <h4>Soal 2: Perintah untuk compile file Java adalah?</h4>
                            <div class="quiz-options">
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="a">
                                    <span class="option-text">a. java</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="b">
                                    <span class="option-text">b. run</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="c">
                                    <span class="option-text">c. javac</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="d">
                                    <span class="option-text">d. compile</span>
                                </label>
                            </div>
                            <div class="quiz-feedback"></div>
                        </div>
                        
                        <div class="quiz-question" data-question="3">
                            <h4>Soal 3: Apa output dari kode berikut?</h4>
                            <pre class="quiz-code">System.out.println("Java");</pre>
                            <div class="quiz-options">
                                <label class="quiz-option">
                                    <input type="radio" name="q3" value="a">
                                    <span class="option-text">a. "Java"</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q3" value="b">
                                    <span class="option-text">b. Java</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q3" value="c">
                                    <span class="option-text">c. 'Java'</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q3" value="d">
                                    <span class="option-text">d. Error</span>
                                </label>
                            </div>
                            <div class="quiz-feedback"></div>
                        </div>
                        
                        <button class="btn-check-answers" onclick="checkQuiz()">
                            <i class="fas fa-check"></i> Cek Jawaban
                        </button>
                    </div>
                </section>

                <!-- 9️⃣ Latihan Praktik -->
                <section id="latihan" class="content-section">
                    <h2 class="section-title">Latihan Praktik</h2>
                    
                    <div class="exercise-container">
                        <div class="exercise-header">
                            <h3>Soal Latihan</h3>
                            <span class="exercise-difficulty">Mudah</span>
                        </div>
                        
                        <div class="exercise-description">
                            <p>Buat program Java yang menampilkan teks berikut di layar:</p>
                            <div class="exercise-output-target">
                                Saya sedang belajar Java<br>
                                di MasterCode!
                            </div>
                        </div>
                        
                        <!-- Code Editor -->
                        <div class="code-editor-container">
                            <div class="editor-header">
                                <div class="editor-tabs">
                                    <span class="tab active">Main.java</span>
                                </div>
                                <div class="editor-actions">
                                    <button class="btn-reset" onclick="resetCode()">
                                        <i class="fas fa-undo"></i> Reset
                                    </button>
                                    <button class="btn-run" onclick="runCode()">
                                        <i class="fas fa-play"></i> Run
                                    </button>
                                </div>
                            </div>
                            
                            <div class="editor-wrapper">
                                <textarea id="code-editor" class="code-textarea" spellcheck="false">public class Main {
    public static void main(String[] args) {
        // Tulis kode Anda di sini
        
    }
}</textarea>
                            </div>
                            
                            <div class="editor-footer">
                                <button class="btn-show-solution" onclick="showSolution()">
                                    <i class="fas fa-eye"></i> Lihat Solusi
                                </button>
                            </div>
                        </div>
                        
                        <!-- Output Panel -->
                        <div class="output-container" id="output-container" style="display: none;">
                            <div class="output-header">
                                <span>Output</span>
                                <button class="btn-clear" onclick="clearOutput()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="output-content" id="output-content">
                                <!-- Output will appear here -->
                            </div>
                        </div>
                        
                        <!-- Solution Panel (hidden by default) -->
                        <div class="solution-container" id="solution-container" style="display: none;">
                            <div class="solution-header">
                                <span>Solusi</span>
                                <button class="btn-close" onclick="hideSolution()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="solution-content">
                                <pre><code>public class Main {
    public static void main(String[] args) {
        System.out.println("Saya sedang belajar Java");
        System.out.println("di MasterCode!");
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 🔟 Navigasi Bawah -->
                <section class="content-navigation">
                    <div class="nav-buttons">
                        <a href="/roadmap-java#level-1" class="btn-nav prev">
                            <i class="fas fa-arrow-left"></i>
                            <span>Kembali ke Level</span>
                        </a>
                        
                        <div class="nav-center">
                            <button class="btn-mark-complete" onclick="markAsComplete()">
                                <i class="fas fa-check-circle"></i>
                                Tandai Selesai
                            </button>
                        </div>
                        
                        <a href="/materi-java-variabel" class="btn-nav next disabled" id="next-materi">
                            <span>Materi Selanjutnya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    
                    <div class="completion-message" id="completion-message" style="display: none;">
                        <i class="fas fa-trophy"></i>
                        Selamat! Anda telah menyelesaikan materi ini. Lanjutkan ke materi berikutnya.
                    </div>
                </section>
            </main>
        </div>
    </div>
</section>

@endsection