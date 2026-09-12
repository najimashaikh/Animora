@extends('layouts.app')

@section('title', 'About Animora | Final Year College Project')

@section('content')
<div class="about-page-container">

    <!-- Hero: College Project Intro -->
    <section class="about-hero-section">
        <div class="about-hero-card">
            
            <!-- Clickable College Logo (redirects to college website) -->
            <div class="about-logo-wrapper">
                <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="about-college-logo-link" title="S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College">
                    <img src="{{ asset('images/college-logo.png') }}" alt="Sangamner College Logo" class="about-college-logo-img">
                </a>
            </div>

            <!-- College Project Header Content -->
            <div class="about-hero-details">
                <div class="about-comic-badge">FINAL YEAR COLLEGE PROJECT</div>
                <h1 class="about-hero-title">
                    <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer">
                        S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College (Autonomous)
                    </a>
                </h1>
                <p class="about-college-location">Sangamner, Ahmednagar, Maharashtra</p>
                
                <p class="about-hero-desc">
                    <strong>Animora</strong> is our final year academic project. It is an online portal for animation students to explore 3D animation courses, download character rigs, and access creative production tools. Built from scratch by 6 students using Laravel and PostgreSQL.
                </p>

                <div class="about-hero-actions">
                    <a href="{{ route('home') }}#courses" class="btn-about-explore-courses">
                        Explore Our Courses &rarr;
                    </a>
                    <a href="{{ route('home') }}#contact" class="btn-about-contact-team">
                        Contact Us &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: The 6 Student Creators -->
    <section class="about-students-section">
        <div class="about-section-header">
            <span class="about-sub-tag">THE STUDENT TEAM</span>
            <h2 class="about-section-heading">CREATED BY 6 STUDENTS</h2>
            <p class="about-section-lead">
                We designed and developed this website together as our final year college project.
            </p>
        </div>

        <div class="about-students-grid">
            
            <!-- Student 1: Najima Shaikh -->
            <div class="student-comic-card student-card-highlight">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">NS</span>
                    <span class="student-rank-badge">LEAD</span>
                </div>
                <h3 class="student-name">Najima Shaikh</h3>
                <div class="student-role">Project Lead &amp; Full Stack Developer</div>
                <p class="student-desc">
                    Built the overall website structure, user login &amp; signup system, PostgreSQL database connections, and integrated all pages.
                </p>
                <div class="student-skills-pills">
                    <span>Laravel</span>
                    <span>PostgreSQL</span>
                    <span>Full Stack</span>
                </div>
            </div>

            <!-- Student 2: Vaishnavi Galande -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">VG</span>
                </div>
                <h3 class="student-name">Vaishnavi Galande</h3>
                <div class="student-role">Frontend &amp; UI Design</div>
                <p class="student-desc">
                    Designed the website layout, custom dropdowns, forms, buttons, and made sure the site works smoothly on mobile phones.
                </p>
                <div class="student-skills-pills">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>Responsive UI</span>
                </div>
            </div>

            <!-- Student 3: Payal Satpute -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">PS</span>
                </div>
                <h3 class="student-name">Payal Satpute</h3>
                <div class="student-role">Creative Art &amp; Theme</div>
                <p class="student-desc">
                    Worked on the cartoon mascot robot, dark theme colors, typography, and the overall look of our course cards.
                </p>
                <div class="student-skills-pills">
                    <span>UI Design</span>
                    <span>Color Theme</span>
                    <span>Artwork</span>
                </div>
            </div>

            <!-- Student 4: Swamini Bhaskar -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SB</span>
                </div>
                <h3 class="student-name">Swamini Bhaskar</h3>
                <div class="student-role">Database &amp; Backend</div>
                <p class="student-desc">
                    Set up the cloud PostgreSQL database on Neon, created data tables for courses, and added caching so pages load quickly.
                </p>
                <div class="student-skills-pills">
                    <span>PostgreSQL</span>
                    <span>Neon Cloud</span>
                    <span>Data Cache</span>
                </div>
            </div>

            <!-- Student 5: Shreya Abhang -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SA</span>
                </div>
                <h3 class="student-name">Shreya Abhang</h3>
                <div class="student-role">Testing &amp; Quality Check</div>
                <p class="student-desc">
                    Tested the website across Chrome, Edge, and mobile viewports, checked form submissions, and reported UI fixes.
                </p>
                <div class="student-skills-pills">
                    <span>Testing</span>
                    <span>Form Check</span>
                    <span>Mobile Tests</span>
                </div>
            </div>

            <!-- Student 6: Shruti Kadlag -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SK</span>
                </div>
                <h3 class="student-name">Shruti Kadlag</h3>
                <div class="student-role">Content &amp; Documentation</div>
                <p class="student-desc">
                    Wrote the curriculum descriptions, campus details, project notes, and helped organize the final presentation material.
                </p>
                <div class="student-skills-pills">
                    <span>Content</span>
                    <span>Documentation</span>
                    <span>User Research</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 2: Guided by Teachers & Mentors -->
    <section class="about-mentors-section">
        <div class="about-section-header">
            <span class="about-sub-tag">FACULTY GUIDANCE</span>
            <h2 class="about-section-heading">GUIDED BY OUR TEACHERS</h2>
            <p class="about-section-lead">
                We developed this project under the guidance and support of our college faculty members.
            </p>
        </div>

        <!-- Principal Spotlight -->
        <div class="about-principal-card">
            <div class="about-principal-left">
                <img src="{{ asset('images/principal-dr-gaikwad.jpg') }}" alt="Prof. (Dr.) Gaikwad Arun Hari" class="about-principal-img">
                <span class="about-badge-tag">PRINCIPAL</span>
            </div>
            <div class="about-principal-right">
                <h3 class="about-principal-name">Prof. (Dr.) Gaikwad Arun Hari</h3>
                <div class="about-principal-title">Principal — Sangamner College</div>
                <p class="about-principal-quote">
                    “Encouraging our students to build practical, real-world projects that combine technology, computer graphics, and creative digital arts.”
                </p>
            </div>
        </div>

        <!-- Mentors 3 Column Grid -->
        <div class="about-teachers-grid">
            
            <!-- Mentor 1: Mr. Kawade Sitaram Namdev -->
            <div class="about-teacher-card">
                <div class="about-teacher-img-wrap">
                    <img src="{{ asset('images/mentor-kawade-sitaram.jpg') }}" alt="Mr. Kawade Sitaram Namdev" class="about-teacher-avatar">
                    <span class="about-teacher-tag">PROJECT GUIDE</span>
                </div>
                <h4 class="about-teacher-name">Mr. Kawade Sitaram Namdev</h4>
                <div class="about-teacher-designation">Assistant Professor</div>
                <div class="about-teacher-domain">3D Animation, Rigging &amp; Pipelines</div>
                <p class="about-teacher-desc">
                    Guided us on 3D animation pipelines, character rigging standards, and how professional animation studios organize their assets.
                </p>
            </div>

            <!-- Mentor 2: Ms. Gite Dipa Prabhakar -->
            <div class="about-teacher-card">
                <div class="about-teacher-img-wrap">
                    <img src="{{ asset('images/mentor-gite-dipa.jpg') }}" alt="Ms. Gite Dipa Prabhakar" class="about-teacher-avatar">
                    <span class="about-teacher-tag">PROJECT GUIDE</span>
                </div>
                <h4 class="about-teacher-name">Ms. Gite Dipa Prabhakar</h4>
                <div class="about-teacher-designation">Assistant Professor</div>
                <div class="about-teacher-domain">Digital Media &amp; Visual Arts</div>
                <p class="about-teacher-desc">
                    Guided us on visual storytelling, color balance, clean presentation, and making the website easy to use for students.
                </p>
            </div>

            <!-- Mentor 3: Ms. Pawase Harshal Shivaji -->
            <div class="about-teacher-card">
                <div class="about-teacher-img-wrap">
                    <img src="{{ asset('images/mentor-pawase-harshal.jpg') }}" alt="Ms. Pawase Harshal Shivaji" class="about-teacher-avatar">
                    <span class="about-teacher-tag">PROJECT GUIDE</span>
                </div>
                <h4 class="about-teacher-name">Ms. Pawase Harshal Shivaji</h4>
                <div class="about-teacher-designation">Assistant Professor</div>
                <div class="about-teacher-domain">Computer Graphics &amp; VFX</div>
                <p class="about-teacher-desc">
                    Guided us on computer graphics concepts, VFX tools, code structure, and overall project review.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: Technology Stack & Database (Simple, Clear English) -->
    <section class="about-tech-stack-section">
        <div class="about-section-header">
            <span class="about-sub-tag">TECHNOLOGY &amp; DATABASE</span>
            <h2 class="about-section-heading">WHAT WE USED TO BUILD THIS</h2>
            <p class="about-section-lead">
                Here is a simple look at the programming tools, database, and technologies used in Animora.
            </p>
        </div>

        <div class="about-tech-grid">
            
            <!-- Tech 1: Backend & Framework -->
            <div class="tech-comic-card">
                <div class="tech-card-top">
                    <div class="tech-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <span class="tech-category-pill">BACKEND</span>
                </div>
                <h3 class="tech-card-title">PHP 8.2 &amp; Laravel 10</h3>
                <p class="tech-card-desc">
                    The main engine of our website. Laravel handles our page routes, user accounts, secure logins, and displays dynamic web pages using Blade templates.
                </p>
                <div class="tech-card-tags">
                    <span>PHP 8.2</span>
                    <span>Laravel 10</span>
                    <span>Blade Templates</span>
                    <span>User Auth</span>
                </div>
            </div>

            <!-- Tech 2: Database & Cloud -->
            <div class="tech-comic-card">
                <div class="tech-card-top">
                    <div class="tech-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <span class="tech-category-pill">DATABASE</span>
                </div>
                <h3 class="tech-card-title">PostgreSQL on Neon Cloud</h3>
                <p class="tech-card-desc">
                    Our cloud database hosted on Neon Tech. It safely stores all course details, animation assets, and user profiles with secure SSL connections.
                </p>
                <div class="tech-card-tags">
                    <span>PostgreSQL</span>
                    <span>Neon Cloud</span>
                    <span>Database Migrations</span>
                    <span>SSL Secure</span>
                </div>
            </div>

            <!-- Tech 3: Frontend & Design System -->
            <div class="tech-comic-card">
                <div class="tech-card-top">
                    <div class="tech-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m4.93 4.93 4.24 4.24"></path>
                            <path d="m14.83 9.17 4.24-4.24"></path>
                            <path d="m14.83 14.83 4.24 4.24"></path>
                            <path d="m9.17 14.83-4.24 4.24"></path>
                            <circle cx="12" cy="12" r="4"></circle>
                        </svg>
                    </div>
                    <span class="tech-category-pill">FRONTEND</span>
                </div>
                <h3 class="tech-card-title">HTML5, Vanilla CSS &amp; JavaScript</h3>
                <p class="tech-card-desc">
                    Built using pure CSS and JavaScript without heavy frameworks. This keeps our site lightweight, fast, and gives us full control over our blackish comic theme.
                </p>
                <div class="tech-card-tags">
                    <span>HTML5</span>
                    <span>Vanilla CSS</span>
                    <span>JavaScript</span>
                    <span>Fredoka Font</span>
                </div>
            </div>

            <!-- Tech 4: Speed & Forms -->
            <div class="tech-comic-card">
                <div class="tech-card-top">
                    <div class="tech-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <span class="tech-category-pill">SPEED &amp; FORMS</span>
                </div>
                <h3 class="tech-card-title">Smart Caching &amp; Web3Forms</h3>
                <p class="tech-card-desc">
                    We added smart caching so database queries load instantly in under 0.3 seconds. For student messages, Web3Forms sends inquiries without reloading the page.
                </p>
                <div class="tech-card-tags">
                    <span>Smart Caching</span>
                    <span>Web3Forms API</span>
                    <span>Fast Loading</span>
                    <span>Secure Password Hash</span>
                </div>
            </div>

        </div>

        <!-- Quick Summary Bar -->
        <div class="tech-specs-ribbon">
            <div class="tech-spec-item">
                <span class="spec-label">FRAMEWORK</span>
                <span class="spec-value">Laravel 10 (PHP 8.2)</span>
            </div>
            <div class="tech-spec-item">
                <span class="spec-label">DATABASE</span>
                <span class="spec-value">PostgreSQL (Neon Cloud)</span>
            </div>
            <div class="tech-spec-item">
                <span class="spec-label">THEME</span>
                <span class="spec-value">Animora Blackish Comic</span>
            </div>
            <div class="tech-spec-item">
                <span class="spec-label">PAGE SPEED</span>
                <span class="spec-value">Fast (~0.25s Load Time)</span>
            </div>
        </div>
    </section>

</div>
@endsection
