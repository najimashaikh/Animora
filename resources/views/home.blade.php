@extends('layouts.app')

@section('title', 'Animora | Explore Courses')

@section('content')

<!-- Full Width Static Hero Section (Animora Comic Art Banner - No Text) -->
<section class="hero-static-section hero-fullwidth">
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/animora-hero-full.png') }}" alt="Animora Animation Assets" class="hero-static-img">
    </div>
</section>

<!-- Exact Doraemon Blue Box Matching Sketch -->
<section class="doraemon-sketch-section">
    <div class="doraemon-sketch-box">
        <!-- Left: Doraemon GIF (The Circle in sketch) -->
        <div class="doraemon-sketch-left">
            <img src="{{ asset('ChatGPT%20Image%20Sep%2011,%202026,%2009_08_52%20PM.png') }}" alt="Doraemon" class="doraemon-sketch-img">
        </div>

        <!-- Right: Explore Courses text in sketch -->
        <div class="doraemon-sketch-right">
            <a href="#courses" class="doraemon-sketch-text">EXPLORE COURSES</a>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="course-section" id="courses">

    <h2 class="animora-branding">OUR COURSES</h2>
    <div class="course-card-grid">
        @foreach($courses as $course)
        <div class="course-card">
            <div class="course-card-img">
                <img src="{{ isset($course->image) ? $course->image : (str_starts_with($course->image_url, 'http') ? $course->image_url : asset($course->image_url)) }}" alt="{{ $course->name }}">
            </div>
            <div class="course-card-title">{{ $course->name }}</div>
            <div class="course-card-desc">{{ $course->short_description }}</div>
        </div>
        @endforeach
    </div>
</section>

<!-- Mentors & Staff Section -->
<section class="mentors-section" id="about">
    <div class="mentors-container">
        <h2 class="animora-branding mentors-heading">OUR MENTORS &amp; STAFF</h2>
        
        <!-- Top: Founder & CEO Featured -->
        <div class="principal-spotlight">
            <div class="mentor-avatar-wrap">
                <img src="{{ asset('images/vishal-kadlag.jpg') }}" alt="Mr. Vishal Kadlag" class="mentor-avatar-img principal-avatar">
                <span class="mentor-comic-tag">FOUNDER &amp; CEO</span>
            </div>
            <div class="mentor-speech-content">
                <div class="mentor-speech-header">
                    <h3 class="mentor-comic-name">Mr. Vishal Kadlag</h3>
                    <span class="mentor-comic-role">Founder &amp; CEO</span>
                </div>
                <div class="comic-speech-bubble speech-left">
                    <p>“Fostering creativity, innovation, and industry-grade excellence in animation and digital media arts. At Animora, our mission is to empower the next generation of visual storytellers, 3D artists, and pipeline directors!” One of Vishal’s primary missions is to cultivate and nurture Indian artists, particularly those hailing from rural areas. His dream is to produce animated movies and animation content right within India, showcasing the incredible talent that often goes untapped. To kickstart this vision, he established his first school in Sangamner, setting the stage for aspiring artists to realize their dreams.</p>
                </div>
            </div>
        </div>

        <!-- Line of 3 Teachers Below Principal -->
        <div class="teachers-line-grid">
            <!-- Mentor 1: Agnelo Fernandes -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/agnelo-fernandes.jpg') }}" alt="Agnelo Fernandes" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">CO-FOUNDER / PRODUCTION HEAD</span>
                </div>
                <h4 class="teacher-name">Agnelo Fernandes</h4>
                <div class="teacher-role">Co-Founder / Production Head</div>
                <p class="teacher-desc">3D Animator with more than 7+ years of experience in the entertainment industry</p>
            </div>

            <!-- Mentor 2: Mr. Prajwal Patil -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/prajwal-patil.jpg') }}" alt="Mr. Prajwal Patil" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">CO-FOUNDER &amp; IT SUPPORT</span>
                </div>
                <h4 class="teacher-name">Mr. Prajwal Patil</h4>
                <div class="teacher-role">Co-Founder &amp; IT Support Manager</div>
                <p class="teacher-desc">IT Infrastructure, Systems &amp; Technical Support</p>
            </div>

            <!-- Mentor 3: Mr. Rahul Bhalerao -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/rahul-bhalerao.jpg') }}" alt="Mr. Rahul Bhalerao" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">CORE MEMBER / SR. MODELER</span>
                </div>
                <h4 class="teacher-name">Mr. Rahul Bhalerao</h4>
                <div class="teacher-role">Core Member, Senior Modeler &amp; Character Designer</div>
                <p class="teacher-desc">Rahul Bhalerao is a Modeler and character Designer with more than 7+ years of experience</p>
            </div>
        </div>

    </div>
</section>

<!-- Student Work Showcase Section (Below Mentors & Staff) -->
<section class="home-student-work-section" id="student-work">
    <div class="home-sw-container">
        <div class="home-sw-header">
            <span class="home-sw-pill">STUDENT PORTFOLIO &amp; SHOWCASE</span>
            <h2 class="animora-branding home-sw-heading">STUDENT WORK</h2>
            <p class="home-sw-lead">
                Explore extraordinary projects, 3D animated reels, concept art, and graphic design portfolios crafted by our students during their industry-standard training.
            </p>
        </div>

        <!-- Featured Grid: Top Artworks & Reels -->
        <div class="home-sw-grid">
            <!-- Item 1: Modern Living Room Reel -->
            <div class="home-sw-card home-sw-card-featured">
                <div class="home-sw-media">
                    <img src="{{ asset('images/student-work/modern-living-room.jpg') }}" alt="Modern Living Room 3D Interior" class="home-sw-img" onerror="this.src='https://img.youtube.com/vi/P-ebibSvFz4/maxresdefault.jpg'">
                    <a href="https://youtu.be/P-ebibSvFz4" target="_blank" rel="noopener noreferrer" class="home-sw-play-overlay">
                        <div class="home-sw-play-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </div>
                        <span>Watch 3D Showcase Reel</span>
                    </a>
                    <span class="home-sw-badge">3D ANIMATION REEL</span>
                </div>
                <div class="home-sw-content">
                    <span class="home-sw-category">3D Animation &amp; Lighting</span>
                    <h3 class="home-sw-title">Modern Living Room Interior &amp; Architecture Walkthrough</h3>
                    <p class="home-sw-author">By CG Bugs Student Production Team</p>
                </div>
            </div>

            <!-- Item 2: Shubham Deshmukh Graphic Design -->
            <div class="home-sw-card">
                <div class="home-sw-media">
                    <img src="{{ asset('images/student-work/shubham-deshmukh-01.webp') }}" alt="Graphic Design Poster - Mr. Shubham Deshmukh" class="home-sw-img" onerror="this.src='https://cgbugs.school/wp-content/uploads/2024/05/Mr.-Shubham-Deshmukh-01.webp'">
                    <span class="home-sw-badge">GRAPHIC DESIGN</span>
                </div>
                <div class="home-sw-content">
                    <span class="home-sw-category">Graphic Design &amp; Typography</span>
                    <h3 class="home-sw-title">Brand Identity &amp; Visual Media</h3>
                    <p class="home-sw-author">By Mr. Shubham Deshmukh</p>
                </div>
            </div>

            <!-- Item 3: Nikita Satpute Character Design -->
            <div class="home-sw-card">
                <div class="home-sw-media">
                    <img src="{{ asset('images/student-work/nikita-satpute-01.webp') }}" alt="Character Design - Ms. Nikita Satpute" class="home-sw-img" onerror="this.src='https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Nikita-Satpute-01-1.webp'">
                    <span class="home-sw-badge">CHARACTER DESIGN</span>
                </div>
                <div class="home-sw-content">
                    <span class="home-sw-category">Character Concept &amp; Model Sheet</span>
                    <h3 class="home-sw-title">Stylized Character Turnaround</h3>
                    <p class="home-sw-author">By Ms. Nikita Satpute</p>
                </div>
            </div>

            <!-- Item 4: Shweta Kute Digital Art -->
            <div class="home-sw-card">
                <div class="home-sw-media">
                    <img src="{{ asset('images/student-work/shweta-kute-03.webp') }}" alt="Creature Art - Ms. Shweta Kute" class="home-sw-img" onerror="this.src='https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Shweta-kute-03-2.webp'">
                    <span class="home-sw-badge">CHARACTER DESIGN</span>
                </div>
                <div class="home-sw-content">
                    <span class="home-sw-category">Creature Concept &amp; Mascot</span>
                    <h3 class="home-sw-title">Fantasy Creature &amp; Digital Painting</h3>
                    <p class="home-sw-author">By Ms. Shweta Kute</p>
                </div>
            </div>
        </div>

        <!-- Call to action button to dedicated page -->
        <div class="home-sw-actions">
            <a href="{{ route('student.work') }}" class="home-sw-btn-primary">
                <span>View Full Student Work Gallery &amp; Reels</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Student Library Section (Downloadable Notes & Production Assets) -->
<section class="student-library-section" id="student-library">
    <div class="student-lib-container">
        <!-- Section Header -->
        <div class="student-lib-header">
            <div class="student-lib-badge">STUDENT RESOURCE VAULT</div>
            <h2 class="student-lib-title">STUDENT LIBRARY</h2>
            <p class="student-lib-subtitle">
                Access curated lecture notes, production-ready rigs, 2D model sheets, VFX caches, and game art assets crafted for CG Bugs animators and students.
            </p>

            <!-- Interactive Category Filter Tabs -->
            <div class="student-lib-tabs">
                <button class="lib-tab-btn active" onclick="filterStudentLib('all', this)">All Resources</button>
                <button class="lib-tab-btn" onclick="filterStudentLib('notes', this)">📚 Study Notes</button>
                <button class="lib-tab-btn" onclick="filterStudentLib('2d', this)">🎨 2D Animation</button>
                <button class="lib-tab-btn" onclick="filterStudentLib('3d', this)">🧊 3D Models &amp; Rigs</button>
                <button class="lib-tab-btn" onclick="filterStudentLib('vfx', this)">💥 VFX Dynamics</button>
                <button class="lib-tab-btn" onclick="filterStudentLib('gameart', this)">🎮 Game Art &amp; Design</button>
            </div>
        </div>

        <!-- Resources Grid -->
        <div class="student-lib-grid" id="studentLibGrid">
            <!-- 1. Notes: Maya & 3D Rigging -->
            <div class="lib-card" data-category="notes">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">STUDY NOTES</span>
                    <span class="lib-card-ext">.PDF</span>
                </div>
                <div class="lib-card-icon">📚</div>
                <h3 class="lib-card-title">3D Rigging &amp; Pipeline Cheatsheet</h3>
                <p class="lib-card-desc">Comprehensive field notes on Maya biped joint hierarchy, IK/FK blending, skin weights painting, and naming conventions.</p>
                <div class="lib-card-meta">
                    <span>Size: 4.8 MB</span>
                    <span>Format: PDF E-Book</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('3D_Rigging_Pipeline_Notes.pdf')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download Notes</span>
                </a>
            </div>

            <!-- 2. Notes: 12 Principles -->
            <div class="lib-card" data-category="notes">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">STUDY NOTES</span>
                    <span class="lib-card-ext">.PDF</span>
                </div>
                <div class="lib-card-icon">📖</div>
                <h3 class="lib-card-title">12 Principles of Animation Handbook</h3>
                <p class="lib-card-desc">Detailed timing charts, anticipation curves, squash &amp; stretch examples, and ease-in/ease-out acceleration formulas.</p>
                <div class="lib-card-meta">
                    <span>Size: 8.2 MB</span>
                    <span>Format: PDF Guide</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('12_Principles_Animation_Handbook.pdf')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download Notes</span>
                </a>
            </div>

            <!-- 3. 2D: Turnaround Character Sheets -->
            <div class="lib-card" data-category="2d">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">2D ANIMATION</span>
                    <span class="lib-card-ext">.PSD / .PNG</span>
                </div>
                <div class="lib-card-icon">🎨</div>
                <h3 class="lib-card-title">8-Point Character Turnaround Kit</h3>
                <p class="lib-card-desc">Standard studio turnaround template sheets with proportions, eye line guides, and layered expression sheets.</p>
                <div class="lib-card-meta">
                    <span>Size: 22.5 MB</span>
                    <span>Layers: 16 PSD Layers</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('2D_Character_Turnaround_Pack.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download 2D Kit</span>
                </a>
            </div>

            <!-- 4. 2D: Walk & Run Cycle Keys -->
            <div class="lib-card" data-category="2d">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">2D ANIMATION</span>
                    <span class="lib-card-ext">.ZIP</span>
                </div>
                <div class="lib-card-icon">🏃</div>
                <h3 class="lib-card-title">Walk &amp; Run Cycle Keyframe Library</h3>
                <p class="lib-card-desc">Contact, down, passing, and up pose vector breakdowns ready for frame-by-frame practice in Toon Boom and Flash.</p>
                <div class="lib-card-meta">
                    <span>Size: 14.1 MB</span>
                    <span>Format: PNG Sequences</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('Walk_Run_Keyframes_Pack.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download 2D Kit</span>
                </a>
            </div>

            <!-- 5. 3D: Hero Biped Rig -->
            <div class="lib-card" data-category="3d">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">3D MODELS &amp; RIGS</span>
                    <span class="lib-card-ext">.MA / .FBX</span>
                </div>
                <div class="lib-card-icon">🤖</div>
                <h3 class="lib-card-title">Animora Biped Warrior Character Rig</h3>
                <p class="lib-card-desc">Production-grade biped rig with facial blendshapes, stretchy spline spine, space switching, and clean quad topology.</p>
                <div class="lib-card-meta">
                    <span>Size: 38.6 MB</span>
                    <span>Polygons: 28,450 Quads</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('Animora_Warrior_Rig_v2.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download 3D Rig</span>
                </a>
            </div>

            <!-- 6. 3D: Sci-Fi Modular Kit -->
            <div class="lib-card" data-category="3d">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">3D MODELS &amp; RIGS</span>
                    <span class="lib-card-ext">.BLEND / .FBX</span>
                </div>
                <div class="lib-card-icon">🚀</div>
                <h3 class="lib-card-title">Modular Sci-Fi Corridor &amp; Props Kit</h3>
                <p class="lib-card-desc">Snap-to-grid architectural pieces including walls, airlocks, conduits, consoles, and baked 4K PBR normal maps.</p>
                <div class="lib-card-meta">
                    <span>Size: 64.2 MB</span>
                    <span>Assets: 42 Modular Meshes</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('SciFi_Corridor_Modular_Kit.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download 3D Kit</span>
                </a>
            </div>

            <!-- 7. VFX: OpenVDB Fire & Explosion -->
            <div class="lib-card" data-category="vfx">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">VFX DYNAMICS</span>
                    <span class="lib-card-ext">.VDB</span>
                </div>
                <div class="lib-card-icon">💥</div>
                <h3 class="lib-card-title">Volumetric Explosion &amp; Smoke Cache</h3>
                <p class="lib-card-desc">High-density OpenVDB simulation cache simulated in Houdini, optimized for Arnold, V-Ray, and Blender Cycles rendering.</p>
                <div class="lib-card-meta">
                    <span>Size: 112 MB</span>
                    <span>Frames: 120 VDB Frames</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('Volumetric_Explosion_VDB.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download VFX Cache</span>
                </a>
            </div>

            <!-- 8. VFX: Particle Alphas Pack -->
            <div class="lib-card" data-category="vfx">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">VFX DYNAMICS</span>
                    <span class="lib-card-ext">.PNG / .EXR</span>
                </div>
                <div class="lib-card-icon">⚡</div>
                <h3 class="lib-card-title">Sparks, Dust &amp; Energy Alphas Pack</h3>
                <p class="lib-card-desc">100+ alpha mask textures for Niagra and VFX compositing in Nuke and After Effects with 32-bit linear gamma.</p>
                <div class="lib-card-meta">
                    <span>Size: 31.0 MB</span>
                    <span>Resolution: 2048 x 2048</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('VFX_Particle_Alphas_Pack.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download VFX Alphas</span>
                </a>
            </div>

            <!-- 9. Game Art: Modular Dungeon Kit -->
            <div class="lib-card" data-category="gameart">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">GAME ART &amp; DESIGN</span>
                    <span class="lib-card-ext">.FBX / .TGA</span>
                </div>
                <div class="lib-card-icon">🎮</div>
                <h3 class="lib-card-title">Low-Poly Modular Dungeon Kit</h3>
                <p class="lib-card-desc">Grid-aligned stone walls, flagstone floors, torches, pillars, and treasure chests optimized for Unity and Unreal Engine 5.</p>
                <div class="lib-card-meta">
                    <span>Size: 45.3 MB</span>
                    <span>Engine Ready: UE5 / Unity</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('LowPoly_Dungeon_Kit.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download Game Kit</span>
                </a>
            </div>

            <!-- 10. Game Art: Handpainted Texture Atlases -->
            <div class="lib-card" data-category="gameart">
                <div class="lib-card-top">
                    <span class="lib-card-cat-badge">GAME ART &amp; DESIGN</span>
                    <span class="lib-card-ext">.PNG Atlases</span>
                </div>
                <div class="lib-card-icon">🏰</div>
                <h3 class="lib-card-title">Stylized Handpainted Texture Atlases</h3>
                <p class="lib-card-desc">Tileable wood planks, cobblestone, roof tiles, and stylized foliage trim sheets with seamless tiling.</p>
                <div class="lib-card-meta">
                    <span>Size: 28.7 MB</span>
                    <span>Format: Seamless 4K PNG</span>
                </div>
                <a href="javascript:void(0);" onclick="triggerStudentDownload('Stylized_Texture_Atlases.zip')" class="lib-download-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Download Game Kit</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section with Static Blue Box & Theme Touch -->
<section class="contact-section" id="contact">
    <div class="contact-container">
        
        <!-- Pura Static Blue Box (With Animora Theme Touch) -->
        <div class="contact-static-blue-box">
            
            <!-- Top Mascot & Header Banner inside the Blue Box -->
            <div class="contact-blue-header">
                <div class="contact-robot-mascot-wrap">
                    <img src="{{ asset('images/contact-robot.png') }}" alt="Contact Us Robot Mascot" class="contact-robot-img">
                </div>
                <div class="contact-header-content">
                    <div class="contact-comic-tag">ANIMORA CAMPUS HELPDESK</div>
                    <h2 class="contact-comic-title">CONTACT US</h2>
                    <p class="contact-comic-desc">Have questions about our 2D, 3D &amp; VFX programs, student rigs, or campus admissions? Send us a message directly!</p>
                </div>
            </div>

            <!-- Form & Location Grid inside the Blue Box -->
            <div class="contact-blue-grid">
                
                <!-- Left: Contact Form inside Blue Box -->
                <div class="contact-blue-form-panel">
                    <!-- Inline Result Alert (For errors/info) -->
                    <div id="formResult" class="form-result-alert" style="display: none;"></div>

                    <!-- Inline Thank You Card (Shown on success, NO redirect, NO green) -->
                    <div id="thankYouCard" class="thank-you-card cartoon-thank-you" style="display: none;">
                        <div class="thank-you-avatar">
                            <span class="thank-you-emoji">✨</span>
                        </div>
                        <h3 class="thank-you-title">THANK YOU!</h3>
                        <p class="thank-you-text">Your inquiry has been successfully received. Our campus team at S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College will connect with you shortly.</p>
                        
                        <div class="thank-you-details">
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Status</span>
                                <span class="thank-detail-val">Received &amp; Logged</span>
                            </div>
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Destination</span>
                                <span class="thank-detail-val">najimashaikh267@gmail.com</span>
                            </div>
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Campus Phone</span>
                                <span class="thank-detail-val">(02425) 223181 / 222869</span>
                            </div>
                        </div>

                        <button type="button" class="btn-reset-form" onclick="showFormAgain()">
                            SEND ANOTHER MESSAGE
                        </button>
                    </div>

                    <!-- Form Element (Strictly prevented from redirecting) -->
                    <form id="web3ContactForm" action="javascript:void(0);" onsubmit="handleContactSubmit(event)" method="POST" class="web3-contact-form">
                        <!-- Web3Forms Access Key -->
                        <input type="hidden" name="access_key" value="82d62467-fdbb-4b4c-852d-f44e8be9bc5d">
                        <input type="hidden" name="subject" value="New Inquiry - Animora Student Portal">
                        <input type="hidden" name="from_name" value="Animora Campus Portal">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactName">YOUR FULL NAME *</label>
                                <input type="text" id="contactName" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="contactEmail">EMAIL ADDRESS *</label>
                                <input type="email" id="contactEmail" name="email" placeholder="name@example.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactPhone">PHONE NUMBER</label>
                                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210">
                            </div>
                            <div class="form-group custom-select-group">
                                <label for="contactCourse">INTERESTED PROGRAM</label>
                                <div class="custom-dropdown-wrap" id="customCourseDropdown">
                                    <input type="hidden" name="course_interest" id="contactCourse" value="{{ $courses->first()->name ?? 'Professional Program' }}">
                                    <button type="button" class="custom-dropdown-trigger" id="courseDropdownBtn" aria-haspopup="listbox" aria-expanded="false">
                                        <span class="dropdown-selected-text" id="selectedCourseText">{{ $courses->first()->name ?? 'Select a Program' }}</span>
                                        <svg class="dropdown-arrow-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                    <div class="custom-dropdown-menu" id="courseDropdownMenu" role="listbox">
                                        @foreach($courses as $course)
                                        <div class="custom-dropdown-item {{ $loop->first ? 'active' : '' }}" data-value="{{ $course->name }}" role="option">
                                            <span class="dropdown-item-title">{{ $course->name }}</span>
                                        </div>
                                        @endforeach
                                        <div class="custom-dropdown-item" data-value="General Campus Inquiry" role="option">
                                            <span class="dropdown-item-title">General Campus Inquiry</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactMessage">YOUR MESSAGE *</label>
                            <textarea id="contactMessage" name="message" rows="4" placeholder="Tell us about your learning goals or questions..." required></textarea>
                        </div>

                        <button type="submit" id="contactSubmitBtn" class="btn-contact-submit cartoon-btn-submit">
                            <span>SEND MESSAGE</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </form>
                </div>

                <!-- Right: Location & Campus Details inside Blue Box -->
                <div class="contact-blue-location-panel">
                    
                    <!-- College / Campus Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">🏛️</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">COLLEGE / CAMPUS</h5>
                            <p class="blue-info-text"><strong>S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College</strong></p>
                        </div>
                    </div>

                    <!-- Campus Location / Address Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">📍</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">CAMPUS LOCATION</h5>
                            <p class="blue-info-text">Ghulewadi, Pune Nashik Highway (NH – 50), Sangamner, District Ahmednagar 422 605, Maharashtra – India</p>
                        </div>
                    </div>

                    <!-- Call Us Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">📞</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">CALL US ON</h5>
                            <p class="blue-info-text">
                                <a href="tel:02425223181">(02425) 223181</a><br>
                                <a href="tel:02425222869">(02425) 222869</a>
                            </p>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">✉️</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">DIRECT EMAIL</h5>
                            <p class="blue-info-text"><a href="mailto:najimashaikh267@gmail.com">najimashaikh267@gmail.com</a></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Homepage College Project Attribution Banner -->
<section class="college-project-home-banner">
    <div class="college-home-box">
        <div class="college-home-left">
            <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="college-home-logo-wrap" title="S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College">
                <img src="{{ asset('images/college-logo.png') }}" alt="Sangamner College Logo" class="college-home-logo">
            </a>
        </div>
        <div class="college-home-center">
            <div class="college-home-tag">FINAL YEAR COLLEGE PROJECT</div>
            <h3 class="college-home-title">
                <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer">
                    S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College (Autonomous), Sangamner
                </a>
            </h3>
            <p class="college-home-desc">
                Created by <strong>6 Students:</strong> Najima Shaikh, Vaishnavi Galande, Payal Satpute, Swamini Bhaskar, Shreya Abhang, Shruti Kadlag | Guided by <strong>Prof. Sitaram Kawade, Prof. Dipa Gite &amp; Prof. Harshal Pawase</strong>.
            </p>
        </div>
        <div class="college-home-right">
            <a href="{{ route('about') }}" class="btn-college-home-about">
                <span>About Our Project &amp; Team</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Web3Forms AJAX Client-Side Handler (Stays on website, no redirect, shows Thank You) -->
<script>
    async function handleContactSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('web3ContactForm');
        const result = document.getElementById('formResult');
        const submitBtn = document.getElementById('contactSubmitBtn');
        const thankYouCard = document.getElementById('thankYouCard');

        if (!form) return;

        submitBtn.disabled = true;
        const originalBtnHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Sending Message...</span>';
        result.style.display = 'none';

        const formData = new FormData(form);
        const object = Object.fromEntries(formData);
        const json = JSON.stringify(object);

        const metaCsrf = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = metaCsrf ? metaCsrf.getAttribute('content') : '';

        try {
            // 1. Submit to Laravel backend to save inquiry in Neon PostgreSQL
            const dbPromise = fetch("{{ route('contact.submit') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: json
            });

            // 2. Submit directly to Web3Forms from browser to send the email notification
            const web3Promise = fetch("https://api.web3forms.com/submit", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            });

            const [response, web3Response] = await Promise.allSettled([dbPromise, web3Promise]);

            let dbSuccess = false;
            let dbMessage = '';

            if (response.status === 'fulfilled') {
                const res = response.value;
                const resJson = await res.json().catch(() => ({}));
                if (res.ok && (res.status === 200 || resJson.success)) {
                    dbSuccess = true;
                } else {
                    dbMessage = resJson.message || 'Database submission error.';
                }
            }

            if (web3Response.status === 'fulfilled') {
                const wRes = web3Response.value;
                const wJson = await wRes.json().catch(() => ({}));
                console.log('Web3Forms Response:', wJson);
            }

            if (dbSuccess) {
                // Show inline Thank You card, hide form - NO REDIRECT
                form.style.display = 'none';
                if (thankYouCard) {
                    thankYouCard.style.display = 'flex';
                    thankYouCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                form.reset();
            } else {
                result.className = 'form-result-alert form-error';
                result.innerHTML = dbMessage || 'Submission error. Please try again.';
                result.style.display = 'block';
            }
        } catch (error) {
            result.className = 'form-result-alert form-error';
            result.innerHTML = 'Network error. Please try again or call us directly at (02425) 223181.';
            result.style.display = 'block';
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;
        }
    }

    function showFormAgain() {
        const form = document.getElementById('web3ContactForm');
        const thankYouCard = document.getElementById('thankYouCard');
        const result = document.getElementById('formResult');
        if (form) form.style.display = 'block';
        if (thankYouCard) thankYouCard.style.display = 'none';
        if (result) result.style.display = 'none';
    }

    // Custom Course Dropdown handler
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownWrap = document.getElementById('customCourseDropdown');
        const dropdownBtn = document.getElementById('courseDropdownBtn');
        const dropdownMenu = document.getElementById('courseDropdownMenu');
        const hiddenInput = document.getElementById('contactCourse');
        const selectedText = document.getElementById('selectedCourseText');

        if (!dropdownWrap || !dropdownBtn || !dropdownMenu) return;

        dropdownBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const isOpen = dropdownWrap.classList.contains('open');
            if (isOpen) {
                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            } else {
                dropdownWrap.classList.add('open');
                dropdownBtn.setAttribute('aria-expanded', 'true');
            }
        });

        const items = dropdownMenu.querySelectorAll('.custom-dropdown-item');
        items.forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.stopPropagation();
                const val = this.getAttribute('data-value');
                if (hiddenInput) hiddenInput.value = val;
                if (selectedText) selectedText.textContent = val;

                items.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            });
        });

        document.addEventListener('click', function (e) {
            if (!dropdownWrap.contains(e.target)) {
                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            }
        });
    });

    /* Interactive Filter for Student Library Vault */
    function filterStudentLib(category, tabBtn) {
        const tabs = document.querySelectorAll('.lib-tab-btn');
        tabs.forEach(t => t.classList.remove('active'));
        if (tabBtn) tabBtn.classList.add('active');

        const cards = document.querySelectorAll('.student-lib-grid .lib-card');
        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            if (category === 'all' || cardCat === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    /* Download Trigger for Student Library Vault */
    function triggerStudentDownload(filename) {
        alert('📥 Downloading Student Resource: ' + filename + '\n\nAccess granted for CG Bugs registered student.');
    }
</script>

@endsection
