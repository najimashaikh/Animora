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
            <a href="{{ route('browse') }}" class="doraemon-sketch-text">EXPLORE COURSES</a>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="course-section">

    <h2 class="animora-branding">OUR COURCES</h2>
    <div class="course-card-grid">
        <!-- Card 1 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">PROFESSIONAL PROGRAM</div>
            <div class="course-card-desc">3-YEAR, FULL‑TIME PROGRAM – 2D, 3D, VFX. Master production pipelines in our 3‑year program.</div>
        </div>
        <!-- Card 2 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – 3D Animation</div>
            <div class="course-card-desc">Full‑time 3D animation program covering diverse aspects of the 3D generalist skill set.</div>
        </div>
        <!-- Card 3 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – Game Art Design</div>
            <div class="course-card-desc">From stunning visuals to seamless gameplay, we bring your creative vision to life.</div>
        </div>
        <!-- Card 4 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – VFX</div>
            <div class="course-card-desc">Transform narratives into unforgettable cinematic experiences with VFX.</div>
        </div>
        <!-- Card 5 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">1‑YEAR, FULL‑TIME PROGRAM – Individual Courses</div>
            <div class="course-card-desc">Unlock your creative potential with comprehensive media production skills.</div>
        </div>
        <!-- Card 6 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/placeholder.png') }}" alt="Program Image"></div>
            <div class="course-card-title">10‑WEEK, ON‑CAMUS PROGRAM – Short Term Courses</div>
            <div class="course-card-desc">Standalone courses in film, game, and visual effects production.</div>
        </div>

    </div>
</section>

@endsection
