@extends('layouts.app')

@section('title', ($activeCategory ? $activeCategory->name : 'Browse Library') . ' - Animora')

@section('content')
<div class="categories-container" style="padding-top: 2rem;">
    <!-- Browse Header -->
    <div style="margin-bottom: 2.5rem;">
        <h1 class="section-title" style="font-size: 2.2rem; margin-bottom: 0.5rem;">
            {{ $activeCategory ? $activeCategory->name : 'ANIMATION & CGI ASSET LIBRARY' }}
        </h1>
        <p style="color: var(--text-secondary); max-width: 800px;">
            {{ $activeCategory ? $activeCategory->description : 'Explore production-tested character rigs, film-grade modular sets, motion capture libraries, and automated pipeline scripts.' }}
        </p>
    </div>

    <!-- Category & Software Filter Tabs -->
    <div style="display: flex; flex-wrap: wrap; gap: 0.8rem; margin-bottom: 2.5rem; align-items: center;">
        <a href="{{ route('browse') }}" class="card-btn" style="{{ !$activeCategory ? 'background: var(--cyan-primary); color: #000;' : '' }}">
            All Categories
        </a>
        @foreach($categories as $c)
            <a href="{{ route('browse', $c->slug) }}" class="card-btn" style="{{ $activeCategory && $activeCategory->id === $c->id ? 'background: var(--cyan-primary); color: #000;' : '' }}">
                {{ $c->name }}
            </a>
        @endforeach
    </div>

    <!-- Assets Grid -->
    @if($assets->isEmpty())
        <div style="text-align: center; padding: 4rem; background: var(--bg-card); border-radius: 16px; border: 1px dashed var(--border-cyan); margin-bottom: 3rem;">
            <p style="color: var(--text-secondary); font-size: 1.1rem;">No assets found in this category yet.</p>
            <a href="{{ route('browse') }}" class="card-btn" style="display: inline-block; margin-top: 1rem;">View All Assets</a>
        </div>
    @else
        <div class="assets-grid">
            @foreach($assets as $item)
                <div class="asset-item-card">
                    <div class="asset-thumb">
                        <span class="software-badge">{{ $item->software }}</span>
                        <!-- 3D Holographic Wireframe Icon -->
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#00f0ff" stroke-width="1.4">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="asset-item-body">
                        <h4 class="asset-item-title">{{ $item->title }}</h4>
                        <p class="asset-item-desc">{{ Str::limit($item->description, 90) }}</p>

                        <div class="asset-meta-tags">
                            <span class="meta-tag">{{ $item->category->name }}</span>
                            <span class="meta-tag">{{ $item->file_format }}</span>
                            <span class="meta-tag">{{ $item->filesize }}</span>
                        </div>

                        <div class="asset-item-footer">
                            <div class="asset-stats">
                                <span style="color: #ffb703;">&#9733; {{ $item->rating }}</span>
                                <span>{{ number_format($item->download_count) }} DLs</span>
                            </div>
                            <a href="{{ route('asset.show', $item->slug) }}" class="download-link">
                                Inspect &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 2rem; margin-bottom: 3rem;">
            {{ $assets->links() }}
        </div>
    @endif
</div>
@endsection
