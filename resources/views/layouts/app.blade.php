<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Animora | Student Animation Asset Library & CGI Tools')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts: Minimalist High Contrast (Inter & Outfit) + Fredoka for Comic Cartoon elements -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animora Minimalist B&W Design System (Producer Toy Style) -->
    <link rel="stylesheet" href="{{ asset('css/cgbugs.css') }}?v={{ file_exists(public_path('css/cgbugs.css')) ? filemtime(public_path('css/cgbugs.css')) : time() }}">
    @yield('styles')
</head>
<body>

    <!-- Header Navigation (Sleek Sticky B&W) -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="brand-logo" aria-label="Animora Home">
                <img src="{{ asset('images/logo.png') }}" alt="Animora" class="brand-logo-img">
            </a>
            <ul class="nav-links desktop-only">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-right desktop-only">
            <a href="{{ route('home') }}#courses" class="nav-action-link">Explore Courses</a>
            @auth
                <div class="user-header-pill">
                    <!-- Initial Icon Badge -->
                    <span class="user-initial-icon">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </span>
                    <!-- Blackish Gray User Name -->
                    <span class="user-pill-name" title="{{ Auth::user()->name }}">
                        {{ Str::limit(Auth::user()->name, 16) }}
                    </span>
                    <!-- Red Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" style="margin: 0; padding: 0; display: inline-flex;">
                        @csrf
                        <button type="submit" class="btn-logout-red" title="Logout from Animora">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn-nav-auth-ghost">Sign In</a>
                <a href="{{ route('register') }}" class="btn-nav-auth-solid">Sign Up</a>
            @endauth
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
            <li><a href="{{ route('home') }}#about" onclick="toggleMobileMenu()">About</a></li>
            <li><a href="{{ route('home') }}#contact" onclick="toggleMobileMenu()">Contact Us</a></li>
            <li><a href="{{ route('home') }}#courses" onclick="toggleMobileMenu()" style="color: #ffffff; font-weight: 700;">Explore Courses &rarr;</a></li>
        </ul>
        <div class="mobile-drawer-auth">
            @auth
                <div class="mobile-user-card" style="grid-column: span 2;">
                    <div class="mobile-user-row">
                        <span class="user-initial-icon">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </span>
                        <div class="mobile-user-text">
                            <span class="mobile-user-name">{{ Auth::user()->name }}</span>
                            <span class="mobile-user-email">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" style="width: 100%; margin-top: 0.6rem;">
                        @csrf
                        <button type="submit" class="btn-logout-red-mobile">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Log Out</span>
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn-mobile-auth-ghost">Sign In</a>
                <a href="{{ route('register') }}" class="btn-mobile-auth-solid">Sign Up</a>
            @endauth
        </div>
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
                    <img src="{{ asset('images/logo.png') }}" alt="Animora" style="height: 38px; width: auto; max-width: 150px; object-fit: contain; margin-bottom: 1rem; display: block;">
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
