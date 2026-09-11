@extends('layouts.app')

@section('title', 'Animora | Student Animation Asset Library & CGI Tools')

@section('content')

<!-- Full Width Static Hero Section (Animora Comic Art Banner - No Text) -->
<section class="hero-static-section hero-fullwidth">
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/animora-hero-full.png') }}" alt="Animora Animation Assets" class="hero-static-img">
    </div>
</section>

<!-- Trust / Student Benefits Bar -->
<div class="trust-bar">
    <div class="trust-item">
        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Verified for Maya 2024 &amp; Blender 4.x</span>
    </div>
    <div class="trust-item">
        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
        </svg>
        <span>100% Free for Student Portfolios</span>
    </div>
    <div class="trust-item">
        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
        <span>One-Click Package Downloads</span>
    </div>
    <div class="trust-item">
        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span>Powered by Neon Cloud PostgreSQL</span>
    </div>
</div>

<!-- 4 Categories (Producer Toy Minimalist Card Layout) -->
<section class="section-wrapper">
    <div class="section-head">
        <h2 class="section-title">STUDENT ASSET CATEGORIES</h2>
        <a href="{{ route('browse') }}" class="section-link">View All Catalog &rarr;</a>
    </div>

    <div class="cards-grid">
        
        <!-- 1. CHARACTER RIGS -->
        <div class="product-card">
            <div class="product-card-thumb">
                <span class="tag-free-student">Free &bull; Student</span>
                <img src="{{ asset('images/card-rigs.jpg') }}" alt="Student Character Rigs" width="280" height="165">
            </div>
            <div class="product-card-body">
                <h3 class="product-card-title">CHARACTER RIGS</h3>
                <p class="product-card-desc">
                    Ready-to-animate bipedal &amp; mechanical character rigs with full face controllers for student acting assignments.
                </p>
                <div class="product-card-footer">
                    <span class="product-stat">345 Assets</span>
                    <a href="{{ route('browse', 'character-rigs') }}" class="btn-card-action">EXPLORE</a>
                </div>
            </div>
        </div>

        <!-- 2. PRODUCTION ASSETS -->
        <div class="product-card">
            <div class="product-card-thumb">
                <span class="tag-free-student">Free &bull; Student</span>
                <img src="{{ asset('images/card-assets.jpg') }}" alt="Production Sets" width="280" height="165">
            </div>
            <div class="product-card-body">
                <h3 class="product-card-title">PRODUCTION ASSETS</h3>
                <p class="product-card-desc">
                    Modular 3D sci-fi interiors, cinematic lighting rigs, and demo reel backdrop sets ready for lighting &amp; rendering.
                </p>
                <div class="product-card-footer">
                    <span class="product-stat">1.2K Assets</span>
                    <a href="{{ route('browse', 'production-assets') }}" class="btn-card-action">EXPLORE</a>
                </div>
            </div>
        </div>

        <!-- 3. ANIMATION CLIPS -->
        <div class="product-card">
            <div class="product-card-thumb">
                <span class="tag-free-student">Free &bull; Student</span>
                <img src="{{ asset('images/card-clips.jpg') }}" alt="Animation Clips" width="280" height="165">
            </div>
            <div class="product-card-body">
                <h3 class="product-card-title">ANIMATION CLIPS</h3>
                <p class="product-card-desc">
                    Optical motion capture loops, walk cycles, sprint mechanics, and combat references for student animation practice.
                </p>
                <div class="product-card-footer">
                    <span class="product-stat">890 Clips</span>
                    <a href="{{ route('browse', 'animation-clips') }}" class="btn-card-action">EXPLORE</a>
                </div>
            </div>
        </div>

        <!-- 4. PIPELINE TOOLS -->
        <div class="product-card">
            <div class="product-card-thumb">
                <span class="tag-free-student">Free &bull; Student</span>
                <img src="{{ asset('images/card-tools.jpg') }}" alt="Pipeline Tools" width="280" height="165">
            </div>
            <div class="product-card-body">
                <h3 class="product-card-title">PIPELINE TOOLS</h3>
                <p class="product-card-desc">
                    Python scripts, shelf plugins, and auto-rigging tools to streamline Maya, Blender, and Houdini studio workflows.
                </p>
                <div class="product-card-footer">
                    <span class="product-stat">156 Scripts</span>
                    <a href="{{ route('browse', 'pipeline-tools') }}" class="btn-card-action">EXPLORE</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- About Section (Minimalist B&W Producer Toy Style) -->
<section id="about" class="section-wrapper">
    <div class="section-head">
        <h2 class="section-title">ABOUT ANIMORA</h2>
        <span class="product-stat">Student Digital Library</span>
    </div>
    <div class="about-card-box">
        <div class="about-content">
            <h3 class="about-heading">Next-Gen Assets Built for Animation Students</h3>
            <p class="about-text">
                Animora is a high-grade 3D animation asset marketplace created specifically to empower animation students, indie artists, and college creators. From fully articulate character rigs for Maya & Blender to modular sci-fi environment sets and optical motion capture loops, Animora provides everything needed to create award-winning portfolios and studio reels.
            </p>
            <div class="about-stats-grid">
                <div class="about-stat-item">
                    <span class="about-stat-number">100%</span>
                    <span class="about-stat-label">Free Student Access</span>
                </div>
                <div class="about-stat-item">
                    <span class="about-stat-number">2.5K+</span>
                    <span class="about-stat-label">Production Assets</span>
                </div>
                <div class="about-stat-item">
                    <span class="about-stat-number">Maya &amp; Blender</span>
                    <span class="about-stat-label">Studio Ready Rigs</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact" class="section-wrapper" style="margin-bottom: 4rem;">
    <div class="section-head">
        <h2 class="section-title">CONTACT US</h2>
        <span class="product-stat">Student &amp; Campus Support</span>
    </div>
    <div class="contact-card-box">
        <div class="contact-info">
            <h3 class="about-heading">Have questions or need custom rigs?</h3>
            <p class="about-text">
                Reach out to the Animora student support desk for assistance with download packages, rig compatibility, or academic submissions.
            </p>
            <div class="contact-links-list">
                <div class="contact-row">
                    <span class="contact-label">Email:</span>
                    <a href="mailto:support@animora.student" class="contact-val">support@animora.student</a>
                </div>
                <div class="contact-row">
                    <span class="contact-label">Campus Lab:</span>
                    <span class="contact-val">Animation &amp; CGI Studio Wing</span>
                </div>
                <div class="contact-row">
                    <span class="contact-label">Discord:</span>
                    <span class="contact-val">#animora-creators</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
