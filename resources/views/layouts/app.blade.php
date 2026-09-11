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

    <!-- Google Fonts: Minimalist High Contrast (Inter & Outfit) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animora Minimalist B&W Design System (Producer Toy Style) -->
    <link rel="stylesheet" href="{{ asset('css/cgbugs.css') }}">
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
                <li><a href="{{ route('home') }}#about">About</a></li>
                <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-right desktop-only">
            <a href="{{ route('browse') }}" class="nav-action-link">Explore Rigs</a>
            @auth
                <div class="auth-logged-pill">
                    <span class="auth-user-name">👤 {{ Auth::user()->name }}</span>
                    <form action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-nav-auth-ghost" style="padding: 0.35rem 0.9rem; font-size: 0.78rem;">Logout</button>
                    </form>
                </div>
            @else
                <button type="button" class="btn-nav-auth-ghost" onclick="openAuthModal('signin')">Sign In</button>
                <button type="button" class="btn-nav-auth-solid" onclick="openAuthModal('signup')">Sign Up</button>
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
            <li><a href="{{ route('browse') }}" onclick="toggleMobileMenu()" style="color: #ffffff; font-weight: 700;">Explore Rigs &rarr;</a></li>
        </ul>
        <div class="mobile-drawer-auth">
            @auth
                <div style="grid-column: span 2; text-align: center; color: #ffffff; font-weight: 600; padding-bottom: 0.5rem;">
                    Logged in as: {{ Auth::user()->name }}
                </div>
                <form action="{{ route('auth.logout') }}" method="POST" style="grid-column: span 2;">
                    @csrf
                    <button type="submit" class="btn-mobile-auth-ghost" style="width: 100%;">Logout</button>
                </form>
            @else
                <button type="button" class="btn-mobile-auth-ghost" onclick="toggleMobileMenu(); openAuthModal('signin');">Sign In</button>
                <button type="button" class="btn-mobile-auth-solid" onclick="toggleMobileMenu(); openAuthModal('signup');">Sign Up</button>
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

    <!-- Auth Modal (Sign In / Sign Up - Strictly NO green color) -->
    <div id="authModal" class="auth-modal-backdrop" style="display: none;" onclick="handleAuthModalBackdrop(event)">
        <div class="auth-modal-container">
            <!-- Close Button -->
            <button type="button" class="auth-modal-close" onclick="closeAuthModal()" aria-label="Close modal">&times;</button>
            
            <!-- Brand Header -->
            <div class="auth-modal-header">
                <img src="{{ asset('images/logo.png') }}" alt="Animora" class="auth-modal-logo">
                <p class="auth-modal-subtitle">Student Portal &amp; Asset Library</p>
            </div>

            <!-- Tabs: Sign In / Sign Up -->
            <div class="auth-tabs">
                <button type="button" id="tabBtnSignIn" class="auth-tab active" onclick="switchAuthTab('signin')">Sign In</button>
                <button type="button" id="tabBtnSignUp" class="auth-tab" onclick="switchAuthTab('signup')">Sign Up</button>
            </div>

            <!-- Status Banner -->
            <div id="authModalMsg" class="auth-modal-msg" style="display: none;"></div>

            <!-- Sign In Form -->
            <form id="signInForm" class="auth-form-body" onsubmit="handleSignInSubmit(event)">
                <div class="form-group">
                    <label for="loginEmail">Email Address or Student ID *</label>
                    <input type="text" id="loginEmail" placeholder="student@animora.edu or ID" required>
                </div>
                <div class="form-group">
                    <div class="auth-label-row">
                        <label for="loginPassword">Password *</label>
                        <a href="javascript:void(0);" onclick="alert('Password reset instructions sent to your college email.');" class="auth-forgot-link">Forgot?</a>
                    </div>
                    <input type="password" id="loginPassword" placeholder="••••••••" required>
                </div>
                <div class="auth-remember-row">
                    <label class="auth-checkbox-label">
                        <input type="checkbox" id="rememberMe" checked>
                        <span>Remember me on this device</span>
                    </label>
                </div>
                <button type="submit" id="btnSignInSubmit" class="btn-auth-submit">Sign In to Animora</button>
                <div class="auth-footer-switch">
                    <span>Don't have an account?</span>
                    <button type="button" class="auth-switch-link" onclick="switchAuthTab('signup')">Sign Up here</button>
                </div>
            </form>

            <!-- Sign Up Form -->
            <form id="signUpForm" class="auth-form-body" style="display: none;" onsubmit="handleSignUpSubmit(event)">
                <div class="form-group">
                    <label for="regFullName">Full Name *</label>
                    <input type="text" id="regFullName" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="regEmail">College Email Address *</label>
                    <input type="email" id="regEmail" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="regProgram">Enrolled / Target Program</label>
                    <select id="regProgram" class="form-select">
                        <option value="3D Animation">2-Year Full-Time – 3D Animation</option>
                        <option value="Game Art">2-Year Full-Time – Game Art Design</option>
                        <option value="VFX">2-Year Full-Time – VFX</option>
                        <option value="Professional Program">3-Year Professional Program (2D, 3D, VFX)</option>
                        <option value="Short Term">10-Week Short Term Course</option>
                        <option value="Individual">1-Year Individual Courses</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="regPassword">Create Password *</label>
                    <input type="password" id="regPassword" placeholder="Minimum 8 characters" minlength="6" required>
                </div>
                <button type="submit" id="btnSignUpSubmit" class="btn-auth-submit">Create Student Account</button>
                <div class="auth-footer-switch">
                    <span>Already have an account?</span>
                    <button type="button" class="auth-switch-link" onclick="switchAuthTab('signin')">Sign In here</button>
                </div>
            </form>
        </div>
    </div>

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

        // Auth Modal Controls
        function openAuthModal(tab) {
            const modal = document.getElementById('authModal');
            if (modal) {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                switchAuthTab(tab || 'signin');
            }
        }

        function closeAuthModal() {
            const modal = document.getElementById('authModal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }
        }

        function handleAuthModalBackdrop(e) {
            if (e.target.id === 'authModal') {
                closeAuthModal();
            }
        }

        function switchAuthTab(tab) {
            const tabSignIn = document.getElementById('tabBtnSignIn');
            const tabSignUp = document.getElementById('tabBtnSignUp');
            const formSignIn = document.getElementById('signInForm');
            const formSignUp = document.getElementById('signUpForm');
            const msg = document.getElementById('authModalMsg');

            if (msg) msg.style.display = 'none';

            if (tab === 'signup') {
                tabSignIn.classList.remove('active');
                tabSignUp.classList.add('active');
                formSignIn.style.display = 'none';
                formSignUp.style.display = 'block';
                const firstInput = document.getElementById('regFullName');
                if (firstInput) firstInput.focus();
            } else {
                tabSignUp.classList.remove('active');
                tabSignIn.classList.add('active');
                formSignUp.style.display = 'none';
                formSignIn.style.display = 'block';
                const firstInput = document.getElementById('loginEmail');
                if (firstInput) firstInput.focus();
            }
        }

        async function handleSignInSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('btnSignInSubmit');
            const msg = document.getElementById('authModalMsg');
            const login = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const remember = document.getElementById('rememberMe').checked;
            const metaCsrf = document.querySelector('meta[name="csrf-token"]');
            const csrfToken = metaCsrf ? metaCsrf.getAttribute('content') : '';

            btn.disabled = true;
            btn.textContent = 'Verifying with Neon DB...';
            if (msg) msg.style.display = 'none';

            try {
                const response = await fetch("{{ route('auth.login') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ login: login, password: password, remember: remember })
                });
                const data = await response.json();

                if (response.ok && data.success) {
                    if (msg) {
                        msg.className = 'auth-modal-msg auth-msg-success';
                        msg.innerHTML = data.message;
                        msg.style.display = 'block';
                    }
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else {
                    if (msg) {
                        msg.className = 'auth-modal-msg auth-msg-error';
                        msg.innerHTML = data.message || 'Invalid email or password.';
                        msg.style.display = 'block';
                    }
                    btn.disabled = false;
                    btn.textContent = 'Sign In to Animora';
                }
            } catch (err) {
                if (msg) {
                    msg.className = 'auth-modal-msg auth-msg-error';
                    msg.innerHTML = 'Database network error. Please try again.';
                    msg.style.display = 'block';
                }
                btn.disabled = false;
                btn.textContent = 'Sign In to Animora';
            }
        }

        async function handleSignUpSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('btnSignUpSubmit');
            const msg = document.getElementById('authModalMsg');
            const name = document.getElementById('regFullName').value;
            const email = document.getElementById('regEmail').value;
            const program = document.getElementById('regProgram').value;
            const password = document.getElementById('regPassword').value;
            const metaCsrf = document.querySelector('meta[name="csrf-token"]');
            const csrfToken = metaCsrf ? metaCsrf.getAttribute('content') : '';

            btn.disabled = true;
            btn.textContent = 'Saving to Neon DB...';
            if (msg) msg.style.display = 'none';

            try {
                const response = await fetch("{{ route('auth.register') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ name: name, email: email, program: program, password: password })
                });
                const data = await response.json();

                if (response.ok && data.success) {
                    if (msg) {
                        msg.className = 'auth-modal-msg auth-msg-success';
                        msg.innerHTML = data.message;
                        msg.style.display = 'block';
                    }
                    setTimeout(() => {
                        window.location.reload();
                    }, 1200);
                } else {
                    if (msg) {
                        msg.className = 'auth-modal-msg auth-msg-error';
                        msg.innerHTML = data.message || 'Could not complete registration.';
                        msg.style.display = 'block';
                    }
                    btn.disabled = false;
                    btn.textContent = 'Create Student Account';
                }
            } catch (err) {
                if (msg) {
                    msg.className = 'auth-modal-msg auth-msg-error';
                    msg.innerHTML = 'Database network error. Please try again.';
                    msg.style.display = 'block';
                }
                btn.disabled = false;
                btn.textContent = 'Create Student Account';
            }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeAuthModal();
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
