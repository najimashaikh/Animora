<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Animora | Student Animation Asset Library & CGI Tools')</title>
    
    <!-- Favicon (Transparent Stag) -->
    <link rel="icon" type="image/png" href="{{ secure_asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ secure_asset('favicon.ico') }}">

    <!-- Google Fonts: Minimalist High Contrast (Inter & Outfit) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animora Minimalist B&W Design System (Producer Toy Style) -->
    <link rel="stylesheet" href="{{ secure_asset('css/cgbugs.css') }}">
    @yield('styles')
</head>
<body>

    <!-- Header Navigation (Producer Toy Minimalist B&W) -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="brand-logo">
                <img src="{{ secure_asset('images/logo.png') }}" alt="Animora Logo" width="32" height="32">
                <span>Animora</span>
                <span class="brand-badge">Student Portal</span>
            </a>
            <ul class="nav-links desktop-only">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Store</a></li>
                <li><a href="{{ route('browse', 'character-rigs') }}">Student Rigs</a></li>
                <li><a href="{{ route('browse', 'production-assets') }}">Sets &amp; Props</a></li>
                <li><a href="{{ route('pipeline') }}">Pipeline</a></li>
            </ul>
        </div>
        <div class="nav-right desktop-only">
            <button class="nav-action" onclick="focusMainSearch()">
                <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Search
            </button>
            <button class="btn-student-auth" onclick="alert('Student Campus Account: Authenticated!');">
                Student Sign In
            </button>
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
            <li><a href="{{ route('home') }}" onclick="toggleMobileMenu()">Store / Catalog</a></li>
            <li><a href="{{ route('browse', 'character-rigs') }}" onclick="toggleMobileMenu()">Student Rigs</a></li>
            <li><a href="{{ route('browse', 'production-assets') }}" onclick="toggleMobileMenu()">Sets &amp; Environments</a></li>
            <li><a href="{{ route('browse', 'animation-clips') }}" onclick="toggleMobileMenu()">Mocap &amp; Cycles</a></li>
            <li><a href="{{ route('pipeline') }}" onclick="toggleMobileMenu()">Pipeline Tools</a></li>
            <li><a href="javascript:void(0)" onclick="toggleMobileMenu(); focusMainSearch();">Search Assets</a></li>
            <li><a href="javascript:void(0)" onclick="toggleMobileMenu(); alert('Student Campus Account: Authenticated!');" style="color: #ffffff; font-weight: 700;">Student Sign In &rarr;</a></li>
        </ul>
    </div>

    <!-- Main Dynamic Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Producer Toy Minimalist Footer -->
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-brand">
                    <h4>ANIMORA CAMPUS</h4>
                    <p>
                        The open digital asset marketplace and learning portal for 3D animation students. Download production-tested character rigs, sets, and pipeline automation tools.
                    </p>
                </div>
                <div class="footer-links">
                    <div class="footer-col">
                        <h5>Student Library</h5>
                        <ul>
                            <li><a href="{{ route('browse', 'character-rigs') }}">Character Rigs</a></li>
                            <li><a href="{{ route('browse', 'production-assets') }}">Production Assets</a></li>
                            <li><a href="{{ route('browse', 'animation-clips') }}">Mocap Loops</a></li>
                            <li><a href="{{ route('pipeline') }}">Pipeline Scripts</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h5>Software Targets</h5>
                        <ul>
                            <li><a href="{{ route('browse') }}?software=Maya">Autodesk Maya</a></li>
                            <li><a href="{{ route('browse') }}?software=Blender">Blender 4.x</a></li>
                            <li><a href="{{ route('browse') }}?software=Houdini">SideFX Houdini</a></li>
                            <li><a href="{{ route('browse') }}?software=Unreal">Unreal Engine</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h5>Campus Access</h5>
                        <ul>
                            <li><a href="javascript:void(0)" onclick="alert('100% Free for educational and portfolio use.');">Student License</a></li>
                            <li><a href="javascript:void(0)" onclick="alert('Submission Ready: Verified for College Viva & Reel.');">Viva Guidelines</a></li>
                            <li><a href="javascript:void(0)" onclick="alert('Neon PostgreSQL Serverless Active.');">Database Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Animora. Powered by Laravel &amp; PostgreSQL. Minimalist Producer Toy Edition.</span>
                <span>Built for Student Excellence</span>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
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
