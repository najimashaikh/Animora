@extends('layouts.app')

@section('title', 'Animora | Explore Animation Courses')

@section('content')

<!-- Full Width Static Hero Section (Animora Comic Art Banner - No Text) -->
<section class="hero-static-section hero-fullwidth">
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/animora-hero-full.png') }}" alt="Animora Animation Assets" class="hero-static-img">
    </div>
</section>

<!-- Doraemon Blue Themed "Explore Courses" Section (Exact Below Hero) -->
<section class="courses-doraemon-section" id="courses">
    <div class="courses-doraemon-container">
        
        <!-- Section Header with Doraemon Animated Mascot -->
        <div class="courses-head-banner">
            <div class="courses-badge-row">
                <span class="doraemon-badge">DORAEMON BLUE EDITION</span>
                <span class="badge-student-live">STUDENT ACADEMY</span>
            </div>
            
            <div class="courses-title-wrapper">
                <div class="courses-title-group">
                    <h2 class="courses-main-title">EXPLORE COURSES</h2>
                    <p class="courses-subtitle">Master 3D character animation, rigging mechanics, and anime cinematic pipelines with hands-on studio mentors.</p>
                </div>
                
                <!-- Doraemon Animated GIF Mascot -->
                <div class="doraemon-mascot-box">
                    <img src="{{ asset('images/doraemon-courses.gif') }}" alt="Doraemon Animated Sticker" class="doraemon-gif-img">
                </div>
            </div>
        </div>

        <!-- Doraemon Blue Course Grid -->
        <div class="courses-grid">
            
            <!-- Course 1 -->
            <div class="course-card-doraemon">
                <div class="course-card-tag">Maya &amp; Blender</div>
                <h3 class="course-card-name">3D Character Animation Masterclass</h3>
                <p class="course-card-desc">
                    Learn the 12 principles of animation, body mechanics, dynamic walk cycles, and expressive facial acting for student demo reels.
                </p>
                <div class="course-meta">
                    <span class="meta-pill">12 Weeks</span>
                    <span class="meta-pill">Beginner to Pro</span>
                </div>
                <div class="course-card-bottom">
                    <span class="course-free-tag">100% Free for Students</span>
                    <a href="javascript:void(0)" onclick="alert('Course enrollment open for Animora Students!');" class="btn-doraemon-action">Enroll Course &rarr;</a>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="course-card-doraemon">
                <div class="course-card-tag">Rigging &amp; Python</div>
                <h3 class="course-card-name">Advanced Character Rigging &amp; Skinning</h3>
                <p class="course-card-desc">
                    Construct production biped/quadruped skeletons, FK/IK blend switches, stretchy spline systems, and custom facial UI pickers.
                </p>
                <div class="course-meta">
                    <span class="meta-pill">8 Weeks</span>
                    <span class="meta-pill">Intermediate</span>
                </div>
                <div class="course-card-bottom">
                    <span class="course-free-tag">100% Free for Students</span>
                    <a href="javascript:void(0)" onclick="alert('Course enrollment open for Animora Students!');" class="btn-doraemon-action">Enroll Course &rarr;</a>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="course-card-doraemon">
                <div class="course-card-tag">Lighting &amp; Unreal</div>
                <h3 class="course-card-name">CGI Environment &amp; Unreal Engine 5</h3>
                <p class="course-card-desc">
                    Build cinematic sci-fi environments, master Lumen real-time lighting, camera choreography, and final portfolio rendering.
                </p>
                <div class="course-meta">
                    <span class="meta-pill">10 Weeks</span>
                    <span class="meta-pill">All Levels</span>
                </div>
                <div class="course-card-bottom">
                    <span class="course-free-tag">100% Free for Students</span>
                    <a href="javascript:void(0)" onclick="alert('Course enrollment open for Animora Students!');" class="btn-doraemon-action">Enroll Course &rarr;</a>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="course-card-doraemon">
                <div class="course-card-tag">Anime &amp; NPR</div>
                <h3 class="course-card-name">Anime Shading &amp; Comic Art Pipeline</h3>
                <p class="course-card-desc">
                    Techniques for stylized anime cell-shading, line art ink extraction, and Japanese animation action timing in Blender.
                </p>
                <div class="course-meta">
                    <span class="meta-pill">6 Weeks</span>
                    <span class="meta-pill">Specialization</span>
                </div>
                <div class="course-card-bottom">
                    <span class="course-free-tag">100% Free for Students</span>
                    <a href="javascript:void(0)" onclick="alert('Course enrollment open for Animora Students!');" class="btn-doraemon-action">Enroll Course &rarr;</a>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
