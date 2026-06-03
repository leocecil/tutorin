@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student/profile.css') }}">
@endpush

@section('content')
<div class="profile-page-wrapper">
    
    <div class="profile-top-banner">
        <div class="profile-avatar-circle">RA</div>
        <h1>Rafi Adhitama</h1>
        <p>Student • Universitas Airlangga</p>
    </div>

    <div class="profile-content-grid">
        
        <div>
            <div class="stats-row-container">
                <div class="stat-mini-card">
                    <span>Sessions</span>
                    <h2>12</h2>
                    <p>total booked</p>
                </div>
                <div class="stat-mini-card">
                    <span>Vouchers</span>
                    <h2>3</h2>
                    <p>available</p>
                </div>
            </div>

            <div class="menu-list-card">
                <a href="#" class="menu-item-link">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #fef3c7;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="16" y1="2" x2="16" y2="4"/><line x1="8" y1="2" x2="8" y2="4"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>My vouchers</h4>
                            <p>3 active • LOYAL10 expiring soon</p>
                        </div>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>

                <a href="#" class="menu-item-link">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #e0f2fe;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>Saved tutors</h4>
                            <p>5 tutors bookmarked</p>
                        </div>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>

                <a href="#" class="menu-item-link">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #e0e7ff;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>Payment methods</h4>
                            <p>GoPay • BCA Virtual Account</p>
                        </div>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>

                <a href="#" class="menu-item-link">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #ffedd5;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2"><path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0 5.4 5.4 0 0 0 0 7.66l.77.78L12 21l7.65-7.66.77-.78a5.4 5.4 0 0 0 0-7.66z"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>Referral program</h4>
                            <p>Invite friends, earn credits</p>
                        </div>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>

                <div class="menu-item-link">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #f1f5f9;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>Notifications</h4>
                            <p>Session reminders, updates</p>
                        </div>
                    </div>
                    <label class="switch-toggle">
                        <input type="checkbox" checked>
                        <span class="slider-toggle"></span>
                    </label>
                </div>

                <a href="#" class="menu-item-link logout-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="menu-item-left">
                        <div class="menu-icon-wrapper" style="background-color: #fee2e2;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        </div>
                        <div class="menu-text-block">
                            <h4>Log out</h4>
                        </div>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <form id="logout-form" action="#" method="POST" style="display: none;">@csrf</form>
            </div>
        </div>

        <div>
            <div class="sidebar-block-card dark-theme">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#f4f6f9" stroke-width="2" style="position: absolute; right: 16px; top: 16px;"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
                
                <h3>Upcoming Session</h3>
                
                <div class="tutor-mini-profile">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=150&auto=format&fit=crop" class="tutor-mini-avatar" alt="Tutor">
                    <div class="tutor-mini-info">
                        <h4>Dian Ramadhani</h4>
                        <p>Calculus II • Integral</p>
                    </div>
                </div>

                <div class="schedule-badge-info">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Tomorrow, 10:00 AM
                </div>

                <a href="#" class="btn-action-block">View Details</a>
            </div>

            <div class="sidebar-block-card">
                <h3 class="help-title">Need help?</h3>
                <p class="help-desc">Our support team is available 24/7 to assist with your learning journey.</p>
                <a href="#" class="link-help-action">
                    Contact Help Center
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection