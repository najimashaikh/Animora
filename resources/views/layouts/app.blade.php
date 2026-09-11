<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Animora - Animation Library | Precision In Motion')</title>
    
    <!-- Favicon (Deer Head / Stag) -->
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animora Cyber-Blueprint Design System -->
    <link rel="stylesheet" href="{{ asset('css/cgbugs.css') }}">
    @yield('styles')
</head>
<body>

    <!-- Header Navigation (Responsive with Mobile Menu) -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Animora Logo" width="36" height="36">
                <span>Animora</span>
            </a>
            <ul class="nav-links desktop-only">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('browse') }}" class="{{ request()->routeIs('browse') ? 'active' : '' }}">Browse</a></li>
                <li><a href="{{ route('pipeline') }}" class="{{ request()->routeIs('pipeline') ? 'active' : '' }}">Pipeline</a></li>
            </ul>
        </div>
        <div class="nav-right desktop-only">
            <button class="nav-action" onclick="focusMainSearch()">Search</button>
            <button class="nav-action" onclick="alert('Studio Account Authenticated!')">Account</button>
        </div>
        <!-- Mobile Menu Toggle Button -->
        <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileDrawer" class="mobile-drawer">
        <ul class="mobile-nav-links">
            <li><a href="{{ route('home') }}" onclick="toggleMobileMenu()">Home</a></li>
            <li><a href="{{ route('browse') }}" onclick="toggleMobileMenu()">Browse Library</a></li>
            <li><a href="{{ route('pipeline') }}" onclick="toggleMobileMenu()">Pipeline Tools</a></li>
            <li><a href="javascript:void(0)" onclick="toggleMobileMenu(); focusMainSearch();">Search Assets</a></li>
            <li><a href="javascript:void(0)" onclick="toggleMobileMenu(); alert('Studio Account Authenticated!');">Account</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-copy">
            &copy; {{ date('Y') }} Animora. All Rights Reserved. Built with Laravel &amp; PostgreSQL.
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const drawer = document.getElementById('mobileDrawer');
            const btn = document.querySelector('.mobile-menu-btn');
            if (drawer) {
                drawer.classList.toggle('active');
            }
            if (btn) {
                btn.classList.toggle('active');
            }
        }

        function focusMainSearch() {
            const input = document.getElementById('mainSearchInput');
            if (input) {
                input.focus();
                input.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                window.location.href = "{{ route('browse') }}";
            }
        }
    </script>
    @yield('scripts')
</body>
</html>
