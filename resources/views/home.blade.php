@extends('layouts.app')

@section('title', 'Animora - ANIMATION LIBRARY | PRECISION IN MOTION')

@section('content')

<!-- Hero Section (Exact 1:1 Replica) -->
<section class="hero-section">
    <div class="hero-content">
        <!-- Center Emblem -->
        <div class="hero-emblem-wrap">
            <div class="hero-emblem-glow"></div>
            <div class="hero-emblem">
                <img src="{{ asset('images/logo.png') }}" alt="Animora Emblem" width="90" height="90">
            </div>
        </div>

        <!-- Typography -->
        <h1 class="hero-title">ANIMORA</h1>
        <h2 class="hero-subtitle">ANIMATION LIBRARY</h2>
        <p class="hero-tagline">PRECISION IN MOTION</p>

        <!-- Search Input Bar -->
        <div class="search-box-wrap">
            <form action="{{ route('browse') }}" method="GET">
                <input 
                    type="text" 
                    name="q" 
                    id="mainSearchInput" 
                    class="search-input-pill" 
                    placeholder="Search Rigs, Props, Assets..." 
                    autocomplete="off"
                >
                <button type="submit" class="search-icon-btn" title="Search">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- 4 Category Cards (Exact 1:1 Replica Matching Reference Screenshot) -->
<section class="cards-section">
    <div class="cards-grid">
        
        <!-- 1. CHARACTER RIGS -->
        <div class="replica-card">
            <div class="card-thumbnail-box">
                <img src="{{ asset('images/card-rigs.jpg') }}" alt="Character Rigs" width="280" height="140">
            </div>
            <h3 class="card-title">CHARACTER RIGS</h3>
            <p class="card-subtitle">Ready-to-use Rigs &amp; Rigs Systems</p>
            <div class="card-bottom-bar">
                <span class="card-count-label">345 Assets</span>
                <a href="{{ route('browse', 'character-rigs') }}" class="card-explore-btn">EXPLORE</a>
            </div>
        </div>

        <!-- 2. PRODUCTION ASSETS -->
        <div class="replica-card">
            <div class="card-thumbnail-box">
                <img src="{{ asset('images/card-assets.jpg') }}" alt="Production Assets" width="280" height="140">
            </div>
            <h3 class="card-title">PRODUCTION ASSETS</h3>
            <p class="card-subtitle">Props, Sets &amp; Environments</p>
            <div class="card-bottom-bar">
                <span class="card-count-label">1.2K Assets</span>
                <a href="{{ route('browse', 'production-assets') }}" class="card-explore-btn">EXPLORE</a>
            </div>
        </div>

        <!-- 3. ANIMATION CLIPS -->
        <div class="replica-card">
            <div class="card-thumbnail-box">
                <img src="{{ asset('images/card-clips.jpg') }}" alt="Animation Clips" width="280" height="140">
            </div>
            <h3 class="card-title">ANIMATION CLIPS</h3>
            <p class="card-subtitle">Mocap, Clips &amp; Cycle Library</p>
            <div class="card-bottom-bar">
                <span class="card-count-label">890 Clips</span>
                <a href="{{ route('browse', 'animation-clips') }}" class="card-explore-btn">EXPLORE</a>
            </div>
        </div>

        <!-- 4. PIPELINE TOOLS -->
        <div class="replica-card">
            <div class="card-thumbnail-box">
                <img src="{{ asset('images/card-tools.jpg') }}" alt="Pipeline Tools" width="280" height="140">
            </div>
            <h3 class="card-title">PIPELINE TOOLS</h3>
            <p class="card-subtitle">Maya, Blender &amp; Houdini Tools</p>
            <div class="card-bottom-bar">
                <span class="card-count-label">156 Scripts</span>
                <a href="{{ route('browse', 'pipeline-tools') }}" class="card-explore-btn">EXPLORE</a>
            </div>
        </div>

    </div>
</section>

@endsection
