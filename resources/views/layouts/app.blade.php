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
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animora Minimalist B&W Design System (Producer Toy Style) -->
    <link rel="preload" href="{{ asset('css/cgbugs.css') }}?v={{ file_exists(public_path('css/cgbugs.css')) ? filemtime(public_path('css/cgbugs.css')) : time() }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/cgbugs.css') }}?v={{ file_exists(public_path('css/cgbugs.css')) ? filemtime(public_path('css/cgbugs.css')) : time() }}">
    @yield('styles')
</head>
<body>

    <!-- Header Navigation (Sleek Sticky B&W) -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="brand-logo" aria-label="Animora Home">
                <img src="{{ asset('images/logo.png') }}" alt="Animora" class="brand-logo-img" width="140" height="35" fetchpriority="high">
            </a>
            <ul class="nav-links desktop-only">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('student.work') }}" class="{{ request()->routeIs('student.work') ? 'active' : '' }}">Student Work</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('student.library') }}" class="{{ request()->routeIs('student.library') ? 'active' : '' }}">Student Library</a></li>
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
            <li><a href="{{ route('student.work') }}" onclick="toggleMobileMenu()">Student Work</a></li>
            <li><a href="{{ route('about') }}" onclick="toggleMobileMenu()">About</a></li>
            <li><a href="{{ route('student.library') }}" onclick="toggleMobileMenu()">Student Library</a></li>
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

    <!-- Animora & CG BUGS Clean Footer -->
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-brand">
                    <img src="{{ asset('images/logo.png') }}" alt="Animora" style="height: 38px; width: auto; max-width: 150px; object-fit: contain; margin-bottom: 1rem; display: block;">
                    <p>
                        Final year college project created by students of S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College, Sangamner in association with <strong>CG BUGS School of 3D Animation</strong>.
                    </p>
                    
                    <!-- CG BUGS Official Social Media Links -->
                    <div class="footer-social-wrap" title="Connect with CG BUGS">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/cgbugs/" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="CG BUGS on Instagram" aria-label="CG BUGS Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@cgbugs" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="CG BUGS on YouTube" aria-label="CG BUGS YouTube">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="currentColor"></polygon>
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/people/CG-BUGS-School-of-3D-Animation-Games-VFX/61556608560377/" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="CG BUGS on Facebook" aria-label="CG BUGS Facebook">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://wa.me/917737707710" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="Connect on WhatsApp (+91 77377 07710)" aria-label="CG BUGS WhatsApp">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                        </a>
                        <!-- Official Website -->
                        <a href="https://cgbugs.school" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="CG BUGS Official School Portal (cgbugs.school)" aria-label="CG BUGS Website">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-links">
                    <!-- Column 1: Quick Navigation -->
                    <div class="footer-col">
                        <h5>Explore</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('home') }}#courses">Explore Courses</a></li>
                            <li><a href="{{ route('student.work') }}">Student Work Gallery</a></li>
                            <li><a href="{{ route('home') }}#about">Mentors &amp; Faculty</a></li>
                            <li><a href="{{ route('about') }}">About Our Team &amp; Project</a></li>
                        </ul>
                    </div>

                    <!-- Column 2: Student Resources -->
                    <div class="footer-col">
                        <h5>Student Portal</h5>
                        <ul>
                            <li><a href="{{ route('student.library') }}">Student Library</a></li>
                            <li><a href="{{ route('browse') }}">3D Asset Library</a></li>
                            <li><a href="{{ route('pipeline') }}">Pipeline Tools &amp; Scripts</a></li>
                            <li><a href="{{ route('login') }}">Student Sign In</a></li>
                            <li><a href="{{ route('register') }}">New Student Registration</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Contact & Campus -->
                    <div class="footer-col">
                        <h5>Contact &amp; Campus</h5>
                        <ul>
                            <li><a href="{{ route('home') }}#contact">Campus Helpdesk Form</a></li>
                            <li><a href="mailto:najimashaikh267@gmail.com">najimashaikh267@gmail.com</a></li>
                            <li><a href="tel:02425223181">(02425) 223181 / 222869</a></li>
                            <li><a href="tel:7737707710">+91 77377 07710</a></li>
                            <li><span style="font-size: 0.8rem; color: #71717a;">Sangamner, Ahmednagar (MH)</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Animora. Final Year College Project by Sangamner College Students.</span>
                <span>In Association with <a href="https://cgbugs.school" target="_blank" rel="noopener noreferrer" style="color: #ffffff; text-decoration: underline;">CG BUGS School of 3D Animation</a></span>
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

        /* Instant Hover/Touch Link Prefetcher for 0ms transitions */
        (function() {
            const prefetched = new Set();
            function prefetch(url) {
                if (!url || prefetched.has(url)) return;
                if (url.startsWith('#') || url.includes('logout') || url.startsWith('javascript:')) return;
                try {
                    const u = new URL(url, window.location.origin);
                    if (u.origin !== window.location.origin) return;
                    prefetched.add(url);
                    const link = document.createElement('link');
                    link.rel = 'prefetch';
                    link.href = url;
                    document.head.appendChild(link);
                } catch(e) {}
            }
            document.addEventListener('mouseover', function(e) {
                const a = e.target.closest('a');
                if (a && a.href) prefetch(a.href);
            }, { passive: true });
            document.addEventListener('touchstart', function(e) {
                const a = e.target.closest('a');
                if (a && a.href) prefetch(a.href);
            }, { passive: true });
        })();
    </script>
    @yield('scripts')
</body>
</html>
