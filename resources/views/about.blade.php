@extends('layouts.app')

@section('title', 'About Animora | Final Year College Capstone Project')

@section('content')
<div class="about-page-container">

    <!-- Hero: College Capstone Project Intro -->
    <section class="about-hero-section">
        <div class="about-hero-card">
            
            <!-- Clickable College Official Logo -->
            <div class="about-logo-wrapper">
                <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="about-college-logo-link" title="Visit Official Sangamner College Website">
                    <img src="{{ asset('images/college-logo.png') }}" alt="S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College Official Emblem" class="about-college-logo-img">
                </a>
            </div>

            <!-- College Project Header Content -->
            <div class="about-hero-details">
                <div class="about-comic-badge">ACADEMIC CAPSTONE PROJECT</div>
                <h1 class="about-hero-title">
                    <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer">
                        S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College (Autonomous)
                    </a>
                </h1>
                <p class="about-college-location">Sangamner, District Ahmednagar, Maharashtra, India</p>
                
                <p class="about-hero-desc">
                    <strong>Animora</strong> is our official final-year college project — a specialized student animation asset marketplace and CGI learning platform. Built from scratch with Laravel and PostgreSQL, it is crafted to bridge the gap between classroom theory and real-world studio production pipelines.
                </p>

                <div class="about-hero-actions">
                    <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="btn-about-college-website">
                        <span>Visit College Website</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a href="{{ route('home') }}#courses" class="btn-about-explore-courses">
                        Explore Courses &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: The 6 Student Creators -->
    <section class="about-students-section">
        <div class="about-section-header">
            <span class="about-sub-tag">THE STUDENT CREATIVE TEAM</span>
            <h2 class="about-section-heading">DEVELOPED BY 6 STUDENTS</h2>
            <p class="about-section-lead">
                Proudly built as our academic capstone project by a passionate team of 6 final-year students, combining full-stack web engineering, 3D asset workflows, and comic art direction.
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
                <div class="student-role">Project Lead &amp; Full Stack Architecture</div>
                <p class="student-desc">
                    Led overall project architecture, authentication systems, PostgreSQL database migrations, dynamic course integration, and responsive comic interface design.
                </p>
                <div class="student-skills-pills">
                    <span>Laravel</span>
                    <span>PostgreSQL</span>
                    <span>System Design</span>
                </div>
            </div>

            <!-- Student 2: Vaishnavi Galande -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">VG</span>
                </div>
                <h3 class="student-name">Vaishnavi Galande</h3>
                <div class="student-role">Frontend UI &amp; Component Design</div>
                <p class="student-desc">
                    Designed responsive UI layouts, cartoon interactive buttons, custom dropdown controls, and assisted in asset categorization and mobile user flows.
                </p>
                <div class="student-skills-pills">
                    <span>Blade UI</span>
                    <span>CSS Grid</span>
                    <span>Responsive UX</span>
                </div>
            </div>

            <!-- Student 3: Payal Satpute -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">PS</span>
                </div>
                <h3 class="student-name">Payal Satpute</h3>
                <div class="student-role">Creative Art &amp; Theme Direction</div>
                <p class="student-desc">
                    Spearheaded comic mascot integration, Fredoka typography palette, color harmony, and visual presentation for animation courses and rigs.
                </p>
                <div class="student-skills-pills">
                    <span>Graphic Design</span>
                    <span>Comic Palette</span>
                    <span>Art Direction</span>
                </div>
            </div>

            <!-- Student 4: Swamini Bhaskar -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SB</span>
                </div>
                <h3 class="student-name">Swamini Bhaskar</h3>
                <div class="student-role">Database &amp; Data Pipeline</div>
                <p class="student-desc">
                    Managed Neon Tech cloud database schemas, course models, seeders, and high-speed query optimization through caching strategies.
                </p>
                <div class="student-skills-pills">
                    <span>Neon PostgreSQL</span>
                    <span>Eloquent ORM</span>
                    <span>Caching</span>
                </div>
            </div>

            <!-- Student 5: Shreya Abhang -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SA</span>
                </div>
                <h3 class="student-name">Shreya Abhang</h3>
                <div class="student-role">Quality Assurance &amp; Testing</div>
                <p class="student-desc">
                    Conducted cross-browser rendering tests, mobile viewport validation, form handling tests, and accessibility checks across user flows.
                </p>
                <div class="student-skills-pills">
                    <span>QA Testing</span>
                    <span>Form Validation</span>
                    <span>Bug Triage</span>
                </div>
            </div>

            <!-- Student 6: Shruti Kadlag -->
            <div class="student-comic-card">
                <div class="student-avatar-box">
                    <span class="student-avatar-initial">SK</span>
                </div>
                <h3 class="student-name">Shruti Kadlag</h3>
                <div class="student-role">Content Architecture &amp; User Research</div>
                <p class="student-desc">
                    Curated program curriculum details, contact information, project documentation, and conducted animation student workflow research.
                </p>
                <div class="student-skills-pills">
                    <span>Content Strategy</span>
                    <span>Documentation</span>
                    <span>User Research</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 2: Guided by Teachers & Mentors -->
    <section class="about-mentors-section">
        <div class="about-section-header">
            <span class="about-sub-tag">FACULTY ADVISORY &amp; MENTORSHIP</span>
            <h2 class="about-section-heading">GUIDED BY OUR TEACHERS</h2>
            <p class="about-section-lead">
                Developed under the guidance of faculty members of S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College, Sangamner.
            </p>
        </div>

        <!-- Principal Spotlight -->
        <div class="about-principal-card">
            <div class="about-principal-left">
                <img src="{{ asset('images/principal-dr-gaikwad.jpg') }}" alt="Prof. (Dr.) Gaikwad Arun Hari" class="about-principal-img">
                <span class="about-badge-tag">HEAD &amp; PRINCIPAL</span>
            </div>
            <div class="about-principal-right">
                <h3 class="about-principal-name">Prof. (Dr.) Gaikwad Arun Hari</h3>
                <div class="about-principal-title">Principal &amp; Academic Patron — Sangamner College</div>
                <p class="about-principal-quote">
                    “Fostering technical innovation, digital literacy, and creative industry readiness. Animora demonstrates our students' ability to synthesize advanced software engineering with computer graphics and digital media arts into an impactful, usable educational platform.”
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
                <div class="about-teacher-domain">3D Animation, Rigging &amp; Pipeline Workflows</div>
                <p class="about-teacher-desc">
                    Provided key mentorship on animation production pipelines, character rigging standards, asset categorization, and industry workflows.
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
                <div class="about-teacher-domain">Digital Media, Visual Arts &amp; Creative Foundations</div>
                <p class="about-teacher-desc">
                    Guided the visual storytelling, color theory, aesthetic alignment, and user interaction design for the creative arts student community.
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
                <div class="about-teacher-domain">Computer Graphics, VFX &amp; Creative Technologies</div>
                <p class="about-teacher-desc">
                    Mentored the computer graphics integration, VFX simulation toolsets, performance optimization, and project technical documentation.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: College Profile Spotlight Card -->
    <section class="about-institution-section">
        <div class="about-institution-card">
            <div class="institution-logo-col">
                <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" title="Visit Sangamner College">
                    <img src="{{ asset('images/college-logo.png') }}" alt="Sangamner College Crest" class="institution-logo-img">
                </a>
            </div>
            <div class="institution-text-col">
                <span class="institution-badge">OUR ALMA MATER</span>
                <h3 class="institution-title">
                    <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer">
                        Sahakar Maharshi Bhausaheb Santuji Thorat Shikshan Prasarak Sanstha's<br>
                        S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College (Autonomous)
                    </a>
                </h3>
                <p class="institution-desc">
                    Re-accredited with 'A++' Grade by NAAC | Affiliated to Savitribai Phule Pune University (SPPU). Located in Sangamner, Maharashtra, our institution is dedicated to nurturing academic excellence, scientific temper, and creative technical leadership.
                </p>
                <div class="institution-footer-links">
                    <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="btn-institution-site">
                        Visit Official College Website (sangamnercollege.edu.in) ↗
                    </a>
                    <a href="{{ route('home') }}#contact" class="btn-institution-contact">
                        Contact Project Team &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
