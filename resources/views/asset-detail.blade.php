@extends('layouts.app')

@section('title', $asset->title . ' - Animora')

@section('content')
<div class="categories-container" style="padding-top: 2rem;">
    <!-- Breadcrumbs -->
    <div style="margin-bottom: 1.5rem; font-size: 0.85rem; color: var(--text-dim);">
        <a href="{{ route('home') }}" style="color: var(--cyan-soft);">Home</a> &gt;
        <a href="{{ route('browse', $asset->category->slug) }}" style="color: var(--cyan-soft);">{{ $asset->category->name }}</a> &gt;
        <span>{{ $asset->title }}</span>
    </div>

    <!-- Main Detail Grid -->
    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 2.5rem; margin-bottom: 4rem;">
        
        <!-- Left: 3D Holographic Viewport Simulator -->
        <div style="background: var(--bg-card); border: 1px solid var(--border-cyan); border-radius: 18px; padding: 2rem; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative; min-height: 420px; overflow: hidden;">
            <div style="position: absolute; top: 15px; left: 15px; font-size: 0.75rem; color: var(--cyan-soft); letter-spacing: 0.1em; display: flex; align-items: center; gap: 0.4rem;">
                <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #22c55e; box-shadow: 0 0 8px #22c55e;"></span>
                3D VIEWPORT // WIREFRAME ACTIVE
            </div>

            <!-- Viewport Hologram Illustration -->
            <svg viewBox="0 0 300 240" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 80%; max-width: 320px;">
                <!-- Hologram Rings -->
                <ellipse cx="150" cy="200" rx="90" ry="25" stroke="#00f0ff" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.7"/>
                <ellipse cx="150" cy="200" rx="55" ry="15" stroke="#38bdf8" stroke-width="1.5" opacity="0.9"/>
                
                <!-- Biped Skeleton / Mesh Nodes -->
                <circle cx="150" cy="50" r="16" stroke="#00f0ff" stroke-width="2" fill="rgba(0, 240, 255, 0.15)"/>
                <circle cx="150" cy="50" r="5" fill="#00f0ff"/>
                <line x1="150" y1="66" x2="150" y2="125" stroke="#00f0ff" stroke-width="2.5"/>
                
                <!-- Shoulders & Arms -->
                <line x1="110" y1="80" x2="190" y2="80" stroke="#00f0ff" stroke-width="2.5"/>
                <line x1="110" y1="80" x2="90" y2="120" stroke="#38bdf8" stroke-width="2"/>
                <line x1="90" y1="120" x2="80" y2="155" stroke="#38bdf8" stroke-width="2"/>
                <circle cx="80" cy="155" r="5" stroke="#ffb703" stroke-width="2"/>

                <line x1="190" y1="80" x2="210" y2="120" stroke="#38bdf8" stroke-width="2"/>
                <line x1="210" y1="120" x2="220" y2="155" stroke="#38bdf8" stroke-width="2"/>
                <circle cx="220" cy="155" r="5" stroke="#ffb703" stroke-width="2"/>

                <!-- Pelvis Controller -->
                <ellipse cx="150" cy="125" rx="25" ry="10" stroke="#ffb703" stroke-width="2" fill="none"/>

                <!-- Legs -->
                <line x1="138" y1="128" x2="125" y2="165" stroke="#38bdf8" stroke-width="2"/>
                <line x1="125" y1="165" x2="120" y2="198" stroke="#38bdf8" stroke-width="2"/>
                <rect x="110" y="196" width="18" height="8" rx="2" stroke="#00f0ff" stroke-width="1.8"/>

                <line x1="162" y1="128" x2="175" y2="165" stroke="#38bdf8" stroke-width="2"/>
                <line x1="175" y1="165" x2="180" y2="198" stroke="#38bdf8" stroke-width="2"/>
                <rect x="172" y="196" width="18" height="8" rx="2" stroke="#00f0ff" stroke-width="1.8"/>
            </svg>

            <div style="position: absolute; bottom: 15px; font-size: 0.78rem; color: var(--text-dim);">
                Format: <strong style="color: #fff;">{{ $asset->file_format }}</strong> | Size: <strong style="color: #fff;">{{ $asset->filesize }}</strong>
            </div>
        </div>

        <!-- Right: Specifications & Downloads -->
        <div style="display: flex; flex-direction: column; justify-content: center;">
            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.75rem;">
                <span class="meta-tag" style="background: rgba(0, 240, 255, 0.15); border-color: var(--cyan-primary); color: #fff;">
                    {{ $asset->category->name }}
                </span>
                <span class="software-badge" style="position: static;">
                    {{ $asset->software }}
                </span>
            </div>

            <h1 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; color: #fff; margin-bottom: 1rem; line-height: 1.2;">
                {{ $asset->title }}
            </h1>

            <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                {{ $asset->description }}
            </p>

            <!-- Technical Specifications Table -->
            <div style="background: rgba(4, 12, 24, 0.6); border: 1px solid var(--border-cyan); border-radius: 12px; padding: 1.2rem; margin-bottom: 1.8rem;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.85rem;">
                    <div>
                        <span style="color: var(--text-dim); display: block;">Software Target</span>
                        <strong style="color: var(--cyan-soft);">{{ $asset->software }}</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block;">Primary Formats</span>
                        <strong style="color: #fff;">{{ $asset->file_format }}</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block;">Rating</span>
                        <strong style="color: #ffb703;">&#9733; {{ $asset->rating }} / 5.0</strong>
                    </div>
                    <div>
                        <span style="color: var(--text-dim); display: block;">Total Downloads</span>
                        <strong style="color: #fff;">{{ number_format($asset->download_count) }} verified</strong>
                    </div>
                </div>
            </div>

            <!-- Download CTA Button -->
            <button 
                onclick="alert('Download Started for {{ $asset->title }} ({{ $asset->filesize }})!');"
                class="btn-submit" 
                style="display: flex; align-items: center; justify-content: center; gap: 0.6rem; padding: 1rem;"
            >
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Download Package ({{ $asset->filesize }})
            </button>
        </div>
    </div>

    <!-- Related Assets in Category -->
    @if($relatedAssets->isNotEmpty())
    <div style="margin-top: 3rem; margin-bottom: 4rem;">
        <h3 class="section-title" style="margin-bottom: 1.5rem;">MORE FROM {{ $asset->category->name }}</h3>
        <div class="assets-grid">
            @foreach($relatedAssets as $rel)
                <div class="asset-item-card">
                    <div class="asset-thumb">
                        <span class="software-badge">{{ $rel->software }}</span>
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#00f0ff" stroke-width="1.4">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                    </div>
                    <div class="asset-item-body">
                        <h4 class="asset-item-title">{{ $rel->title }}</h4>
                        <div class="asset-item-footer">
                            <span style="font-size: 0.8rem; color: var(--text-secondary);">{{ $rel->file_format }}</span>
                            <a href="{{ route('asset.show', $rel->slug) }}" class="download-link">View &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
