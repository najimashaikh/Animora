@extends('layouts.app')

@section('title', ($activeCategory ? $activeCategory->name : 'Student Catalog') . ' | Animora')

@section('content')
<div class="section-wrapper" style="padding-top: 3rem;">
    <!-- Catalog Header -->
    <div style="margin-bottom: 2.5rem;">
        <span class="brand-badge" style="margin-bottom: 0.8rem; display: inline-block;">STUDENT REPOSITORY</span>
        <h1 class="section-title" style="font-size: 2.4rem; margin-bottom: 0.6rem; letter-spacing: -0.01em;">
            {{ $activeCategory ? $activeCategory->name : 'ALL STUDENT ANIMATION ASSETS' }}
        </h1>
        <p style="color: var(--text-muted); max-width: 700px; font-size: 0.95rem; line-height: 1.6;">
            {{ $activeCategory ? $activeCategory->description : 'Browse all production-tested character rigs, lighting kits, and motion capture libraries verified for animation students and demo reels.' }}
        </p>
    </div>

    <!-- Category Filter Tabs (Producer Toy Minimalist Style) -->
    <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 3rem; align-items: center;">
        <a href="{{ route('browse') }}" class="btn-ghost-white" style="padding: 0.45rem 1.2rem; font-size: 0.82rem; {{ !$activeCategory ? 'background: #ffffff; color: #000000; font-weight: 700;' : '' }}">
            All Categories
        </a>
        @foreach($categories as $c)
            <a href="{{ route('browse', $c->slug) }}" class="btn-ghost-white" style="padding: 0.45rem 1.2rem; font-size: 0.82rem; {{ $activeCategory && $activeCategory->id === $c->id ? 'background: #ffffff; color: #000000; font-weight: 700;' : '' }}">
                {{ $c->name }}
            </a>
        @endforeach
    </div>

    <!-- Assets Grid -->
    @if($assets->isEmpty())
        <div style="text-align: center; padding: 4rem 2rem; background: var(--bg-card); border-radius: var(--radius-md); border: 1px dashed var(--border-subtle); margin-bottom: 4rem;">
            <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 1rem;">No assets currently listed in this category.</p>
            <a href="{{ route('browse') }}" class="btn-solid-white" style="display: inline-block; font-size: 0.82rem;">View Full Catalog</a>
        </div>
    @else
        <div class="cards-grid">
            @foreach($assets as $item)
                <div class="product-card">
                    <div class="product-card-thumb">
                        <span class="tag-free-student">{{ $item->software }}</span>
                        <!-- Minimalist Geometry Wireframe Visual -->
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.2" opacity="0.85">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="product-card-body">
                        <div style="display: flex; gap: 0.4rem; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.7rem; color: var(--text-dim); text-transform: uppercase; letter-spacing: 0.05em;">{{ $item->category->name }}</span>
                            <span style="font-size: 0.7rem; color: var(--text-dim);">&bull;</span>
                            <span style="font-size: 0.7rem; color: #ffffff; font-weight: 600;">{{ $item->file_format }}</span>
                        </div>
                        <h3 class="product-card-title">{{ $item->title }}</h3>
                        <p class="product-card-desc">{{ Str::limit($item->description, 85) }}</p>

                        <div class="product-card-footer">
                            <span class="product-stat">&#9733; {{ $item->rating }} ({{ number_format($item->download_count) }} DLs)</span>
                            <a href="{{ route('asset.show', $item->slug) }}" class="btn-card-action">
                                Download &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 3rem; margin-bottom: 4rem;">
            {{ $assets->links() }}
        </div>
    @endif
</div>
@endsection
