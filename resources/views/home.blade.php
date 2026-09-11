@extends('layouts.app')

@section('title', 'Animora | Explore Animation Courses')

@section('content')

<!-- Full Width Static Hero Section (Animora Comic Art Banner - No Text) -->
<section class="hero-static-section hero-fullwidth">
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/animora-hero-full.png') }}" alt="Animora Animation Assets" class="hero-static-img">
    </div>
</section>

<!-- Big Static Doraemon Blue Banner (Doraemon Left, Explore Courses Right) -->
<section class="doraemon-blue-banner" id="courses">
    <div class="doraemon-banner-inner">
        
        <!-- Left Side: Doraemon GIF -->
        <div class="doraemon-left-side">
            <div class="doraemon-gif-frame">
                <img src="{{ asset('images/doraemon-courses.gif') }}" alt="Doraemon Sticker" class="doraemon-large-gif">
            </div>
        </div>

        <!-- Right Side: Explore Courses -->
        <div class="doraemon-right-side">
            <span class="doraemon-tagline">ANIMORA STUDENT ACADEMY</span>
            <h2 class="doraemon-title">EXPLORE COURSES</h2>
            <p class="doraemon-desc">
                Learn 3D Character Animation, Rigging, VFX and CGI Pipelines with industry-grade tools.
            </p>
            <a href="{{ route('browse') }}" class="btn-doraemon-white">
                Explore All Courses &rarr;
            </a>
        </div>

    </div>
</section>

@endsection
