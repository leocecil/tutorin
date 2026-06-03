@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student/sessions.css') }}">
@endpush

@section('content')
<div class="sessions-container">
    
    <div class="sessions-header">
        <div class="sessions-title">
            <h1>Your Sessions</h1>
            <p>Manage your upcoming learning journeys and review past achievements.</p>
        </div>
        <div class="sessions-tabs">
            <button class="tab-btn active" onclick="switchTab('upcoming', this)">Upcoming</button>
            <button class="tab-btn" onclick="switchTab('completed', this)">Completed</button>
        </div>
    </div>

    <div id="upcoming-tab" class="sessions-list tab-content active">
        <div class="session-card">
            <div class="session-left">
                <div class="date-badge">
                    <span class="day">27</span>
                    <span class="month">Apr</span>
                </div>
                <div class="session-details">
                    <h3>Dian Ramadhani</h3>
                    <div class="session-meta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                        Mathematics · Linear Algebra
                    </div>
                </div>
            </div>
            <div class="session-right">
                <div class="time-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    15:00 — 16:30
                </div>
                <div class="status-badge">Confirmed</div>
                <button class="btn-options">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
            </div>
        </div>

        <div class="session-card">
            <div class="session-left">
                <div class="date-badge">
                    <span class="day">29</span>
                    <span class="month">Apr</span>
                </div>
                <div class="session-details">
                    <h3>Arief Santoso</h3>
                    <div class="session-meta">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                        Physics · Thermodynamics
                    </div>
                </div>
            </div>
            <div class="session-right">
                <div class="time-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    10:00 — 11:00
                </div>
                <div class="status-badge">Confirmed</div>
                <button class="btn-options">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="completed-tab" class="sessions-list tab-content">
        <div class="session-card">
            <div class="session-left">
                <div class="date-badge" style="background: #f1f5f9; color: #475569;">
                    <span class="day">20</span>
                    <span class="month">Apr</span>
                </div>
                <div class="session-details">
                    <h3>Dian Ramadhani</h3>
                    <div class="session-meta" style="margin-bottom: 8px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                        Mathematics · Calculus II
                    </div>
                    <button class="btn-rate-session" onclick="openRatingPage('Dian Ramadhani', 'Mathematics • Calculus II • 20 Apr', 'DR')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        Rate this session
                    </button>
                </div>
            </div>
            <div class="session-right">
                <div class="time-badge" style="background: #f1f5f9; color: #475569;">
                    14:00 — 15:30
                </div>
                <div class="status-badge completed">Completed</div>
                <button class="btn-options">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
            </div>
        </div>

        <div class="session-card">
            <div class="session-left">
                <div class="date-badge" style="background: #f1f5f9; color: #475569;">
                    <span class="day">12</span>
                    <span class="month">Apr</span>
                </div>
                <div class="session-details">
                    <h3>Siti Nurhaliza</h3>
                    <div class="session-meta" style="margin-bottom: 8px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                        Economics · Macro Economics
                    </div>
                    <div class="rated-stars">
                        <span>RATED</span>
                        <div style="display:flex; gap:2px;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="session-right">
                <div class="time-badge" style="background: #f1f5f9; color: #475569;">
                    13:00 — 14:30
                </div>
                <div class="status-badge completed">Completed</div>
                <button class="btn-options">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
            </div>
        </div>
    </div>

    {{-- <div class="promo-grid">
        <div class="promo-card card-dark">
            <div>
                <h4>Tutor Guarantee</h4>
                <p>Not happy with your first session? We'll find you a new tutor for free.</p>
            </div>
            <a href="#" class="btn-learn-more">
                Learn More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="promo-card card-light">
            <div>
                <div class="icon-wrapper">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0f172a" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="badge-success-mini">98% Success</div>
                <h4>Academic Edge</h4>
                <p>Join 5,000+ students excelling in their core subjects this semester.</p>
            </div>
        </div>

        <div class="promo-card card-orange">
            <div>
                <h4>Invite Friends</h4>
                <p>Give $20, Get $20. Sharing knowledge pays off for everyone.</p>
            </div>
            <button class="btn-refer">Refer Now</button>
        </div>
    </div> --}}

</div>

<div id="ratingPageOverlay" class="rating-page-overlay">
    <div class="rating-wrapper">
        
        <div class="rating-back-header">
            <button class="btn-back-circle" onclick="closeRatingPage()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0f172a" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </button>
            <h2>Rate your session</h2>
        </div>

        <div class="rating-block-card tutor-info-row">
            <div class="tutor-avatar-dummy" id="targetInitials">DR</div>
            <div class="tutor-info-text">
                <h4 id="targetTutorName">Dian Ramadhani</h4>
                <p id="targetSessionMeta">Mathematics • Calculus II • 20 Apr</p>
            </div>
        </div>

        <div class="rating-block-card">
            <h5>Overall rating</h5>
            <div class="star-rating-row">
                <span class="star-icon" onclick="setStars(1)">★</span>
                <span class="star-icon" onclick="setStars(2)">★</span>
                <span class="star-icon" onclick="setStars(3)">★</span>
                <span class="star-icon" onclick="setStars(4)">★</span>
                <span class="star-icon" onclick="setStars(5)">★</span>
            </div>
        </div>

        <div class="rating-block-card">
            <h5>What went well?</h5>
            <div class="chips-container">
                <div class="chip-btn" onclick="toggleChip(this)">Clear explanation</div>
                <div class="chip-btn" onclick="toggleChip(this)">Patient & kind</div>
                <div class="chip-btn" onclick="toggleChip(this)">Well prepared</div>
                <div class="chip-btn" onclick="toggleChip(this)">Punctual</div>
            </div>
        </div>

        <div class="rating-block-card">
            <h5>Public review (optional)</h5>
            <textarea class="review-textarea" placeholder="Share your experience working with this tutor to help other students..."></textarea>
        </div>

        <button class="btn-submit-rating" onclick="submitRating()">Submit rating</button>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Fungsi Logika Interaksi Perpindahan Tab Sesi
    function switchTab(tabName, element) {
        const contents = document.querySelectorAll('.tab-content');
        contents.forEach(content => content.classList.remove('active'));

        const buttons = document.querySelectorAll('.tab-btn');
        buttons.forEach(btn => btn.classList.remove('active'));

        document.getElementById(`${tabName}-tab`).classList.add('active');
        element.classList.add('active');
    }

    // Fungsi Membuka Halaman Overlay Rating & Memasukkan Data Dinamis
    function openRatingPage(tutorName, sessionMeta, initials) {
        document.getElementById('targetTutorName').innerText = tutorName;
        document.getElementById('targetSessionMeta').innerText = sessionMeta;
        document.getElementById('targetInitials').innerText = initials;
        
        // Reset form rating ke kondisi awal semula tiap kali dibuka
        resetRatingForm();
        
        document.getElementById('ratingPageOverlay').style.display = 'block';
        document.body.style.overflow = 'hidden'; // Kunci scroll halaman utama belakang
    }

    // Fungsi Menutup Kembali Overlay Rating
    function closeRatingPage() {
        document.getElementById('ratingPageOverlay').style.display = 'none';
        document.body.style.overflow = 'auto'; // Aktifkan kembali scroll halaman utama
    }

    // Logika Pemilihan Skor Bintang
    function setStars(ratingValue) {
        const stars = document.querySelectorAll('.star-icon');
        stars.forEach((star, index) => {
            if (index < ratingValue) {
                star.classList.add('selected');
            } else {
                star.classList.remove('selected');
            }
        });
    }

    // Logika Pemilihan Komponen Chips Multi-Select
    function toggleChip(chipElement) {
        chipElement.classList.toggle('active');
    }

    // Reset Form Inputan
    function resetRatingForm() {
        const stars = document.querySelectorAll('.star-icon');
        stars.forEach(star => star.classList.remove('selected'));

        const chips = document.querySelectorAll('.chip-btn');
        chips.forEach(chip => chip.classList.remove('active'));

        document.querySelector('.review-textarea').value = '';
    }

    // Trigger Aksi Saat Klik Tombol Submit Rating
    function submitRating() {
        alert('Thank you! Your rating has been successfully submitted.');
        closeRatingPage();
    }
</script>
@endpush