@extends('layouts.app')

@section('title', 'Student Pipeline Tools & Scripts | Animora')

@section('content')
<div class="section-wrapper" style="padding-top: 3rem;">
    <!-- Pipeline Header -->
    <div style="margin-bottom: 3rem;">
        <span class="brand-badge" style="margin-bottom: 0.8rem; display: inline-block;">AUTOMATION REPOSITORY</span>
        <h1 class="section-title" style="font-size: 2.4rem; margin-bottom: 0.6rem; letter-spacing: -0.01em;">
            STUDENT PIPELINE SCRIPTS &amp; TOOLS
        </h1>
        <p style="color: var(--text-muted); max-width: 700px; font-size: 0.95rem; line-height: 1.6;">
            Open-source Python shelf scripts, auto-weight paint smoothers, and batch exporters designed to eliminate repetitive technical tasks for animation students.
        </p>
    </div>

    <!-- Software Breakdown Cards -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 4rem;">
        <div class="product-card" style="padding: 1.6rem;">
            <div style="font-size: 1.25rem; font-family: var(--font-heading); font-weight: 800; margin-bottom: 0.5rem; color: #ffffff;">Maya Rigging Shelf</div>
            <p style="color: var(--text-muted); font-size: 0.82rem; line-height: 1.55;">
                One-click FK/IK switchers, ribbon spine generators, and symmetry mirror tools compatible with Maya 2022-2025 student licenses.
            </p>
        </div>
        <div class="product-card" style="padding: 1.6rem;">
            <div style="font-size: 1.25rem; font-family: var(--font-heading); font-weight: 800; margin-bottom: 0.5rem; color: #ffffff;">Blender 4.x Addons</div>
            <p style="color: var(--text-muted); font-size: 0.82rem; line-height: 1.55;">
                Asset browser batch metadata taggers, auto-weight paint smoothers, and fast FBX export pipelines for Unreal Engine student reels.
            </p>
        </div>
        <div class="product-card" style="padding: 1.6rem;">
            <div style="font-size: 1.25rem; font-family: var(--font-heading); font-weight: 800; margin-bottom: 0.5rem; color: #ffffff;">KineFX Mocap Tools</div>
            <p style="color: var(--text-muted); font-size: 0.82rem; line-height: 1.55;">
                Houdini motion capture retargeting setups to quickly clean up noisy optical mocap data for assignment submissions.
            </p>
        </div>
    </div>

    <!-- Available Scripts List -->
    <h3 class="section-title" style="font-size: 1.3rem; margin-bottom: 1.8rem;">CAMPUS VERIFIED SCRIPTS</h3>
    <div class="cards-grid">
        @forelse($tools as $tool)
            <div class="product-card">
                <div class="product-card-body">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.6rem;">
                        <span style="font-size: 0.7rem; color: var(--text-dim); text-transform: uppercase;">{{ $tool->software }}</span>
                        <span class="tag-free-student" style="position: static; font-size: 0.62rem;">Verified</span>
                    </div>
                    <h4 class="product-card-title">{{ $tool->title }}</h4>
                    <p class="product-card-desc">{{ $tool->description }}</p>
                    <div class="product-card-footer">
                        <span class="product-stat">{{ $tool->file_format }}</span>
                        <a href="{{ route('asset.show', $tool->slug) }}" class="btn-card-action">Download Tool &rarr;</a>
                    </div>
                </div>
            </div>
        @empty
            <p style="color: var(--text-muted);">Pipeline scripts loading...</p>
        @endforelse
    </div>
</div>
@endsection
