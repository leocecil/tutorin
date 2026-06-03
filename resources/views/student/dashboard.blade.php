<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title', 'Tutorin')</title>
    </head>
<body>
    </body>
</html>
@extends('layouts.app')

@section('title', 'Home — Tutorin Student')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student/dashboard.css') }}">
@endpush

@section('greeting')
    <h2>Good evening, Rafli 👋</h2>
    <h1>Find your perfect <em>peer tutor</em> today</h1>
@endsection

@section('content')
<div class="dashboard-wrapper">
    <div class="schedule-banner">
        <div class="banner-left">
            <h3>Upcoming Session</h3>
            <h2>Linear Algebra with Dian P.</h2>
            <p>Today at 19:00 - 20:30 WIB (via Zoom Meeting)</p>
        </div>
        <a href="#" class="btn-banner">Join Session</a>
    </div>

    <div class="section-header">
        <h3 class="section-title">Browse by subject</h3>
    </div>
    
    <div class="search-container">
        <svg class="search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input type="text" id="tutorSearch" class="search-input" placeholder="Search tutor name, university, or subject...">
    </div>

    <div class="subject-row" id="subjectRow">
        <div class="subject-card active" data-subject="">All Subjects</div>
        <div class="subject-card" data-subject="Calculus">Calculus</div>
        <div class="subject-card" data-subject="Linear Algebra">Linear Algebra</div>
        <div class="subject-card" data-subject="Data Structures">Data Structures</div>
        <div class="subject-card" data-subject="Physics">Physics</div>
        <div class="subject-card" data-subject="Web Dev">Web Development</div>
        <div class="subject-card" data-subject="Statistics">Statistics</div>
    </div>

    <div class="section-header">
        <h3 class="section-title">Top rated tutors</h3>
        <a href="{{ route('student.explore') }}" class="btn-see-all">See all tutors</a>
    </div>

    <div class="tutor-grid" id="tutorGrid">
        @foreach ([
            ['name' => 'Dian Pangestu', 'faculty' => 'Informatics Engineering · UI', 'rating' => '★ 4.9', 'tags' => ['Linear Algebra', 'Calculus I', 'Python'], 'price' => 'Rp 50.000', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'dian pangestu informatics engineering ui linear algebra calculus i python', 'id' => 0],
            ['name' => 'Budi Raharjo', 'faculty' => 'Computer Science · ITB', 'rating' => '★ 4.8', 'tags' => ['Data Structures', 'Algorithms', 'C++'], 'price' => 'Rp 60.000', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'budi raharjo computer science itb data structures algorithms c++', 'id' => 1],
            ['name' => 'Siti Aminah', 'faculty' => 'Information Systems · ITS', 'rating' => '★ 4.9', 'tags' => ['Web Dev', 'Database', 'SQL'], 'price' => 'Rp 45.000', 'img' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'siti aminah information systems its web dev database sql', 'id' => 2],
            ['name' => 'Fadhil Muhammad', 'faculty' => 'Mechanical Engineering · UGM', 'rating' => '★ 4.7', 'tags' => ['Physics', 'Calculus', 'Statics'], 'price' => 'Rp 55.000', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'fadhil muhammad mechanical engineering ugm physics calculus static', 'id' => 3],
            ['name' => 'Alisha Putri', 'faculty' => 'Statistics · Unair', 'rating' => '★ 4.8', 'tags' => ['Statistics', 'R-Programming', 'Data Analysis'], 'price' => 'Rp 48.000', 'img' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'alisha putri statistics unair statistics r-programming data analysis', 'id' => 4],
            ['name' => 'Kevin Wijaya', 'faculty' => 'Mobile Dev · Binus', 'rating' => '★ 4.6', 'tags' => ['Web Dev', 'React Native', 'Flutter'], 'price' => 'Rp 65.000', 'img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'kevin wijaya mobile development binus web dev react native flutter javascript', 'id' => 5],
            ['name' => 'Nadia Utami', 'faculty' => 'Electrical Engineering · ITB', 'rating' => '★ 4.9', 'tags' => ['Physics', 'Circuits', 'Digital Systems'], 'price' => 'Rp 58.000', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'nadia utami electrical engineering itb physics circuits digital systems', 'id' => 6],
            ['name' => 'Rizky Pratama', 'faculty' => 'Software Engineering · UI', 'rating' => '★ 4.7', 'tags' => ['Data Structures', 'Java', 'OOP'], 'price' => 'Rp 52.000', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'rizky pratama software engineering ui data structures java oop', 'id' => 7],
            ['name' => 'Amanda Lestari', 'faculty' => 'Mathematics · UGM', 'rating' => '★ 5.0', 'tags' => ['Calculus', 'Linear Algebra', 'Geometry'], 'price' => 'Rp 50.000', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'amanda lestari mathematics ugm calculus linear algebra geometry', 'id' => 8],
            ['name' => 'Dimas Anggara', 'faculty' => 'Cyber Security · Binus', 'rating' => '★ 4.8', 'tags' => ['Networks', 'Python', 'Cryptography'], 'price' => 'Rp 70.000', 'img' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'dimas anggara cyber security binus networks python cryptography', 'id' => 9],
            ['name' => 'Rachel Stevanie', 'faculty' => 'Chemical Engineering · ITS', 'rating' => '★ 4.9', 'tags' => ['Physics', 'Chemistry', 'Thermodynamics'], 'price' => 'Rp 55.000', 'img' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'rachel stevanie chemical engineering its physics chemistry thermodynamics', 'id' => 10],
            ['name' => 'Taufiq Hidayat', 'faculty' => 'Data Science · Unair', 'rating' => '★ 4.8', 'tags' => ['Statistics', 'Python', 'Machine Learning'], 'price' => 'Rp 60.000', 'img' => 'https://images.unsplash.com/photo-1628157582853-a796fa650a6a?auto=format&fit=crop&w=150&h=150&q=80', 'search' => 'taufiq hidayat data science unair statistics python machine learning', 'id' => 11]
        ] as $tutor)
        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="{{ $tutor['id'] }}" data-searchable="{{ $tutor['search'] }}">
            <div class="tutor-header">
                <img src="{{ $tutor['img'] }}" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>{{ $tutor['name'] }}</h4>
                    <p>{{ $tutor['faculty'] }}</p>
                    <div class="badge-rating">{{ $tutor['rating'] }}</div>
                </div>
            </div>
            <div class="tutor-tags">
                @foreach ($tutor['tags'] as $tag)
                    <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>{{ $tutor['price'] }}</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>
        @endforeach

        <div class="no-results" id="noResults">No tutors found for your search criteria.</div>
    </div>
</div>

<div class="tutorin-modal-backdrop" id="modalBackdrop">
    <div class="tutorin-modal-card" id="profileModalCard">
        <div class="tutor-detail-layout">
            <div class="tutor-detail-left">
                <div class="tutor-modal-header-banner">
                    <button class="btn-close-modal" id="closeModalBtn">← Tutor profile</button>
                    <div class="modal-tutor-profile-info">
                        <img id="mAvatar" src="" class="modal-tutor-avatar" alt="Avatar">
                        <div>
                            <h2 id="mName" style="margin:0; font-size:22px; font-weight:700;"></h2>
                            <p id="mFaculty" style="margin:4px 0 0 0; color:#cbd5e1; font-size:13px;"></p>
                        </div>
                    </div>
                </div>

                <h3 style="font-size:16px; font-weight:700; color:#0f172a; margin-bottom:12px;">About Tutor</h3>
                <p id="mAboutText" style="font-size:14px; color:#475569; line-height:1.6; margin-bottom:20px;"></p>

                <div class="info-grid-meta">
                    <div class="info-block-box">
                        <span style="font-size:11px; text-transform:uppercase; color:#64748b; font-weight:700;">Education</span>
                        <p id="mEducation" style="font-size:13px; font-weight:600; margin:4px 0 0 0; color:#1e293b;"></p>
                    </div>
                    <div class="info-block-box">
                        <span style="font-size:11px; text-transform:uppercase; color:#64748b; font-weight:700;">Languages</span>
                        <p style="font-size:13px; font-weight:600; margin:4px 0 0 0; color:#1e293b;">Indonesian, English</p>
                    </div>
                </div>
            </div>

            <div class="tutor-detail-right">
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <span style="font-size:13px; color:#64748b; font-weight:600;">TOTAL (INCL. 5% FEE)</span>
                    <h2 id="mTotalPrice" style="font-size:20px; font-weight:800; color:#0f172a; margin:0;"></h2>
                </div>

                <div class="calendar-mock-box">
                    <div style="font-weight:700; color:#0f172a; margin-bottom:8px;">July 2026</div>
                    
                    {{-- Header hari -- grid terpisah --}}
                    <div class="calendar-days-grid" style="margin-bottom:2px;">
                        <div class="day-label">S</div>
                        <div class="day-label">M</div>
                        <div class="day-label">T</div>
                        <div class="day-label">W</div>
                        <div class="day-label">T</div>
                        <div class="day-label">F</div>
                        <div class="day-label">S</div>
                    </div>

                    {{-- Tanggal Juli 2026 (mulai hari Rabu = 3 kolom kosong dulu) --}}
                    <div class="calendar-days-grid">
                        <div class="day-num disabled"></div>  {{-- Sun --}}
                        <div class="day-num disabled"></div>  {{-- Mon --}}
                        <div class="day-num disabled"></div>  {{-- Tue --}}
                        <div class="day-num" data-day="1">1</div>
                        <div class="day-num" data-day="2">2</div>
                        <div class="day-num" data-day="3">3</div>
                        <div class="day-num" data-day="4">4</div>
                        <div class="day-num" data-day="5">5</div>
                        <div class="day-num" data-day="6">6</div>
                        <div class="day-num" data-day="7">7</div>
                        <div class="day-num" data-day="8">8</div>
                        <div class="day-num" data-day="9">9</div>
                        <div class="day-num" data-day="10">10</div>
                        <div class="day-num" data-day="11">11</div>
                        <div class="day-num" data-day="12">12</div>
                        <div class="day-num" data-day="13">13</div>
                        <div class="day-num" data-day="14">14</div>
                        <div class="day-num" data-day="15">15</div>
                        <div class="day-num" data-day="16">16</div>
                        <div class="day-num" data-day="17">17</div>
                        <div class="day-num" data-day="18">18</div>
                        <div class="day-num" data-day="19">19</div>
                        <div class="day-num" data-day="20">20</div>
                        <div class="day-num" data-day="21">21</div>
                        <div class="day-num" data-day="22">22</div>
                        <div class="day-num" data-day="23">23</div>
                        <div class="day-num" data-day="24">24</div>
                        <div class="day-num" data-day="25">25</div>
                        <div class="day-num active" data-day="26">26</div>
                        <div class="day-num" data-day="27">27</div>
                        <div class="day-num" data-day="28">28</div>
                        <div class="day-num" data-day="29">29</div>
                        <div class="day-num" data-day="30">30</div>
                        <div class="day-num" data-day="31">31</div>
                    </div>
                </div>

                <div>
                    <span style="font-size:12px; font-weight:700; color:#475569; display:block; margin-bottom:8px;">Available Time Slots</span>
                    <div class="time-slots-container" id="timeSlotsContainer">
                        </div>
                </div>

                <div>
                    <span style="font-size:12px; font-weight:700; color:#475569; display:block; margin-bottom:8px;">Select Duration</span>
                    <div class="duration-container">
                        <div class="duration-btn active" data-multiplier="1">
                            <div>60 min</div>
                            <span style="font-size:11px; color:#64748b; font-weight:normal;">Standard</span>
                        </div>
                        <div class="duration-btn" data-multiplier="1.5">
                            <div>90 min</div>
                            <span style="font-size:11px; color:#64748b; font-weight:normal;">+ Extended</span>
                        </div>
                    </div>
                </div>

                <button class="btn-submit-request" id="btnRequestSession">Request session</button>
            </div>
        </div>
    </div>

    <div class="success-modal-card" id="successModalCard">
        <div class="success-icon-animate">✓</div>
        <h2 style="font-size:22px; font-weight:700; color:#0f172a; margin:0 0 8px 0;">Session booked!</h2>
        <p style="font-size:14px; color:#64748b; margin:0; line-height:1.5;">Your session is confirmed. You'll get a reminder 30 minutes before it starts.</p>
        
        <div class="success-details-pill">
            <span style="font-size:11px; color:#ffffff; text-transform:uppercase; font-weight:700; letter-spacing:0.5px;">CONFIRMED</span>
            <h3 id="sTutorName" style="margin:6px 0 2px 0; font-size:16px; font-weight:700;"></h3>
            <p id="sSubjectDuration" style="margin:0 0 12px 0; font-size:13px; color:#cbd5e1;"></p>
            <div style="font-size:12px; color:#ffffff;">DATE & TIME</div>
            <div id="sDateTime" style="font-size:14px; font-weight:600;">July 28 • 15:00</div>
        </div>

        <a href="#" class="btn-back-home" id="btnSuccessClose">Back to home</a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const tutorsData = [
        { name: "Dian Pangestu", faculty: "Informatics Engineering · UI", rate: 50000, subject: "Linear Algebra", about: "CS student fluent in Python, Java, and Web Dev. Helped 40+ students crack programming assignments with practical problem-solving.", edu: "B.Sc. Computer Science<br>UI - Universitas Indonesia" },
        { name: "Budi Raharjo", faculty: "Computer Science · ITB", rate: 60000, subject: "Data Structures", about: "Specializes in Algorithms and complex systems architectural design. Enjoys breaking down recursive problems.", edu: "B.Sc. Informatics<br>ITB - Institut Teknologi Bandung" },
        { name: "Siti Aminah", faculty: "Information Systems · ITS", rate: 45000, subject: "Web Dev", about: "Passionate web development mentor focusing on modern frontend techstacks and SQL optimizations database schemes.", edu: "B.Sc. Information Systems<br>ITS - Institut Teknologi Sepuluh Nopember" },
        { name: "Fadhil Muhammad", faculty: "Mechanical Engineering · UGM", rate: 55000, subject: "Physics", about: "Helps engineering undergraduates master introductory physics dynamics, vector statics, and complex calculus formulas.", edu: "B.Eng. Mechanical Engineering<br>UGM - Universitas Gadjah Mada" },
        { name: "Alisha Putri", faculty: "Statistics · Unair", rate: 48000, subject: "Statistics", about: "Data analysis enthusiast with intermediate knowledge in R-Programming packages, hypothesis evaluation, and linear regression.", edu: "B.Sc. Statistics<br>UNAIR - Universitas Airlangga" },
        { name: "Kevin Wijaya", faculty: "Mobile Dev · Binus", rate: 65000, subject: "React Native", about: "Fullstack hybrid developer building production-ready apps across Flutter and native ecosystems.", edu: "B.Comp. Mobile Application<br>BINUS University" },
        { name: "Nadia Utami", faculty: "Electrical Engineering · ITB", rate: 58000, subject: "Physics", about: "Deep understanding in circuit analysis networks, digital signal processing loops, and fundamental electric magnetic field rules.", edu: "B.Eng. Electrical Engineering<br>ITB - Institut Teknologi Bandung" },
        { name: "Rizky Pratama", faculty: "Software Engineering · UI", rate: 52000, subject: "Data Structures", about: "Object-oriented programing expert focusing on standard clean code frameworks, unit test logic, and computational efficiency.", edu: "B.Sc. Computer Science<br>UI - Universitas Indonesia" },
        { name: "Amanda Lestari", faculty: "Mathematics · UGM", rate: 50000, subject: "Calculus", about: "Pure math scholar ready to help students pass tricky multi-variable integration layouts and geometric shapes proof structures.", edu: "B.Sc. Mathematics<br>UGM - Universitas Gadjah Mada" },
        { name: "Dimas Anggara", faculty: "Cyber Security · Binus", rate: 70000, subject: "Networks", about: "Network security analyzer explaining core encryption matrices, firewall packets config, and ethical injection environments.", edu: "B.Comp. Cyber Security<br>BINUS University" },
        { name: "Rachel Stevanie", faculty: "Chemical Engineering · ITS", rate: 55000, subject: "Physics", about: "Experienced tutor handling chemical process system balances, thermodynamics laws, and industrial solution design pipelines.", edu: "B.Eng. Chemical Engineering<br>ITS - Institut Teknologi Sepuluh Nopember" },
        { name: "Taufiq Hidayat", faculty: "Data Science · Unair", rate: 60000, subject: "Statistics", about: "Machine learning engineering student covering introductory model training algorithms, tensor structures, and cleaning pipelines.", edu: "B.Sc. Data Science<br>UNAIR - Universitas Airlangga" }
    ];

    // MOCK DATA: Jadwal jam ketersediaan yang berbeda berdasarkan tanggal
    const mockScheduleByDate = {
        "26": ["10:00", "13:00", "16:00"],
        "27": ["08:00", "09:00", "11:00", "14:00"],
        "28": ["09:00", "11:00", "13:00", "15:00", "17:00", "19:00"],
        "29": ["13:00", "15:00", "20:00"],
        "30": ["09:00", "10:00", "11:00"],
        "31": ["14:00", "15:00", "16:00", "17:00"]
    };

    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('tutorSearch');
        const subjectCards = document.querySelectorAll('.subject-card');
        const tutorCards = document.querySelectorAll('.tutor-card');
        const noResults = document.getElementById('noResults');

        const backdrop = document.getElementById('modalBackdrop');
        const profileCard = document.getElementById('profileModalCard');
        const successCard = document.getElementById('successModalCard');
        const durationBtns = document.querySelectorAll('.duration-btn');
        const dayBtns = document.querySelectorAll('.day-num:not(.disabled)');
        const timeSlotsContainer = document.getElementById('timeSlotsContainer');

        let currentActiveTutor = null;
        let currentDurationMultiplier = 1;
        let selectedDate = "28"; // Default date
        let selectedTime = "";

        // ── LOGIK FILTER SEARCH ──
        function filterTutors() {
            const query = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;
            tutorCards.forEach(card => {
                const searchContent = card.getAttribute('data-searchable').toLowerCase();
                if (searchContent.includes(query)) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            noResults.style.display = (visibleCount === 0) ? 'block' : 'none';
        }

        searchInput.addEventListener('input', filterTutors);
        subjectCards.forEach(card => {
            card.addEventListener('click', function() {
                subjectCards.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                searchInput.value = this.getAttribute('data-subject');
                filterTutors();
            });
        });

        // ── LOGIK RENDERING TIME SLOTS BERDASARKAN TANGGAL ──
        function renderTimeSlots(date) {
            timeSlotsContainer.innerHTML = '';
            const slots = mockScheduleByDate[date] || ["09:00", "14:00"]; // Fallback default
            
            slots.forEach((time, index) => {
                const btn = document.createElement('div');
                btn.className = 'time-slot-btn' + (index === 0 ? ' active' : '');
                btn.innerText = time;
                
                if(index === 0) selectedTime = time;

                btn.addEventListener('click', function() {
                    document.querySelectorAll('.time-slot-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    selectedTime = this.innerText;
                });
                timeSlotsContainer.appendChild(btn);
            });
        }

        function formatRupiah(num) {
            return 'Rp ' + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function calculateAndRenderPrice() {
            if (!currentActiveTutor) return;
            const basePrice = currentActiveTutor.rate * currentDurationMultiplier;
            const totalPriceInclFee = basePrice + (basePrice * 0.05);
            document.getElementById('mTotalPrice').innerText = formatRupiah(totalPriceInclFee);
        }

        // Event handler klik Card Tutor (Membuka detail profil)
        tutorCards.forEach(card => {
            card.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-tutor-index'));
                const selectedTutor = tutorsData[index];
                currentActiveTutor = selectedTutor;
                
                currentDurationMultiplier = 1;
                durationBtns.forEach(btn => btn.classList.remove('active'));
                durationBtns[0].classList.add('active');

                // Reset tanggal ke 28 tiap kali buka profile baru
                dayBtns.forEach(btn => btn.classList.remove('active'));
                const defaultDay = Array.from(dayBtns).find(btn => btn.getAttribute('data-day') === "28");
                if (defaultDay) defaultDay.classList.add('active');
                selectedDate = "28";

                // Render time slots berdasarkan tanggal default
                renderTimeSlots(selectedDate);

                document.getElementById('mAvatar').src = this.querySelector('.tutor-avatar').src;
                document.getElementById('mName').innerText = selectedTutor.name;
                document.getElementById('mFaculty').innerText = selectedTutor.faculty;
                document.getElementById('mAboutText').innerText = selectedTutor.about;
                document.getElementById('mEducation').innerHTML = selectedTutor.edu;

                calculateAndRenderPrice();

                backdrop.classList.add('active');
                profileCard.classList.add('active');
                successCard.classList.remove('active');
            });
        });

        // ── LOGIK KLIK TANGGAL KALENDER ──
        dayBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                dayBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                selectedDate = this.getAttribute('data-day');
                
                // Perbarui jam ketersediaan sesuai tanggal yang baru diklik
                renderTimeSlots(selectedDate);
            });
        });

        // Event handler ganti Durasi
        durationBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                durationBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentDurationMultiplier = parseFloat(this.getAttribute('data-multiplier'));
                calculateAndRenderPrice();
            });
        });

        // Close Modal
        document.getElementById('closeModalBtn').addEventListener('click', function() {
            backdrop.classList.remove('remove');
            backdrop.classList.remove('active');
            profileCard.classList.remove('active');
        });

        // Request Session -> Success PopUp
        document.getElementById('btnRequestSession').addEventListener('click', function() {
            if (!currentActiveTutor) return;

            document.getElementById('sTutorName').innerText = currentActiveTutor.name;
            const textDuration = (currentDurationMultiplier === 1) ? '60 mins' : '90 mins';
            document.getElementById('sSubjectDuration').innerText = currentActiveTutor.subject + ' • ' + textDuration;
            
            // Set teks tanggal & jam konfirmasi secara dinamis sesuai pilihan user
            document.getElementById('sDateTime').innerText = 'July ' + selectedDate + ' • ' + selectedTime;

            profileCard.classList.remove('active');
            successCard.classList.add('active');
        });

        document.getElementById('btnSuccessClose').addEventListener('click', function(e) {
            e.preventDefault();
            backdrop.classList.remove('active');
            successCard.classList.remove('active');
        });
    });
</script>
@endpush