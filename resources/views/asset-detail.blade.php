@extends('layouts.app')

@section('title', $asset->title . ' | Animora Student Portal')

@section('content')
<div class="section-wrapper" style="padding-top: 3rem;">
    <!-- Minimalist Breadcrumbs -->
    <div style="margin-bottom: 2rem; font-size: 0.82rem; color: var(--text-dim);">
        <a href="{{ route('home') }}" style="color: var(--text-muted);">Store</a> /
        <a href="{{ route('browse', $asset->category->slug) }}" style="color: var(--text-muted);">{{ $asset->category->name }}</a> /
        <span style="color: #ffffff;">{{ $asset->title }}</span>
    </div>

    <!-- Main Detail Grid -->
    <div style="display: grid; grid-template-columns: 1.15fr 1fr; gap: 3rem; margin-bottom: 5rem;">
        
        <!-- Left: Minimalist 3D Viewport Box -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 2.5rem; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative; min-height: 440px;">
            <div style="position: absolute; top: 16px; left: 16px; font-size: 0.72rem; color: var(--text-dim); letter-spacing: 0.08em; display: flex; align-items: center; gap: 0.4rem;">
                <span style="display: inline-block; width: 6px; height: 6px; border-radius: 50%; background: #ffffff;"></span>
                3D VIEWPORT // VERIFIED FOR STUDENTS
            </div>

            <!-- Monochrome Minimalist 3D Biped Model Wireframe -->
            <svg viewBox="0 0 280 230" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 75%; max-width: 300px;">
                <circle cx="140" cy="45" r="15" stroke="#ffffff" stroke-width="1.8" fill="rgba(255, 255, 255, 0.05)"/>
                <line x1="140" y1="60" x2="140" y2="120" stroke="#ffffff" stroke-width="2"/>
                <line x1="105" y1="75" x2="175" y2="75" stroke="#ffffff" stroke-width="2"/>
                <line x1="105" y1="75" x2="88" y2="115" stroke="#a1a1aa" stroke-width="1.6"/>
                <line x1="88" y1="115" x2="78" y2="150" stroke="#a1a1aa" stroke-width="1.6"/>
                <circle cx="78" cy="150" r="4" stroke="#ffffff" stroke-width="1.5"/>
                <line x1="175" y1="75" x2="192" y2="115" stroke="#a1a1aa" stroke-width="1.6"/>
                <line x1="192" y1="115" x2="202" y2="150" stroke="#a1a1aa" stroke-width="1.6"/>
                <circle cx="202" cy="150" r="4" stroke="#ffffff" stroke-width="1.5"/>
                <ellipse cx="140" cy="120" rx="22" ry="8" stroke="#ffffff" stroke-width="1.6"/>
                <line x1="130" y1="122" x2="120" y2="160" stroke="#a1a1aa" stroke-width="1.6"/>
                <line x1="120" y1="160" x2="115" y2="195" stroke="#a1a1aa" stroke-width="1.6"/>
                <rect x="105" y="193" width="16" height="6" rx="2" stroke="#ffffff" stroke-width="1.4"/>
                <line x1="150" y1="122" x2="160" y2="160" stroke="#a1a1aa" stroke-width="1.6"/>
                <line x1="160" y1="160" x2="165" y2="195" stroke="#a1a1aa" stroke-width="1.6"/>
                <rect x="158" y="193" width="16" height="6" rx="2" stroke="#ffffff" stroke-width="1.4"/>
                <ellipse cx="140" cy="195" rx="75" ry="18" stroke="#3f3f46" stroke-width="1" stroke-dasharray="3 3"/>
            </svg>

            <div style="position: absolute; bottom: 16px; font-size: 0.78rem; color: var(--text-dim);">
                Format: <strong style="color: #ffffff;">{{ $asset->file_format }}</strong> &bull; Size: <strong style="color: #ffffff;">{{ $asset->filesize }}</strong>
            </div>
        </div>

        <!-- Right: Technical Details & Download -->
        <div style="display: flex; flex-direction: column; justify-content: center;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                <span class="tag-free-student" style="position: static;">100% Free For Students</span>
                <span class="brand-badge" style="background: transparent; color: #ffffff; border-color: var(--border-subtle);">
                    {{ $asset->software }}
                </span>
            </div>

            <h1 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: #ffffff; margin-bottom: 1rem; line-height: 1.15; letter-spacing: -0.01em;">
                {{ $asset->title }}
            </h1>

            <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 2rem;">
                {{ $asset->description }}
            </p>

            <!-- Technical Specifications Table (Minimalist Producer Toy Style) -->
            <div style="background: #09090b; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.4rem; margin-bottom: 2rem;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; font-size: 0.85rem;">
                    <div>
                        <span style="color: var(--text-dim); display: block; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.2rem;">Compatible Software</span>
                        <strong style="color: #ffffff;">{{ $asset->software }}</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.2rem;">File Formats</span>
                        <strong style="color: #ffffff;">{{ $asset->file_format }}</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.2rem;">License</span>
                        <strong style="color: #ffffff;">Campus / Student Portfolio Free</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 0.2rem;">Total Student Downloads</span>
                        <strong style="color: #ffffff;">{{ number_format($asset->download_count) }} times</strong>
                    </div>
                </div>
            </div>

            <!-- Single Action Download Button -->
            <button 
                onclick="alert('Download started for {{ $asset->title }} ({{ $asset->filesize }})!');"
                class="btn-solid-white"
                style="padding: 1.1rem; width: 100%; display: flex; align-items: center; justify-content: center; gap: 0.6rem; font-size: 0.95rem;"
            >
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Download Student Package ({{ $asset->filesize }})
            </button>
        </div>
    </div>

    <!-- Related Assets -->
    @if($relatedAssets->isNotEmpty())
    <div style="margin-top: 4rem;">
        <h3 class="section-title" style="font-size: 1.3rem; margin-bottom: 1.8rem;">MORE FROM {{ $asset->category->name }}</h3>
        <div class="cards-grid">
            @foreach($relatedAssets as $rel)
                <div class="product-card">
                    <div class="product-card-body">
                        <span style="font-size: 0.72rem; color: var(--text-dim); text-transform: uppercase; margin-bottom: 0.3rem;">{{ $rel->software }}</span>
                        <h4 class="product-card-title">{{ $rel->title }}</h4>
                        <div class="product-card-footer" style="margin-top: 1rem;">
                            <span class="product-stat">{{ $rel->file_format }}</span>
                            <a href="{{ route('asset.show', $rel->slug) }}" class="btn-card-action">View &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
