@extends('layouts.app')

@section('title', 'Student Library | Free Downloadable Notes, 2D, 3D, VFX & Game Art | Animora')

@section('content')
<div class="student-library-page">

    <!-- Hero / Header Section -->
    <section class="student-lib-hero">
        <div class="student-lib-header-inner">
            <h1 class="animora-branding" style="margin-bottom: 0.75rem;">STUDENT ASSET &amp; STUDY LIBRARY</h1>
            <p class="student-lib-subtext">
                Welcome to the CG Bugs open digital student vault. Download lecture notes, 2D turnaround model sheets, 3D character rigs, VFX simulation caches, and game art assets completely free. Open to all students, artists, and creators worldwide.
            </p>

            <!-- Search Bar -->
            <div class="student-lib-search-wrap">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="libSearchInput" placeholder="Search notes, rigs, 2D sheets, VFX caches, FBX, VDB..." onkeyup="handleLibFilter()">
            </div>

            <!-- Filter Tabs -->
            <div class="student-lib-filter-tabs">
                <button type="button" class="lib-tab-pill active" onclick="setCategory('all', this)">All Resources (10)</button>
                <button type="button" class="lib-tab-pill" onclick="setCategory('notes', this)">📚 Notes (2)</button>
                <button type="button" class="lib-tab-pill" onclick="setCategory('2d', this)">🎨 2D Animation (2)</button>
                <button type="button" class="lib-tab-pill" onclick="setCategory('3d', this)">🧊 3D Models &amp; Rigs (2)</button>
                <button type="button" class="lib-tab-pill" onclick="setCategory('vfx', this)">💥 VFX Dynamics (2)</button>
                <button type="button" class="lib-tab-pill" onclick="setCategory('gameart', this)">🎮 Game Art &amp; Design (2)</button>
            </div>
        </div>
    </section>


    <!-- Main Cards Grid Section (Exact Explore Courses Layout with Anime Poster Visuals) -->
    <section class="course-section" style="margin-top: 1.5rem; margin-bottom: 4rem;">
        <div class="course-card-grid" id="libGrid">

            <!-- 1. Notes: 3D Rigging Pipeline -->
            <div class="course-card lib-item-card" data-category="notes" data-title="3D Rigging and Pipeline Cheatsheet Maya Blender Study Notes">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-study-notes.jpg') }}" alt="3D Rigging &amp; Pipeline Cheatsheet" decoding="async">
                    <span class="card-category-badge">📚 Study Notes</span>
                    <span class="card-media-badge">.PDF</span>
                </div>
                <div class="course-card-title">3D Rigging &amp; Pipeline Cheatsheet</div>
                <div class="course-card-desc">
                    Comprehensive field notes on Maya biped joint hierarchy, IK/FK switch scripting, weight painting, Euler rotation orders, and animation controller setup.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/3d-rigging-notes.pdf') }}" download="3D_Rigging_Pipeline_Notes.pdf" class="btn-course-download" onclick="notifyDownload('3D Rigging & Pipeline Cheatsheet', '3d-rigging-notes.pdf')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download Free PDF</span>
                    </a>
                </div>
            </div>

            <!-- 2. Notes: 12 Principles of Animation -->
            <div class="course-card lib-item-card" data-category="notes" data-title="12 Principles of Animation Handbook Timing Curves Study Notes">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-study-notes.jpg') }}" alt="12 Principles of Animation Handbook" decoding="async">
                    <span class="card-category-badge">📚 Study Notes</span>
                    <span class="card-media-badge">.PDF</span>
                </div>
                <div class="course-card-title">12 Principles of Animation Handbook</div>
                <div class="course-card-desc">
                    Essential academic reference guide covering squash &amp; stretch formulas, anticipation arcs, staging, slow-in slow-out, and secondary action timing charts.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/12-principles-animation-guide.pdf') }}" download="12_Principles_Animation_Handbook.pdf" class="btn-course-download" onclick="notifyDownload('12 Principles of Animation Handbook', '12-principles-animation-guide.pdf')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download Free PDF</span>
                    </a>
                </div>
            </div>

            <!-- 3. 2D: Turnaround Character Sheets -->
            <div class="course-card lib-item-card" data-category="2d" data-title="8-Point Character Turnaround Kit 2D Animation Sheets Model">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-2d-animation.jpg') }}" alt="8-Point Character Turnaround Kit" loading="lazy" decoding="async">
                    <span class="card-category-badge">🎨 2D Animation</span>
                    <span class="card-media-badge">.PSD / .PNG</span>
                </div>
                <div class="course-card-title">8-Point Character Turnaround Kit</div>
                <div class="course-card-desc">
                    Production turnaround sheets with 8 angles (front, 3/4, profile, rear), proportion grids, eye height references, and layered facial viseme templates.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/character-turnaround-sheet-2d.zip') }}" download="2D_Character_Turnaround_Pack.zip" class="btn-course-download" onclick="notifyDownload('8-Point Character Turnaround Kit', 'character-turnaround-sheet-2d.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download 2D Assets</span>
                    </a>
                </div>
            </div>

            <!-- 4. 2D: Walk & Run Cycle Keyframes -->
            <div class="course-card lib-item-card" data-category="2d" data-title="Walk and Run Cycle Keyframe Library Animation Poses Frames">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-2d-animation.jpg') }}" alt="Walk &amp; Run Cycle Keyframe Library" loading="lazy" decoding="async">
                    <span class="card-category-badge">🎨 2D Animation</span>
                    <span class="card-media-badge">.ZIP / .PNG</span>
                </div>
                <div class="course-card-title">Walk &amp; Run Cycle Keyframe Library</div>
                <div class="course-card-desc">
                    Vector keyframe breakdowns for contact, recoil, passing, and high-point poses. Ready for immediate import into Toon Boom, Adobe Animate, or TVPaint.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/walk-run-cycles-keyframes.zip') }}" download="Walk_Run_Keyframes_Pack.zip" class="btn-course-download" onclick="notifyDownload('Walk & Run Keyframe Library', 'walk-run-cycles-keyframes.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download 2D Assets</span>
                    </a>
                </div>
            </div>

            <!-- 5. 3D: Animora Warrior Biped Rig -->
            <div class="course-card lib-item-card" data-category="3d" data-title="Animora Biped Warrior Character Rig Maya Blender FBX 3D">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-3d-models-rigs.jpg') }}" alt="Animora Biped Warrior Character Rig" loading="lazy" decoding="async">
                    <span class="card-category-badge">🧊 3D Models &amp; Rigs</span>
                    <span class="card-media-badge">.MA / .FBX</span>
                </div>
                <div class="course-card-title">Animora Biped Warrior Rig</div>
                <div class="course-card-desc">
                    Fully weighted production-ready biped character rig. Features FK/IK snapping, stretchy spine, foot rolls, clavicle controls, and facial blendshapes.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/animora-warrior-rig-3d.zip') }}" download="Animora_Warrior_Rig_v2.zip" class="btn-course-download" onclick="notifyDownload('Animora Biped Warrior Rig', 'animora-warrior-rig-3d.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download 3D Rig</span>
                    </a>
                </div>
            </div>

            <!-- 6. 3D: Modular Sci-Fi Corridor & Props Kit -->
            <div class="course-card lib-item-card" data-category="3d" data-title="Modular Sci-Fi Corridor Props Kit Blender FBX 3D Models">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-3d-models-rigs.jpg') }}" alt="Modular Sci-Fi Corridor &amp; Props Kit" loading="lazy" decoding="async">
                    <span class="card-category-badge">🧊 3D Models &amp; Rigs</span>
                    <span class="card-media-badge">.BLEND / .FBX</span>
                </div>
                <div class="course-card-title">Modular Sci-Fi Corridor Kit</div>
                <div class="course-card-desc">
                    Snap-to-grid architectural pieces including wall modules, bulkheads, consoles, crates, and conduits with 4K PBR baked texture maps.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/scifi-corridor-modular-kit-3d.zip') }}" download="SciFi_Corridor_Modular_Kit.zip" class="btn-course-download" onclick="notifyDownload('Modular Sci-Fi Corridor Kit', 'scifi-corridor-modular-kit-3d.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download 3D Models</span>
                    </a>
                </div>
            </div>

            <!-- 7. VFX: Volumetric Explosion & Smoke Cache -->
            <div class="course-card lib-item-card" data-category="vfx" data-title="Volumetric Explosion Smoke Cache OpenVDB VFX Dynamics Simulation">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-vfx-dynamics.jpg') }}" alt="Volumetric Explosion &amp; Smoke Cache" loading="lazy" decoding="async">
                    <span class="card-category-badge">💥 VFX Dynamics</span>
                    <span class="card-media-badge">.VDB</span>
                </div>
                <div class="course-card-title">Volumetric Explosion &amp; Smoke Cache</div>
                <div class="course-card-desc">
                    High-density volumetric simulation cache generated with Houdini Pyro. Optimized for Arnold, V-Ray, Octane, and Blender Cycles rendering.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/volumetric-explosion-vfx-cache.zip') }}" download="Volumetric_Explosion_VDB.zip" class="btn-course-download" onclick="notifyDownload('Volumetric Explosion VDB Cache', 'volumetric-explosion-vfx-cache.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download VFX Cache</span>
                    </a>
                </div>
            </div>

            <!-- 8. VFX: Sparks, Dust & Energy Alphas Pack -->
            <div class="course-card lib-item-card" data-category="vfx" data-title="Sparks Dust Energy Alphas Pack Nuke Niagra VFX Dynamics">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-vfx-dynamics.jpg') }}" alt="Sparks, Dust &amp; Energy Alphas Pack" loading="lazy" decoding="async">
                    <span class="card-category-badge">💥 VFX Dynamics</span>
                    <span class="card-media-badge">.PNG / .EXR</span>
                </div>
                <div class="course-card-title">Sparks, Dust &amp; Energy Alphas</div>
                <div class="course-card-desc">
                    100+ alpha mask textures formatted in 32-bit linear floating point. Perfect for Unreal Engine Niagara systems, Nuke, and After Effects compositing.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/sparks-dust-energy-alphas-vfx.zip') }}" download="VFX_Particle_Alphas_Pack.zip" class="btn-course-download" onclick="notifyDownload('Sparks & Dust Alphas Pack', 'sparks-dust-energy-alphas-vfx.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download VFX Alphas</span>
                    </a>
                </div>
            </div>

            <!-- 9. Game Art: Low-Poly Modular Dungeon Kit -->
            <div class="course-card lib-item-card" data-category="gameart" data-title="Low Poly Modular Dungeon Kit Game Art UE5 Unity Design">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-game-art.jpg') }}" alt="Low-Poly Modular Dungeon Kit" loading="lazy" decoding="async">
                    <span class="card-category-badge">🎮 Game Art</span>
                    <span class="card-media-badge">.FBX / .TGA</span>
                </div>
                <div class="course-card-title">Low-Poly Modular Dungeon Kit</div>
                <div class="course-card-desc">
                    Optimized modular kit designed for real-time engines. Features stone dungeon walls, archways, braziers, pillars, and props with collision meshes.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/modular-dungeon-game-kit.zip') }}" download="LowPoly_Dungeon_Kit.zip" class="btn-course-download" onclick="notifyDownload('Low-Poly Modular Dungeon Kit', 'modular-dungeon-game-kit.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download Game Assets</span>
                    </a>
                </div>
            </div>

            <!-- 10. Game Art: Stylized Handpainted Texture Atlases -->
            <div class="course-card lib-item-card" data-category="gameart" data-title="Stylized Handpainted Texture Atlases Game Design Art">
                <div class="course-card-img" style="position: relative;">
                    <img src="{{ asset('images/lib-game-art.jpg') }}" alt="Stylized Handpainted Texture Atlases" loading="lazy" decoding="async">
                    <span class="card-category-badge">🎮 Game Art</span>
                    <span class="card-media-badge">.PNG Atlases</span>
                </div>
                <div class="course-card-title">Stylized Handpainted Atlases</div>
                <div class="course-card-desc">
                    Seamless tileable texture sheets for fantasy RPG environments: stone cobblestone, wooden planks, clay roof tiles, and stylized grass with normal maps.
                </div>
                <div class="card-download-wrap">
                    <a href="{{ asset('downloads/student-library/stylized-texture-atlases-gameart.zip') }}" download="Stylized_Texture_Atlases.zip" class="btn-course-download" onclick="notifyDownload('Stylized Texture Atlases', 'stylized-texture-atlases-gameart.zip')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Download Textures</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- No Results Fallback -->
        <div id="noLibResults" class="lib-empty-box" style="display: none;">
            <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🔍</div>
            <h3 style="color: #ffffff; margin-bottom: 0.5rem;">No matching student assets found</h3>
            <p style="color: var(--text-muted); margin-bottom: 1rem;">Try searching for other terms like 'rig', 'vfx', 'maya', or click 'All Resources'.</p>
            <button type="button" class="btn-reset-filters" onclick="resetLibFilters()">Show All Resources</button>
        </div>
    </section>

</div>

<style>
/* Student Library Custom Styles Built Exactly on Courses Section System */
.student-library-page {
    width: 100%;
}

.student-lib-hero {
    width: 100%;
    background: radial-gradient(circle at 50% 20%, rgba(0, 112, 243, 0.12) 0%, rgba(5, 5, 7, 0) 70%);
    padding: 3rem 1.5rem 2rem;
    text-align: center;
}

.student-lib-header-inner {
    max-width: 900px;
    margin: 0 auto;
}


.student-lib-subtext {
    font-size: 1.05rem;
    color: var(--text-muted);
    line-height: 1.65;
    max-width: 760px;
    margin: 0 auto 1.8rem;
}

/* Search Bar */
.student-lib-search-wrap {
    max-width: 580px;
    margin: 0 auto 1.75rem;
    position: relative;
    display: flex;
    align-items: center;
}

.student-lib-search-wrap svg {
    position: absolute;
    left: 1.1rem;
    color: var(--text-muted);
    pointer-events: none;
}

.student-lib-search-wrap input {
    width: 100%;
    background: #111116;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 999px;
    padding: 0.85rem 1.2rem 0.85rem 2.85rem;
    color: #ffffff;
    font-size: 0.95rem;
    outline: none;
    transition: all 0.25s ease;
}

.student-lib-search-wrap input:focus {
    border-color: #0070f3;
    box-shadow: 0 0 16px rgba(0, 112, 243, 0.35);
}

/* Filter Tabs */
.student-lib-filter-tabs {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
}

.lib-tab-pill {
    background: #141419;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: var(--text-muted);
    padding: 0.5rem 1.1rem;
    border-radius: 999px;
    font-size: 0.86rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.lib-tab-pill:hover {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.25);
    background: #1c1c24;
}

.lib-tab-pill.active {
    background: #0070f3;
    color: #ffffff;
    border-color: #0070f3;
    box-shadow: 0 4px 14px rgba(0, 112, 243, 0.4);
}

/* Badges on Card Media */
.card-media-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0, 0, 0, 0.78);
    backdrop-filter: blur(4px);
    color: #00e5ff;
    font-size: 0.72rem;
    font-weight: 800;
    padding: 0.22rem 0.55rem;
    border-radius: 6px;
    border: 1px solid rgba(0, 229, 255, 0.3);
    letter-spacing: 0.04em;
    z-index: 2;
}

.card-category-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(0, 112, 243, 0.9);
    color: #ffffff;
    font-size: 0.68rem;
    font-weight: 700;
    padding: 0.22rem 0.55rem;
    border-radius: 6px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    z-index: 2;
}

/* Card Button & Action */
.card-download-wrap {
    margin-top: auto;
    padding-top: 1.25rem;
    width: 100%;
}

.btn-course-download {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    background: #0070f3;
    color: #ffffff;
    font-size: 0.88rem;
    font-weight: 700;
    padding: 0.75rem 1rem;
    border-radius: var(--radius-sm);
    text-decoration: none;
    transition: all 0.25s ease;
    border: 1px solid transparent;
}

.btn-course-download:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(0, 112, 243, 0.45);
    color: #ffffff;
}


/* Empty State */
.lib-empty-box {
    background: var(--bg-card);
    border-radius: var(--radius-md);
    padding: 3rem 1.5rem;
    text-align: center;
    margin: 2rem auto;
    max-width: 500px;
}

.btn-reset-filters {
    background: #0070f3;
    color: #ffffff;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 8px;
    font-size: 0.88rem;
    font-weight: 700;
    cursor: pointer;
}
</style>

<script>
    let activeCategory = 'all';

    function setCategory(cat, tabBtn) {
        activeCategory = cat;
        const tabs = document.querySelectorAll('.lib-tab-pill');
        tabs.forEach(t => t.classList.remove('active'));
        if (tabBtn) tabBtn.classList.add('active');

        handleLibFilter();
    }

    function handleLibFilter() {
        const query = document.getElementById('libSearchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('#libGrid .lib-item-card');
        let visible = 0;

        cards.forEach(card => {
            const cat = card.getAttribute('data-category');
            const title = (card.getAttribute('data-title') || '').toLowerCase();
            const text = card.innerText.toLowerCase();

            const matchCat = (activeCategory === 'all' || cat === activeCategory);
            const matchQuery = (query === '' || title.includes(query) || text.includes(query));

            if (matchCat && matchQuery) {
                card.style.display = 'flex';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        const empty = document.getElementById('noLibResults');
        if (visible === 0) {
            empty.style.display = 'block';
        } else {
            empty.style.display = 'none';
        }
    }

    function resetLibFilters() {
        document.getElementById('libSearchInput').value = '';
        const allBtn = document.querySelector('.lib-tab-pill');
        setCategory('all', allBtn);
    }

    function notifyDownload(title, filename) {
        // Download initiated
    }
</script>
@endsection
