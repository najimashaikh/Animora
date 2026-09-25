@extends('layouts.app')

@section('title', 'Student Library | Free Downloadable Notes, 2D, 3D, VFX & Game Art | Animora')

@section('content')
<div class="student-lib-page">
    <!-- Hero Banner -->
    <section class="student-lib-page-hero">
        <div class="student-lib-hero-container">
            <div class="open-access-pill">
                <span class="pill-dot"></span>
                <span>100% FREE &amp; OPEN ACCESS &bull; NO SIGN-IN REQUIRED</span>
            </div>
            <h1 class="student-lib-page-title">STUDENT ASSET &amp; STUDY LIBRARY</h1>
            <p class="student-lib-page-desc">
                Welcome to the open digital vault of CG Bugs. Download comprehensive course notes, production-ready biped character rigs, 2D turnaround model sheets, high-density VFX simulation caches, and game art modular kits completely free. Open to all students, artists, and creators worldwide.
            </p>

            <!-- Search & Filter Controls -->
            <div class="student-lib-controls">
                <div class="student-lib-search-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" id="libSearchInput" placeholder="Search notes, rigs, 2D sheets, VFX caches, FBX, VDB..." onkeyup="handleLibSearch()">
                </div>
            </div>

            <!-- Category Filter Tabs -->
            <div class="student-lib-page-tabs">
                <button class="lib-page-tab active" onclick="filterPageLib('all', this)">All Resources (<span id="count-all">10</span>)</button>
                <button class="lib-page-tab" onclick="filterPageLib('notes', this)">📚 Study Notes (<span id="count-notes">2</span>)</button>
                <button class="lib-page-tab" onclick="filterPageLib('2d', this)">🎨 2D Animation (<span id="count-2d">2</span>)</button>
                <button class="lib-page-tab" onclick="filterPageLib('3d', this)">🧊 3D Models &amp; Rigs (<span id="count-3d">2</span>)</button>
                <button class="lib-page-tab" onclick="filterPageLib('vfx', this)">💥 VFX Dynamics (<span id="count-vfx">2</span>)</button>
                <button class="lib-page-tab" onclick="filterPageLib('gameart', this)">🎮 Game Art &amp; Design (<span id="count-gameart">2</span>)</button>
            </div>
        </div>
    </section>

    <!-- Resources Vault Grid Section -->
    <section class="student-lib-vault-section">
        <div class="student-lib-vault-container">

            <!-- Download Status Notification Toast -->
            <div id="downloadToast" class="lib-download-toast" style="display: none;">
                <div class="toast-icon">🚀</div>
                <div class="toast-content">
                    <strong id="toastTitle">Download Started!</strong>
                    <span id="toastDesc">Free open-access download initiated without any eligibility criteria.</span>
                </div>
                <button class="toast-close" onclick="closeToast()">&times;</button>
            </div>

            <!-- Cards Grid -->
            <div class="student-lib-cards-grid" id="libCardsGrid">

                <!-- 1. Notes: Maya & 3D Rigging -->
                <div class="lib-resource-card" data-category="notes" data-title="3D Rigging Pipeline Cheatsheet Maya Blender">
                    <div class="card-badge-row">
                        <span class="category-tag tag-notes">📚 STUDY NOTES</span>
                        <span class="format-tag">.PDF</span>
                    </div>
                    <div class="card-icon-banner">📚</div>
                    <h3 class="card-resource-title">3D Rigging &amp; Pipeline Cheatsheet</h3>
                    <p class="card-resource-desc">Comprehensive field notes on Maya biped joint hierarchy, IK/FK switch scripting, weight painting, Euler rotation orders, and animation controller setup.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">4.8 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Audience:</span> <span class="spec-val">3D Animators / Riggers</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('3D_Rigging_Pipeline_Notes.pdf', '3D Rigging Cheatsheet')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download Free PDF</span>
                    </button>
                </div>

                <!-- 2. Notes: 12 Principles of Animation -->
                <div class="lib-resource-card" data-category="notes" data-title="12 Principles of Animation Handbook Timing Curves">
                    <div class="card-badge-row">
                        <span class="category-tag tag-notes">📚 STUDY NOTES</span>
                        <span class="format-tag">.PDF</span>
                    </div>
                    <div class="card-icon-banner">📖</div>
                    <h3 class="card-resource-title">12 Principles of Animation Handbook</h3>
                    <p class="card-resource-desc">Essential academic reference guide covering squash &amp; stretch formulas, anticipation arcs, staging, slow-in slow-out, and secondary action timing charts.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">8.2 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Audience:</span> <span class="spec-val">2D &amp; 3D Students</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('12_Principles_Animation_Handbook.pdf', '12 Principles Handbook')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download Free PDF</span>
                    </button>
                </div>

                <!-- 3. 2D: Turnaround Character Sheets -->
                <div class="lib-resource-card" data-category="2d" data-title="8 Point Character Turnaround Kit 2D Animation Sheets">
                    <div class="card-badge-row">
                        <span class="category-tag tag-2d">🎨 2D ANIMATION</span>
                        <span class="format-tag">.PSD / .PNG</span>
                    </div>
                    <div class="card-icon-banner">🎨</div>
                    <h3 class="card-resource-title">8-Point Character Turnaround Kit</h3>
                    <p class="card-resource-desc">Production turnaround sheets with 8 angles (front, 3/4, profile, rear), proportion grids, eye height references, and layered facial viseme templates.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">22.5 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Layers:</span> <span class="spec-val">16 PSD Layers</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('2D_Character_Turnaround_Pack.zip', '2D Character Turnaround Pack')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download 2D Assets</span>
                    </button>
                </div>

                <!-- 4. 2D: Walk & Run Cycle Keyframes -->
                <div class="lib-resource-card" data-category="2d" data-title="Walk Run Cycle Keyframe Library Animation Poses">
                    <div class="card-badge-row">
                        <span class="category-tag tag-2d">🎨 2D ANIMATION</span>
                        <span class="format-tag">.ZIP / PNG</span>
                    </div>
                    <div class="card-icon-banner">🏃</div>
                    <h3 class="card-resource-title">Walk &amp; Run Cycle Keyframe Library</h3>
                    <p class="card-resource-desc">Vector keyframe breakdowns for contact, recoil, passing, and high-point poses. Ready for immediate import into Toon Boom, Adobe Animate, or TVPaint.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">14.1 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Frames:</span> <span class="spec-val">48 Keyframes</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('Walk_Run_Keyframes_Pack.zip', 'Walk & Run Keyframe Library')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download 2D Assets</span>
                    </button>
                </div>

                <!-- 5. 3D: Animora Warrior Biped Rig -->
                <div class="lib-resource-card" data-category="3d" data-title="Animora Biped Warrior Character Rig Maya Blender FBX">
                    <div class="card-badge-row">
                        <span class="category-tag tag-3d">🧊 3D MODELS &amp; RIGS</span>
                        <span class="format-tag">.MA / .FBX</span>
                    </div>
                    <div class="card-icon-banner">🤖</div>
                    <h3 class="card-resource-title">Animora Biped Warrior Character Rig</h3>
                    <p class="card-resource-desc">Fully weighted production-ready biped character rig. Features FK/IK snapping, stretchy spine, foot rolls, clavicle controls, and facial blendshapes.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">38.6 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Topology:</span> <span class="spec-val">28,450 Quads</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('Animora_Warrior_Rig_v2.zip', 'Animora Warrior 3D Rig')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download 3D Rig</span>
                    </button>
                </div>

                <!-- 6. 3D: Modular Sci-Fi Kit -->
                <div class="lib-resource-card" data-category="3d" data-title="Modular Sci-Fi Corridor Props Kit Blender FBX 3D">
                    <div class="card-badge-row">
                        <span class="category-tag tag-3d">🧊 3D MODELS &amp; RIGS</span>
                        <span class="format-tag">.BLEND / .FBX</span>
                    </div>
                    <div class="card-icon-banner">🚀</div>
                    <h3 class="card-resource-title">Modular Sci-Fi Corridor &amp; Props Kit</h3>
                    <p class="card-resource-desc">Snap-to-grid architectural pieces including wall modules, bulkheads, consoles, crates, and conduits with 4K PBR baked texture maps.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">64.2 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Meshes:</span> <span class="spec-val">42 Modular Pieces</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('SciFi_Corridor_Modular_Kit.zip', 'Sci-Fi Modular 3D Kit')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download 3D Models</span>
                    </button>
                </div>

                <!-- 7. VFX: OpenVDB Volumetric Fire & Smoke -->
                <div class="lib-resource-card" data-category="vfx" data-title="Volumetric Explosion Smoke Cache OpenVDB VFX Dynamics">
                    <div class="card-badge-row">
                        <span class="category-tag tag-vfx">💥 VFX DYNAMICS</span>
                        <span class="format-tag">.VDB</span>
                    </div>
                    <div class="card-icon-banner">💥</div>
                    <h3 class="card-resource-title">Volumetric Explosion &amp; Smoke Cache</h3>
                    <p class="card-resource-desc">High-density volumetric simulation cache generated with Houdini Pyro. Optimized for Arnold, V-Ray, Octane, and Blender Cycles rendering.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">112 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Frames:</span> <span class="spec-val">120 VDB Sequence</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('Volumetric_Explosion_VDB.zip', 'Volumetric Explosion VDB')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download VFX Cache</span>
                    </button>
                </div>

                <!-- 8. VFX: Particle Alphas Pack -->
                <div class="lib-resource-card" data-category="vfx" data-title="Sparks Dust Energy Alphas Pack Nuke Niagra VFX">
                    <div class="card-badge-row">
                        <span class="category-tag tag-vfx">💥 VFX DYNAMICS</span>
                        <span class="format-tag">.PNG / .EXR</span>
                    </div>
                    <div class="card-icon-banner">⚡</div>
                    <h3 class="card-resource-title">Sparks, Dust &amp; Energy Alphas Pack</h3>
                    <p class="card-resource-desc">100+ alpha mask textures formatted in 32-bit linear floating point. Perfect for Unreal Engine Niagara systems, Nuke, and After Effects compositing.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">31.0 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Resolution:</span> <span class="spec-val">2048 x 2048 HD</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('VFX_Particle_Alphas_Pack.zip', 'VFX Particle Alphas Pack')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download VFX Alphas</span>
                    </button>
                </div>

                <!-- 9. Game Art: Low-Poly Dungeon Kit -->
                <div class="lib-resource-card" data-category="gameart" data-title="Low Poly Modular Dungeon Kit Game Art UE5 Unity">
                    <div class="card-badge-row">
                        <span class="category-tag tag-game">🎮 GAME ART</span>
                        <span class="format-tag">.FBX / .TGA</span>
                    </div>
                    <div class="card-icon-banner">🎮</div>
                    <h3 class="card-resource-title">Low-Poly Modular Dungeon Kit</h3>
                    <p class="card-resource-desc">Optimized modular kit designed for real-time engines. Features stone dungeon walls, archways, braziers, pillars, and props with collision meshes.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">45.3 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Engine:</span> <span class="spec-val">Unreal Engine 5 &amp; Unity</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('LowPoly_Dungeon_Kit.zip', 'Low-Poly Modular Dungeon Kit')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download Game Assets</span>
                    </button>
                </div>

                <!-- 10. Game Art: Stylized Texture Atlases -->
                <div class="lib-resource-card" data-category="gameart" data-title="Stylized Handpainted Texture Atlases Game Design">
                    <div class="card-badge-row">
                        <span class="category-tag tag-game">🎮 GAME ART</span>
                        <span class="format-tag">.PNG Atlases</span>
                    </div>
                    <div class="card-icon-banner">🏰</div>
                    <h3 class="card-resource-title">Stylized Handpainted Texture Atlases</h3>
                    <p class="card-resource-desc">Seamless tileable texture sheets for fantasy RPG environments: stone cobblestone, wooden planks, clay roof tiles, and stylized grass with normal maps.</p>
                    <div class="card-specs-list">
                        <div class="spec-item"><span class="spec-label">File Size:</span> <span class="spec-val">28.7 MB</span></div>
                        <div class="spec-item"><span class="spec-label">Format:</span> <span class="spec-val">Seamless 4K PNG</span></div>
                        <div class="spec-item"><span class="spec-label">Access:</span> <span class="spec-val free-badge">Free for All</span></div>
                    </div>
                    <button type="button" class="btn-direct-download" onclick="startDirectDownload('Stylized_Texture_Atlases.zip', 'Stylized Texture Atlases')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        <span>Download Texture Atlases</span>
                    </button>
                </div>

            </div>

            <!-- Empty Search Results Placeholder -->
            <div id="noResultsState" class="lib-empty-state" style="display: none;">
                <div class="empty-icon">🔍</div>
                <h3>No Matching Resources Found</h3>
                <p>Try searching for different keywords such as "rig", "notes", "vfx", "maya", or click "All Resources".</p>
                <button type="button" class="btn-reset-filters" onclick="resetFilters()">Reset All Filters</button>
            </div>

        </div>
    </section>
</div>

<script>
    let currentCategory = 'all';

    function filterPageLib(cat, tabBtn) {
        currentCategory = cat;
        const tabs = document.querySelectorAll('.lib-page-tab');
        tabs.forEach(t => t.classList.remove('active'));
        if (tabBtn) tabBtn.classList.add('active');

        applyFilters();
    }

    function handleLibSearch() {
        applyFilters();
    }

    function applyFilters() {
        const query = document.getElementById('libSearchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.student-lib-cards-grid .lib-resource-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            const cardTitle = card.getAttribute('data-title').toLowerCase();
            const textContent = card.innerText.toLowerCase();

            const matchCat = (currentCategory === 'all' || cardCat === currentCategory);
            const matchQuery = (query === '' || cardTitle.includes(query) || textContent.includes(query));

            if (matchCat && matchQuery) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        const noRes = document.getElementById('noResultsState');
        if (visibleCount === 0) {
            noRes.style.display = 'block';
        } else {
            noRes.style.display = 'none';
        }
    }

    function resetFilters() {
        document.getElementById('libSearchInput').value = '';
        const allTab = document.querySelector('.lib-page-tab');
        filterPageLib('all', allTab);
    }

    function startDirectDownload(fileName, resourceTitle) {
        const toast = document.getElementById('downloadToast');
        const toastTitle = document.getElementById('toastTitle');
        const toastDesc = document.getElementById('toastDesc');

        toastTitle.textContent = 'Downloading: ' + resourceTitle;
        toastDesc.textContent = 'Package file (' + fileName + ') is downloading immediately. Free for all students with zero eligibility barriers!';
        
        toast.style.display = 'flex';
        toast.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

        // Auto hide toast after 6 seconds
        setTimeout(() => {
            closeToast();
        }, 6000);
    }

    function closeToast() {
        const toast = document.getElementById('downloadToast');
        if (toast) toast.style.display = 'none';
    }
</script>
@endsection
