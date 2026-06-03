<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard — Tutorin')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700;9..40,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

    <aside class="sidebar">
        <div>
            <div class="brand-logo">
                {{-- <img src="{{ asset('images/logo.jpeg') }}" alt="Tutorin Logo"> --}}
                <span>Tutorin</span>
            </div>

            <ul class="nav-menu">
                <li class="nav-item {{ request()->routeIs('student.home') ? 'active' : '' }}">
                    <a href="{{ route('student.home') }}">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        Home
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('student.explore') ? 'active' : '' }}">
                    <a href="{{ route('student.explore') }}">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        Explore
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('student.sessions') ? 'active' : '' }}">
                    <a href="{{ route('student.sessions') }}">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                        Sessions
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('student.massage') ? 'active' : '' }}">
                    <a href="{{ route('student.massage') }}">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        Messages
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="nav-item {{ request()->routeIs('student.profile') ? 'active' : '' }}">
                <a href="{{ route('student.profile') }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    Profile
                </a>
            </div>
        </div>
    </aside>

    <main class="main-container">
        <header class="topbar">
            <div class="user-greeting">
                @yield('greeting')
            </div>

            <div class="topbar-actions">
                <div class="notification-wrapper">
                    <button class="btn-icon" id="notifBellBtn" aria-label="Notifications">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                        <div class="notification-badge" id="notifBadge"></div>
                    </button>

                    <div class="notif-dropdown" id="notifDropdown">
                        <div class="notif-header">
                            <h3>Notifications</h3>
                            <button class="btn-mark-read" id="markAllReadBtn">Mark all as read</button>
                        </div>

                        <div class="notif-list">
                            <a href="#" class="notif-item unread">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80" class="notif-avatar" alt="Dian">
                                <div class="notif-content">
                                    <p class="notif-title"><strong>Dian Pangestu</strong> accepted your session request for Linear Algebra.</p>
                                    <span class="notif-time">2 mins ago</span>
                                </div>
                            </a>

                            <a href="#" class="notif-item unread">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80" class="notif-avatar" alt="Budi">
                                <div class="notif-content">
                                    <p class="notif-title"><strong>Budi Raharjo</strong> sent you a message regarding tomorrow's class schedule.</p>
                                    <span class="notif-time">1 hour ago</span>
                                </div>
                            </a>

                            <a href="#" class="notif-item">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&h=80&q=80" class="notif-avatar" alt="Siti">
                                <div class="notif-content">
                                    <p class="notif-title">Your lesson with <strong>Siti Aminah</strong> has been successfully completed.</p>
                                    <span class="notif-time">Yesterday</span>
                                </div>
                            </a>
                        </div>

                        <div class="notif-footer">
                            <a href="#" class="btn-view-all">View all notifications</a>
                        </div>
                    </div>
                </div>

                <div class="avatar">RA</div>
            </div>
        </header>

        <div class="content-body">
            @yield('content')
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const bellBtn   = document.getElementById('notifBellBtn');
            const dropdown  = document.getElementById('notifDropdown');
            const badge     = document.getElementById('notifBadge');
            const markBtn   = document.getElementById('markAllReadBtn');

            bellBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });

            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target) && !bellBtn.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });

            markBtn.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelectorAll('.notif-item.unread').forEach(item => item.classList.remove('unread'));
                if (badge) badge.style.display = 'none';
            });
        });
    </script>

    @stack('scripts')
</body>
</html>