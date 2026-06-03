@extends('layouts.app')

@section('title', 'Explore Tutors — Tutorin')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student/explore.css') }}">
@endpush

@section('content')
<div class="explore-container">
    
    <div class="explore-header">
        <h1>Find your perfect tutor</h1>
        <p>Connect with experienced tutors across 50+ subjects and reach your academic goals through personalized 1-on-1 sessions.</p>
    </div>

    <div class="filter-bar">
        <div class="filter-group">
            <label for="filterSubject">Subject</label>
            <select id="filterSubject" class="filter-control">
                <option value="">All subjects</option>
                <option value="Calculus">Calculus</option>
                <option value="Linear Algebra">Linear Algebra</option>
                <option value="Data Structures">Data Structures</option>
                <option value="Physics">Physics</option>
                <option value="Web Dev">Web Development</option>
                <option value="Statistics">Statistics</option>
                <option value="Python">Python</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="filterPrice">Max Price (Hr)</label>
            <select id="filterPrice" class="filter-control">
                <option value="">Any price</option>
                <option value="50000">Under Rp 50.000</option>
                <option value="60000">Under Rp 60.000</option>
                <option value="70000">Under Rp 70.000</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="filterRating">Rating</label>
            <select id="filterRating" class="filter-control">
                <option value="">Any rating</option>
                <option value="4.7">★ 4.7 & up</option>
                <option value="4.9">★ 4.9 & up</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="filterAvailability">Availability</label>
            <input type="date" id="filterAvailability" class="filter-control">
        </div>

        <button class="btn-search-filter" id="btnSearch">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            Search
        </button>

        <div class="btn-tune-filter">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg>
        </div>
    </div>

    <div class="explore-grid" id="exploreGrid">
        
        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="0" data-searchable="dian pangestu informatics engineering ui linear algebra calculus i python" data-price="50000" data-rating="4.9">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Dian Pangestu</h4>
                    <p>Informatics Engineering · UI</p>
                    <div class="badge-rating">★ 4.9</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Linear Algebra</span>
                <span class="tag">Calculus I</span>
                <span class="tag">Python</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 50.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="1" data-searchable="budi raharjo computer science itb data structures algorithms c++" data-price="60000" data-rating="4.8">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Budi Raharjo</h4>
                    <p>Computer Science · ITB</p>
                    <div class="badge-rating">★ 4.8</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Data Structures</span>
                <span class="tag">Algorithms</span>
                <span class="tag">C++</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 60.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="2" data-searchable="siti aminah information systems its web dev database sql" data-price="45000" data-rating="4.9">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Siti Aminah</h4>
                    <p>Information Systems · ITS</p>
                    <div class="badge-rating">★ 4.9</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Web Dev</span>
                <span class="tag">Database</span>
                <span class="tag">SQL</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 45.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="3" data-searchable="fadhil muhammad mechanical engineering ugm physics calculus static" data-price="55000" data-rating="4.7">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Fadhil Muhammad</h4>
                    <p>Mechanical Engineering · UGM</p>
                    <div class="badge-rating">★ 4.7</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Physics</span>
                <span class="tag">Calculus</span>
                <span class="tag">Statics</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 55.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="4" data-searchable="alisha putri statistics unair statistics r-programming data analysis" data-price="48000" data-rating="4.8">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Alisha Putri</h4>
                    <p>Statistics · Unair</p>
                    <div class="badge-rating">★ 4.8</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Statistics</span>
                <span class="tag">R-Programming</span>
                <span class="tag">Data Analysis</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 48.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="5" data-searchable="kevin wijaya mobile development binus web dev react native flutter javascript" data-price="65000" data-rating="4.6">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Kevin Wijaya</h4>
                    <p>Mobile Dev · Binus</p>
                    <div class="badge-rating">★ 4.6</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Web Dev</span>
                <span class="tag">React Native</span>
                <span class="tag">Flutter</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 65.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="6" data-searchable="nadia utami electrical engineering itb physics circuits digital systems" data-price="58000" data-rating="4.9">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Nadia Utami</h4>
                    <p>Electrical Engineering · ITB</p>
                    <div class="badge-rating">★ 4.9</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Physics</span>
                <span class="tag">Circuits</span>
                <span class="tag">Digital Systems</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 58.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="7" data-searchable="rizky pratama software engineering ui data structures java oop" data-price="52000" data-rating="4.7">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Rizky Pratama</h4>
                    <p>Software Engineering · UI</p>
                    <div class="badge-rating">★ 4.7</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Data Structures</span>
                <span class="tag">Java</span>
                <span class="tag">OOP</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 52.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="8" data-searchable="amanda lestari mathematics ugm calculus linear algebra geometry" data-price="50000" data-rating="5.0">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Amanda Lestari</h4>
                    <p>Mathematics · UGM</p>
                    <div class="badge-rating">★ 5.0</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Calculus</span>
                <span class="tag">Linear Algebra</span>
                <span class="tag">Geometry</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 50.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="9" data-searchable="dimas anggara cyber security binus networks python cryptography" data-price="70000" data-rating="4.8">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Dimas Anggara</h4>
                    <p>Cyber Security · Binus</p>
                    <div class="badge-rating">★ 4.8</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Networks</span>
                <span class="tag">Python</span>
                <span class="tag">Cryptography</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 70.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="10" data-searchable="rachel stevanie chemical engineering its physics chemistry thermodynamics" data-price="55000" data-rating="4.9">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Rachel Stevanie</h4>
                    <p>Chemical Engineering · ITS</p>
                    <div class="badge-rating">★ 4.9</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Physics</span>
                <span class="tag">Chemistry</span>
                <span class="tag">Thermodynamics</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 55.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="tutor-card" style="cursor:pointer;" data-tutor-index="11" data-searchable="taufiq hidayat data science unair statistics python machine learning" data-price="60000" data-rating="4.8">
            <div class="tutor-header">
                <img src="https://images.unsplash.com/photo-1628157582853-a796fa650a6a?auto=format&fit=crop&w=150&h=150&q=80" alt="Tutor" class="tutor-avatar">
                <div class="tutor-info">
                    <h4>Taufiq Hidayat</h4>
                    <p>Data Science · Unair</p>
                    <div class="badge-rating">★ 4.8</div>
                </div>
            </div>
            <div class="tutor-tags">
                <span class="tag">Statistics</span>
                <span class="tag">Python</span>
                <span class="tag">Machine Learning</span>
            </div>
            <div class="tutor-footer">
                <div class="price-box">
                    <span>Rate / hour</span>
                    <strong>Rp 60.000</strong>
                </div>
                <button class="btn-book">Book Lesson</button>
            </div>
        </div>

        <div class="no-results" id="noResults">No tutors match your specific criteria.</div>

    </div>

    <div class="pagination-wrapper" id="paginationWrapper"></div>

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
    // DATA REPOSITORI 12 TUTOR
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

    // MOCK DATA JADWAL TANGGAL
    const mockScheduleByDate = {
        "26": ["10:00", "13:00", "16:00"],
        "27": ["08:00", "09:00", "11:00", "14:00"],
        "28": ["09:00", "11:00", "13:00", "15:00", "17:00", "19:00"],
        "29": ["13:00", "15:00", "20:00"],
        "30": ["09:00", "10:00", "11:00"],
        "31": ["14:00", "15:00", "16:00", "17:00"]
    };

    document.addEventListener('DOMContentLoaded', function() {
        const itemsPerPage = 9;
        let currentPage = 1;

        const subjectSelect = document.getElementById('filterSubject');
        const priceSelect = document.getElementById('filterPrice');
        const ratingSelect = document.getElementById('filterRating');
        const btnSearch = document.getElementById('btnSearch');
        const cards = Array.from(document.querySelectorAll('.tutor-card'));
        const noResults = document.getElementById('noResults');
        const paginationWrapper = document.getElementById('paginationWrapper');

        // Modal Variables
        const backdrop = document.getElementById('modalBackdrop');
        const profileCard = document.getElementById('profileModalCard');
        const successCard = document.getElementById('successModalCard');
        const durationBtns = document.querySelectorAll('.duration-btn');
        const dayBtns = document.querySelectorAll('.day-num:not(.disabled)');
        const timeSlotsContainer = document.getElementById('timeSlotsContainer');

        let currentActiveTutor = null;
        let currentDurationMultiplier = 1;
        let selectedDate = "28"; 
        let selectedTime = "";

        // ── LOGIK FILTER UTAMA & PAGINATION ──
        function filterAndPaginate() {
            const subjectTarget = subjectSelect.value.toLowerCase();
            const maxPriceTarget = priceSelect.value ? parseInt(priceSelect.value) : Infinity;
            const minRatingTarget = ratingSelect.value ? parseFloat(ratingSelect.value) : 0;

            let visibleCardsAfterFilter = [];

            cards.forEach(card => {
                const searchableText = card.getAttribute('data-searchable').toLowerCase();
                const cardPrice = parseInt(card.getAttribute('data-price'));
                const cardRating = parseFloat(card.getAttribute('data-rating'));

                const matchSubject = subjectTarget === "" || searchableText.includes(subjectTarget);
                const matchPrice = cardPrice <= maxPriceTarget;
                const matchRating = cardRating >= minRatingTarget;

                if (matchSubject && matchPrice && matchRating) {
                    card.classList.remove('hidden-filter');
                    visibleCardsAfterFilter.push(card);
                } else {
                    card.classList.add('hidden-filter');
                    card.classList.add('hidden-page');
                }
            });

            if (visibleCardsAfterFilter.length === 0) {
                noResults.style.display = 'block';
                paginationWrapper.innerHTML = '';
                return;
            } else {
                noResults.style.display = 'none';
            }

            const totalPages = Math.ceil(visibleCardsAfterFilter.length / itemsPerPage);
            if (currentPage > totalPages) currentPage = totalPages || 1;

            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            visibleCardsAfterFilter.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.classList.remove('hidden-page');
                } else {
                    card.classList.add('hidden-page');
                }
            });

            renderPaginationControls(totalPages);
        }

        function renderPaginationControls(totalPages) {
            paginationWrapper.innerHTML = '';
            if (totalPages <= 1) return;

            const prevBtn = document.createElement('div');
            prevBtn.className = `page-btn ${currentPage === 1 ? 'disabled' : ''}`;
            prevBtn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>`;
            if (currentPage > 1) {
                prevBtn.addEventListener('click', () => {
                    currentPage--;
                    filterAndPaginate();
                });
            }
            paginationWrapper.appendChild(prevBtn);

            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('div');
                pageBtn.className = `page-btn ${i === currentPage ? 'active' : ''}`;
                pageBtn.innerText = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    filterAndPaginate();
                });
                paginationWrapper.appendChild(pageBtn);
            }

            const nextBtn = document.createElement('div');
            nextBtn.className = `page-btn ${currentPage === totalPages ? 'disabled' : ''}`;
            nextBtn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6 6-6"/></svg>`;
            if (currentPage < totalPages) {
                nextBtn.addEventListener('click', () => {
                    currentPage++;
                    filterAndPaginate();
                });
            }
            paginationWrapper.appendChild(nextBtn);
        }

        // ── LOGIK MODAL INTERAKTIF (DIADAPTASI DARI DASHBOARD) ──
        function renderTimeSlots(date) {
            timeSlotsContainer.innerHTML = '';
            const slots = mockScheduleByDate[date] || ["09:00", "14:00"];
            
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
        cards.forEach(card => {
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

        // Logik klik Tanggal Kalender
        dayBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation(); // Mencegah bentrok dengan penutupan modal
                dayBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                selectedDate = this.getAttribute('data-day');
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
            backdrop.classList.remove('active');
            profileCard.classList.remove('active');
        });

        // Request Session -> Success PopUp
        document.getElementById('btnRequestSession').addEventListener('click', function() {
            if (!currentActiveTutor) return;

            document.getElementById('sTutorName').innerText = currentActiveTutor.name;
            const textDuration = (currentDurationMultiplier === 1) ? '60 mins' : '90 mins';
            document.getElementById('sSubjectDuration').innerText = currentActiveTutor.subject + ' • ' + textDuration;
            document.getElementById('sDateTime').innerText = 'July ' + selectedDate + ' • ' + selectedTime;

            profileCard.classList.remove('active');
            successCard.classList.add('active');
        });

        document.getElementById('btnSuccessClose').addEventListener('click', function(e) {
            e.preventDefault();
            backdrop.classList.remove('active');
            successCard.classList.remove('active');
        });

        // Pemicu Event Listener Filter
        btnSearch.addEventListener('click', () => { currentPage = 1; filterAndPaginate(); });
        subjectSelect.addEventListener('change', () => { currentPage = 1; filterAndPaginate(); });
        priceSelect.addEventListener('change', () => { currentPage = 1; filterAndPaginate(); });
        ratingSelect.addEventListener('change', () => { currentPage = 1; filterAndPaginate(); });

        // Inisialisasi awal halaman
        filterAndPaginate();
    });
</script>
@endpush