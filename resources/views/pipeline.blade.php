@extends('layouts.app')

@section('title', 'Pipeline Tools & Automation - Animora')

@section('content')
<div class="categories-container" style="padding-top: 2rem;">
    <!-- Pipeline Header -->
    <div style="margin-bottom: 2.5rem;">
        <h1 class="section-title" style="font-size: 2.2rem; margin-bottom: 0.5rem;">
            STUDIO PIPELINE &amp; AUTOMATION
        </h1>
        <p style="color: var(--text-secondary); max-width: 800px;">
            High-performance Python scripts, shelf tools, and rigging automation plugins for Autodesk Maya, Blender, and SideFX Houdini to supercharge your animation production pipeline.
        </p>
    </div>

    <!-- Pipeline Architecture Breakdown Cards -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 3.5rem;">
        <div class="feature-card" style="padding: 1.5rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--cyan-primary);">&#9881; Maya Rigging Engine</div>
            <p style="color: var(--text-secondary); font-size: 0.85rem; line-height: 1.5;">
                Automated ribbon spines, dynamic IK/FK blending nodes, and blendshape mirroring scripts compatible with Maya 2022-2025.
            </p>
        </div>
        <div class="feature-card" style="padding: 1.5rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--cyan-primary);">&#128394; Blender Geometry Nodes</div>
            <p style="color: var(--text-secondary); font-size: 0.85rem; line-height: 1.5;">
                Procedural crowd simulators, auto-weight paint smoothers, and fast batch FBX export pipelines for game engines.
            </p>
        </div>
        <div class="feature-card" style="padding: 1.5rem;">
            <div style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--cyan-primary);">&#128736; Houdini KineFX Solvers</div>
            <p style="color: var(--text-secondary); font-size: 0.85rem; line-height: 1.5;">
                Custom VEX wrangles and KineFX retargeting networks for seamless optical mocap motion transfer.
            </p>
        </div>
    </div>

    <!-- Script Library Grid -->
    <h3 class="section-title" style="margin-bottom: 1.5rem;">AVAILABLE SCRIPTS &amp; PLUGINS</h3>
    <div class="assets-grid">
        @forelse($tools as $tool)
            <div class="asset-item-card">
                <div class="asset-thumb">
                    <span class="software-badge">{{ $tool->software }}</span>
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#00f0ff" stroke-width="1.4">
                        <polyline points="16 18 22 12 16 6"></polyline>
                        <polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                </div>
                <div class="asset-item-body">
                    <h4 class="asset-item-title">{{ $tool->title }}</h4>
                    <p class="asset-item-desc">{{ $tool->description }}</p>
                    <div class="asset-item-footer">
                        <span style="color: var(--cyan-soft); font-size: 0.8rem;">{{ $tool->file_format }}</span>
                        <a href="{{ route('asset.show', $tool->slug) }}" class="download-link">Get Tool &rarr;</a>
                    </div>
                </div>
            </div>
        @empty
            <p style="color: var(--text-secondary);">Pipeline scripts loading...</p>
        @endforelse
    </div>
</div>
@endsection
