<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Masuk & Daftar — Tutorin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,700;0,9..40,800;1,9..40,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login_regist.css') }}">
</head>
<body>

<div class="bg-wrap">
    <div class="grid-lines"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<div class="page">

    <div class="content-container">

        <div class="branding">
            <div class="logo-lockup">
                <div class="logo-mark">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <span class="logo-wordmark">Tutorin</span>
            </div>

            <p class="brand-eyebrow">Tutorin · Belajar Bareng</p>
            <h1 class="brand-headline">Kuliah susah?<br>Ada <em>kakak tingkat</em><br>yang ngerti persis.</h1>
            <p class="brand-sub">Bimbingan dari sesama mahasiswa yang udah ngelewatin matkul yang sama. Lebih relevan, lebih terjangkau.</p>

            <div class="brand-tags">
                <span class="brand-tag">Matematika Diskrit</span>
                <span class="brand-tag">Kalkulus</span>
                <span class="brand-tag">Basis Data</span>
                <span class="brand-tag">Sistem Informasi</span>
                <span class="brand-tag">+116 lainnya</span>
            </div>

            <div class="brand-stats">
                <div class="stat">
                    <span class="stat-num">500+</span>
                    <span class="stat-label">Tutor aktif</span>
                </div>
                <div class="stat">
                    <span class="stat-num">120+</span>
                    <span class="stat-label">Mata kuliah</span>
                </div>
                <div class="stat">
                    <span class="stat-num">4.8★</span>
                    <span class="stat-label">Rating rata-rata</span>
                </div>
            </div>
        </div>

        <div class="card" id="authCard">
            <div class="tabs">
                <button type="button" class="tab active" id="tabMasuk" onclick="switchForm('login')">Masuk</button>
                <button type="button" class="tab" id="tabDaftar" onclick="switchForm('register')">Buat akun</button>
            </div>

            <div class="form-slider">

                <!-- LOGIN PANE -->
                <div class="form-content login-pane">

                    <div class="social-row">
                        <button type="button" class="btn-social">
                            <svg width="16" height="16" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                            Google
                        </button>
                        <button type="button" class="btn-social">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057c.002.022.015.043.033.054a19.928 19.928 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z" fill="#5865F2"/></svg>
                            Discord
                        </button>
                    </div>

                    <div class="divider">atau pakai email</div>

                    <form id="loginForm" onsubmit="handlePrototypeLogin(event)">
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-input"
                                placeholder="kamu@student.ac.id" required autocomplete="email">
                        </div>

                        <div class="form-group">
                            <div class="row-label">
                                <label class="form-label" for="password" style="margin-bottom:0">Password</label>
                                <a href="forgot-password.html" class="forgot-link">Lupa password?</a>
                            </div>
                            <div class="input-wrap">
                                <input id="password" name="password" type="password" class="form-input"
                                    placeholder="Masukkan password kamu" required autocomplete="current-password">
                                <button type="button" class="toggle-pw" onclick="togglePassword('password', this)" aria-label="Tampilkan password">
                                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">Masuk sekarang</button>
                    </form>
                    <p class="card-footer">
                        Belum punya akun? <button type="button" onclick="switchForm('register')">Daftar di sini</button>
                    </p>
                </div>

                <!-- REGISTER PANE -->
                <div class="form-content register-pane" id="registerPane">

                    <!-- ── Step 1: Pilih Role ── -->
                    <div id="regStep1">
                        <p style="font-size:13px;color:var(--muted);margin-bottom:16px;font-weight:500">
                            Kamu mau daftar sebagai apa?
                        </p>

                        <div class="role-pick">
                            <button type="button" class="role-btn" id="roleStudent" onclick="selectRole('student')">
                                <span class="role-icon">🎓</span>
                                <span class="role-title">Student</span>
                                <span class="role-desc">Cari tutor & belajar</span>
                            </button>
                            <button type="button" class="role-btn" id="roleTutor" onclick="selectRole('tutor')">
                                <span class="role-icon">📚</span>
                                <span class="role-title">Tutor</span>
                                <span class="role-desc">Berbagi ilmu & mengajar</span>
                            </button>
                        </div>

                        <button type="button" class="btn-submit" id="btnNextRole"
                            style="opacity:.4;pointer-events:none" onclick="goToStep2()">
                            Lanjut →
                        </button>
                        <p class="card-footer">
                            Sudah punya akun? <button type="button" onclick="switchForm('login')">Masuk di sini</button>
                        </p>
                    </div>

                    <!-- ── Step 2: Form Student ── -->
                    <div id="regStep2Student" style="display:none">
                        <button type="button" class="back-link" onclick="goBackToStep1()">
                            ← Kembali pilih role
                        </button>
                        <div class="role-badge">🎓 Daftar sebagai Student</div>

                        <div class="social-row">
                            {{-- tombol Google & Discord sama seperti login --}}
                        </div>
                        <div class="divider">atau pakai email</div>

                        <form id="registerStudentForm" onsubmit="handlePrototypeRegister(event, 'student')">
                            <div class="form-group">
                                <label class="form-label" for="s-name">Nama lengkap</label>
                                <input id="s-name" type="text" class="form-input" placeholder="Nama sesuai KTM" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="s-email">Email kampus</label>
                                <input id="s-email" type="email" class="form-input" placeholder="kamu@student.ac.id" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="s-univ">Universitas</label>
                                    <input id="s-univ" type="text" class="form-input" placeholder="Nama kampus" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="s-prodi">Jurusan</label>
                                    <input id="s-prodi" type="text" class="form-input" placeholder="Prodi kamu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="s-angkatan">Angkatan</label>
                                <input id="s-angkatan" type="text" class="form-input" placeholder="cth: 2023" maxlength="4" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="s-password">Buat password</label>
                                <div class="input-wrap">
                                    <input id="s-password" type="password" class="form-input"
                                        placeholder="Min. 8 karakter" required autocomplete="new-password">
                                    <button type="button" class="toggle-pw"
                                        onclick="togglePassword('s-password', this)">
                                        {{-- icon eye --}}
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn-submit">Buat akun student</button>
                        </form>
                        <p class="card-footer">
                            Sudah punya akun? <button type="button" onclick="switchForm('login')">Masuk di sini</button>
                        </p>
                    </div>

                    <!-- ── Step 2: Form Tutor ── -->
                    <div id="regStep2Tutor" style="display:none">
                        <button type="button" class="back-link" onclick="goBackToStep1()">
                            ← Kembali pilih role
                        </button>
                        <div class="role-badge">📚 Daftar sebagai Tutor</div>

                        <div class="social-row">
                            {{-- tombol Google & Discord --}}
                        </div>
                        <div class="divider">atau pakai email</div>

                        <form id="registerTutorForm" onsubmit="handlePrototypeRegister(event, 'tutor')">
                            <div class="form-group">
                                <label class="form-label" for="t-name">Nama lengkap</label>
                                <input id="t-name" type="text" class="form-input" placeholder="Nama sesuai KTM" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="t-email">Email kampus</label>
                                <input id="t-email" type="email" class="form-input" placeholder="kamu@student.ac.id" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="t-univ">Universitas</label>
                                    <input id="t-univ" type="text" class="form-input" placeholder="Nama kampus" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="t-prodi">Jurusan</label>
                                    <input id="t-prodi" type="text" class="form-input" placeholder="Prodi kamu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="t-angkatan">Angkatan</label>
                                <input id="t-angkatan" type="text" class="form-input" placeholder="cth: 2022" maxlength="4" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Mata kuliah yang kamu kuasai</label>
                                <div class="matkul-wrap" onclick="document.getElementById('matkulInput').focus()">
                                    <div id="matkulTags"></div>
                                    <input id="matkulInput" class="matkul-input"
                                        placeholder="Ketik nama matkul lalu Enter...">
                                </div>
                                <p style="font-size:11px;color:var(--muted);margin-top:5px">
                                    cth: Kalkulus, Basis Data, Jaringan Komputer
                                </p>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Upload KTM / Transkrip nilai</label>
                                <div class="upload-area" id="uploadArea"
                                    onclick="document.getElementById('fileInput').click()">
                                    <div class="upload-icon">📎</div>
                                    <p class="upload-text"><span>Klik untuk upload</span> atau drag & drop</p>
                                    <p class="upload-text" style="font-size:11px;margin-top:2px">PDF, JPG, PNG — maks. 5 MB</p>
                                    <p class="upload-filename" id="uploadFilename" style="display:none"></p>
                                </div>
                                <input type="file" id="fileInput" style="display:none"
                                    accept=".pdf,.jpg,.jpeg,.png" onchange="handleFileSelect(this)">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="t-password">Buat password</label>
                                <div class="input-wrap">
                                    <input id="t-password" type="password" class="form-input"
                                        placeholder="Min. 8 karakter" required autocomplete="new-password">
                                    <button type="button" class="toggle-pw"
                                        onclick="togglePassword('t-password', this)">
                                        {{-- icon eye --}}
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn-submit">Daftar jadi tutor</button>
                        </form>
                        <p class="card-footer">
                            Sudah punya akun? <button type="button" onclick="switchForm('login')">Masuk di sini</button>
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="page-footer">
        <span>© 2026 Tutorin. Empowering students.</span>
        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Pusat Bantuan</a>
        </div>
    </div>

</div>

<script>
    function switchForm(mode) {
        const card = document.getElementById('authCard');
        const tabMasuk = document.getElementById('tabMasuk');
        const tabDaftar = document.getElementById('tabDaftar');

        if (mode === 'register') {
            card.classList.add('show-register');
            tabMasuk.classList.remove('active');
            tabDaftar.classList.add('active');
        } else {
            card.classList.remove('show-register');
            tabMasuk.classList.add('active');
            tabDaftar.classList.remove('active');
        }
    }

    function togglePassword(fieldId, btn) {
        const input = document.getElementById(fieldId);
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        btn.querySelector('svg').style.opacity = isHidden ? '.4' : '1';
    }

    function handlePrototypeLogin(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        alert('Login berhasil! (Simulasi)\nEmail: ' + email);
        window.location.href = '{{ route('student.home') }}';
    }

    function handlePrototypeRegister(event) {
        event.preventDefault();
        const email = document.getElementById('reg-email').value;
        alert('Pendaftaran Berhasil! (Simulasi)\nAkun baru dibuat untuk: ' + email + '\nSekarang silakan masuk.');
        switchForm('login');
    }

    let selectedRole = null;
    const matkulList  = [];

    function switchForm(mode) {
        const card     = document.getElementById('authCard');
        const tabMasuk = document.getElementById('tabMasuk');
        const tabDaftar= document.getElementById('tabDaftar');
        if (mode === 'register') {
            card.classList.add('show-register');
            tabMasuk.classList.remove('active');
            tabDaftar.classList.add('active');
        } else {
            card.classList.remove('show-register');
            tabMasuk.classList.add('active');
            tabDaftar.classList.remove('active');
            goBackToStep1();
        }
    }

    function selectRole(role) {
        selectedRole = role;
        document.getElementById('roleStudent').classList.toggle('selected', role === 'student');
        document.getElementById('roleTutor').classList.toggle('selected', role === 'tutor');
        const btn = document.getElementById('btnNextRole');
        btn.style.opacity = '1';
        btn.style.pointerEvents = 'auto';
    }

    function goToStep2() {
        if (!selectedRole) return;
        document.getElementById('regStep1').style.display = 'none';
        document.getElementById('regStep2Student').style.display = selectedRole === 'student' ? 'block' : 'none';
        document.getElementById('regStep2Tutor').style.display   = selectedRole === 'tutor'   ? 'block' : 'none';
    }

    function goBackToStep1() {
        selectedRole = null;
        document.getElementById('regStep1').style.display = 'block';
        document.getElementById('regStep2Student').style.display = 'none';
        document.getElementById('regStep2Tutor').style.display   = 'none';
        document.getElementById('roleStudent').classList.remove('selected');
        document.getElementById('roleTutor').classList.remove('selected');
        const btn = document.getElementById('btnNextRole');
        btn.style.opacity = '.4';
        btn.style.pointerEvents = 'none';
    }

    function togglePassword(fieldId, btn) {
        const input = document.getElementById(fieldId);
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        btn.querySelector('svg').style.opacity = isHidden ? '.4' : '1';
    }

    // Matkul tag input
    document.getElementById('matkulInput').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const val = this.value.trim();
            if (val && !matkulList.includes(val)) {
                matkulList.push(val);
                renderMatkulTags();
            }
            this.value = '';
        }
    });

    function renderMatkulTags() {
        const wrap = document.getElementById('matkulTags');
        wrap.innerHTML = '';
        matkulList.forEach((m, i) => {
            const tag = document.createElement('span');
            tag.className = 'matkul-tag';
            tag.innerHTML = m + `<button type="button" onclick="removeMatkulTag(${i})">×</button>`;
            wrap.appendChild(tag);
        });
    }

    function removeMatkulTag(i) {
        matkulList.splice(i, 1);
        renderMatkulTags();
    }

    function handleFileSelect(input) {
        const file = input.files[0];
        if (!file) return;
        document.getElementById('uploadArea').classList.add('has-file');
        const fn = document.getElementById('uploadFilename');
        fn.style.display = 'block';
        fn.textContent = '✓ ' + file.name;
    }

    function handlePrototypeLogin(event) {
        event.preventDefault();
        alert('Login berhasil! (Simulasi)\nEmail: ' + document.getElementById('email').value);
        window.location.href = '{{ route('student.home') }}';
    }

    function handlePrototypeRegister(event, role) {
        event.preventDefault();
        alert('Pendaftaran berhasil! (Simulasi)\nRole: ' + (role === 'student' ? 'Student' : 'Tutor') + '\nSekarang silakan masuk.');
        switchForm('login');
    }
</script>

</body>
</html>