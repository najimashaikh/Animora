@extends('layouts.app')

@section('title', 'Student Work - 3D Animation, Graphic & Character Design | Animora CG Bugs')

@section('content')
<div class="sw-page-wrapper">

    <!-- Hero Banner Section -->
    <section class="sw-hero-banner">
        <div class="sw-hero-overlay"></div>
        <div class="sw-hero-content">
            <div class="sw-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sw-breadcrumb-sep">/</span>
                <span class="sw-breadcrumb-current">Student Work</span>
            </div>
            <h1 class="sw-hero-title">STUDENT WORK</h1>
            <div class="sw-hero-action">
                <a href="https://wa.me/7737707710" target="_blank" rel="noopener noreferrer" class="sw-btn-advisor">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2z"/>
                    </svg>
                    <span>Connect With An Advisor</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Overview & Quick Links Section -->
    <section class="sw-overview-section">
        <div class="sw-overview-container">
            <!-- Left: Overview Text -->
            <div class="sw-overview-left">
                <div class="sw-section-badge">OVERVIEW</div>
                <h2 class="sw-overview-heading">Cultivating World-Class Technical &amp; Artistic Excellence</h2>
                <p class="sw-overview-desc">
                    <strong>Animora &amp; CG BUGS</strong> take immense pride in showcasing the outstanding work created by students during their studies. The galleries feature a diverse array of projects, emphasizing the technical skills, creative storytelling, and industry-grade standards cultivated through our full-time programs and specialized courses.
                </p>
            </div>

            <!-- Right: Quick Links Card -->
            <div class="sw-overview-right">
                <div class="sw-quicklinks-box">
                    <h3 class="sw-quicklinks-title">QUICK LINKS</h3>
                    <ul class="sw-quicklinks-list">
                        <li>
                            <a href="{{ route('home') }}#courses">
                                <span class="sw-ql-arrow">&rarr;</span>
                                <span>All Courses &amp; Programs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#contact">
                                <span class="sw-ql-arrow">&rarr;</span>
                                <span>Tuition &amp; Admission Enquiry</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#contact">
                                <span class="sw-ql-arrow">&rarr;</span>
                                <span>How to Apply &amp; Portfolio Review</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#about">
                                <span class="sw-ql-arrow">&rarr;</span>
                                <span>Meet Mentors &amp; Faculty</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: School Reels (Showreels & 3D Walkthrough) -->
    <section class="sw-reels-section">
        <div class="sw-container">
            <div class="sw-section-header">
                <div class="sw-header-pill">
                    <span class="sw-dot"></span>
                    <span>SCHOOL REELS</span>
                </div>
                <h2 class="sw-section-title">FEATURED PRODUCTION REELS</h2>
                <p class="sw-section-subtitle">Watch cinematic showreels, dynamic lighting breakdowns, and 3D architectural environments created by our animation students.</p>
            </div>

            <!-- Reels Category Filters -->
            <div class="sw-filter-bar reels-filter-bar">
                <button class="sw-filter-btn active" data-reel-filter="all">All</button>
                <button class="sw-filter-btn" data-reel-filter="3d-animation">3D ANIMATION</button>
                <button class="sw-filter-btn" data-reel-filter="video-editing">VIDEO EDITING</button>
                <button class="sw-filter-btn" data-reel-filter="compositing">COMPOSITING</button>
            </div>

            <!-- Reels Grid -->
            <div class="sw-reels-grid">
                @foreach($reels as $reel)
                <div class="sw-reel-card" data-category="{{ $reel['category_slug'] }}">
                    <div class="sw-reel-video-wrapper">
                        <img src="{{ $reel['thumbnail'] }}" alt="{{ $reel['title'] }}" class="sw-reel-thumb" loading="lazy" decoding="async" onerror="this.src='{{ $reel['fallback_thumbnail'] }}'">
                        <div class="sw-reel-overlay" onclick="openVideoModal('{{ $reel['video_url'] }}', '{{ addslashes($reel['title']) }}')">
                            <div class="sw-play-btn">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                            </div>
                            <span class="sw-play-label">Watch Showcase Reel</span>
                        </div>
                        <span class="sw-reel-badge">{{ $reel['category'] }}</span>
                    </div>
                    <div class="sw-reel-info">
                        <h3 class="sw-reel-title">{{ $reel['title'] }}</h3>
                        <p class="sw-reel-desc">{{ $reel['description'] }}</p>
                        <div class="sw-reel-footer">
                            <span class="sw-reel-author">By {{ $reel['author'] }}</span>
                            <a href="{{ $reel['youtube_link'] }}" target="_blank" rel="noopener noreferrer" class="sw-reel-external-link">
                                <span>Open YouTube</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 2: Student Work Masonry Gallery -->
    <section class="sw-gallery-section" id="gallery">
        <div class="sw-container">
            <div class="sw-section-header">
                <div class="sw-header-pill">
                    <span class="sw-dot"></span>
                    <span>STUDENT WORK</span>
                </div>
                <h2 class="sw-section-title">CREATIVE DESIGN &amp; ART GALLERY</h2>
                <p class="sw-section-subtitle">Click on any project to explore high-resolution artwork, concept character designs, and digital graphics.</p>
            </div>

            <!-- Gallery Filter Controls -->
            <div class="sw-filter-bar gallery-filter-bar">
                <button class="sw-filter-btn active" data-filter="all">All</button>
                <button class="sw-filter-btn" data-filter="graphic-design">Graphic Design</button>
                <button class="sw-filter-btn" data-filter="character-design">Character Design</button>
            </div>

            <!-- Gallery Grid -->
            <div class="sw-gallery-grid" id="swGalleryGrid">
                @foreach($studentWorks as $work)
                <div class="sw-art-card" data-category="{{ $work['category'] }}">
                    <div class="sw-art-inner" onclick="openLightbox('{{ $work['image'] }}', '{{ $work['fallback_image'] }}', '{{ addslashes($work['title']) }}', '{{ addslashes($work['student']) }}', '{{ $work['category_label'] }}', '{{ addslashes($work['description']) }}')">
                        <div class="sw-art-img-wrap">
                            <img src="{{ $work['image'] }}" alt="{{ $work['title'] }}" class="sw-art-img" loading="lazy" onerror="this.src='{{ $work['fallback_image'] }}'">
                            <div class="sw-art-hover">
                                <div class="sw-zoom-icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        <line x1="11" y1="8" x2="11" y2="14"></line>
                                        <line x1="8" y1="11" x2="14" y2="11"></line>
                                    </svg>
                                </div>
                                <span class="sw-hover-cat">{{ $work['category_label'] }}</span>
                                <h4 class="sw-hover-title">{{ $work['title'] }}</h4>
                                <span class="sw-hover-student">{{ $work['student'] }}</span>
                            </div>
                        </div>
                        <div class="sw-art-meta">
                            <span class="sw-meta-tag">{{ $work['category_label'] }}</span>
                            <h4 class="sw-meta-title">{{ $work['title'] }}</h4>
                            <p class="sw-meta-author">{{ $work['student'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

<!-- Lightbox Modal for Artworks -->
<div id="swLightbox" class="sw-modal" onclick="closeLightbox(event)">
    <div class="sw-modal-box" onclick="event.stopPropagation()">
        <button class="sw-modal-close" onclick="closeLightbox(event)" aria-label="Close Preview">&times;</button>
        <div class="sw-modal-content">
            <div class="sw-modal-media">
                <img id="swModalImg" src="" alt="Student Artwork Preview" class="sw-modal-image">
            </div>
            <div class="sw-modal-details">
                <span id="swModalCategory" class="sw-modal-badge">Category</span>
                <h3 id="swModalTitle" class="sw-modal-title">Artwork Title</h3>
                <div class="sw-modal-by">
                    <span class="sw-by-label">Student Artist:</span>
                    <strong id="swModalArtist" class="sw-by-name">Artist Name</strong>
                </div>
                <p id="swModalDesc" class="sw-modal-text">Description goes here.</p>
                <div class="sw-modal-footer">
                    <a href="https://wa.me/7737707710" target="_blank" rel="noopener noreferrer" class="sw-modal-btn">
                        <span>Enquire About Courses</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal for Showreels -->
<div id="swVideoModal" class="sw-modal" onclick="closeVideoModal(event)">
    <div class="sw-video-modal-box" onclick="event.stopPropagation()">
        <button class="sw-modal-close" onclick="closeVideoModal(event)" aria-label="Close Video">&times;</button>
        <div class="sw-video-responsive">
            <iframe id="swVideoIframe" src="" title="Student Showcase Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="sw-video-modal-caption">
            <h4 id="swVideoTitle">Showcase Video</h4>
        </div>
    </div>
</div>

<!-- JavaScript for Filtering and Modals -->
<script>
    // Gallery Filtering
    document.querySelectorAll('.gallery-filter-bar .sw-filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.gallery-filter-bar .sw-filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const filter = this.getAttribute('data-filter');
            const cards = document.querySelectorAll('.sw-art-card');
            cards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                }
            });
        });
    });

    // Reels Filtering
    document.querySelectorAll('.reels-filter-bar .sw-filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.reels-filter-bar .sw-filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const filter = this.getAttribute('data-reel-filter');
            const cards = document.querySelectorAll('.sw-reel-card');
            cards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Lightbox Controls
    function openLightbox(imgUrl, fallbackUrl, title, artist, category, desc) {
        const modal = document.getElementById('swLightbox');
        const modalImg = document.getElementById('swModalImg');
        modalImg.src = imgUrl;
        modalImg.onerror = function() { this.src = fallbackUrl; };
        document.getElementById('swModalTitle').textContent = title;
        document.getElementById('swModalArtist').textContent = artist;
        document.getElementById('swModalCategory').textContent = category;
        document.getElementById('swModalDesc').textContent = desc;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox(e) {
        const modal = document.getElementById('swLightbox');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Video Modal Controls
    function openVideoModal(videoUrl, title) {
        const modal = document.getElementById('swVideoModal');
        const iframe = document.getElementById('swVideoIframe');
        iframe.src = videoUrl + '?autoplay=1&rel=0';
        document.getElementById('swVideoTitle').textContent = title;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeVideoModal(e) {
        const modal = document.getElementById('swVideoModal');
        const iframe = document.getElementById('swVideoIframe');
        iframe.src = '';
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // ESC key close
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
            closeVideoModal();
        }
    });
</script>
@endsection
