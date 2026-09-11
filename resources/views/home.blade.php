@extends('layouts.app')

@section('title', 'Animora | Student Animation Asset Library & CGI Tools')

@section('content')

<!-- Producer Toy Style Minimalist Hero Section -->
<section class="hero-section">
    <!-- Announcement Badge -->
    <div class="hero-announcement">
        <span class="dot"></span>
        <span>ANIMORA CAMPUS &bull; 100% FREE FOR ANIMATION STUDENTS</span>
    </div>

    <!-- Bold Minimalist Typography -->
    <h1 class="hero-title">ANIMATION ASSETS FOR NEXT-GEN CREATORS.</h1>
    <p class="hero-subtitle">
        Download production-grade character rigs, modular environment kits, and optical mocap cycles designed to elevate your college assignments and studio demo reel.
    </p>

    <!-- Producer Toy Dual Action Buttons -->
    <div class="hero-actions">
        <a href="{{ route('browse') }}" class="btn-solid-white">Browse Student Catalog</a>
        <a href="javascript:void(0)" onclick="alert('Student Campus Account: Authenticated!');" class="btn-ghost-white">Student Sign In</a>
    </div>

    <!-- Minimalist Monochrome Search Bar -->
    <div class="search-container">
        <form action="{{ route('browse') }}" method="GET">
            <input 
                type="text" 
                name="q" 
                id="mainSearchInput" 
                class="search-input" 
                placeholder="Search rigs, assignment sets, mocap, software (Maya, Blender)..." 
                autocomplete="off"
            >
            <button type="submit" class="search-btn" title="Search Library">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </form>
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
                <img src="{{ secure_asset('images/card-rigs.jpg') }}" alt="Student Character Rigs" width="280" height="165">
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
                <img src="{{ secure_asset('images/card-assets.jpg') }}" alt="Production Sets" width="280" height="165">
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
                <img src="{{ secure_asset('images/card-clips.jpg') }}" alt="Animation Clips" width="280" height="165">
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
                <img src="{{ secure_asset('images/card-tools.jpg') }}" alt="Pipeline Tools" width="280" height="165">
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

@endsection
