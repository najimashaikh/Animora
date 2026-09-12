@extends('layouts.app')

@section('title', 'Animora | Explore Courses')

@section('content')

<!-- Full Width Static Hero Section (Animora Comic Art Banner - No Text) -->
<section class="hero-static-section hero-fullwidth">
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/animora-hero-full.png') }}" alt="Animora Animation Assets" class="hero-static-img">
    </div>
</section>

<!-- Exact Doraemon Blue Box Matching Sketch -->
<section class="doraemon-sketch-section">
    <div class="doraemon-sketch-box">
        <!-- Left: Doraemon GIF (The Circle in sketch) -->
        <div class="doraemon-sketch-left">
            <img src="{{ asset('ChatGPT%20Image%20Sep%2011,%202026,%2009_08_52%20PM.png') }}" alt="Doraemon" class="doraemon-sketch-img">
        </div>

        <!-- Right: Explore Courses text in sketch -->
        <div class="doraemon-sketch-right">
            <a href="#courses" class="doraemon-sketch-text">EXPLORE COURSES</a>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="course-section" id="courses">

    <h2 class="animora-branding">OUR COURSES</h2>
    <div class="course-card-grid">
        @foreach($courses as $course)
        <div class="course-card">
            <div class="course-card-img">
                <img src="{{ isset($course->image) ? $course->image : (str_starts_with($course->image_url, 'http') ? $course->image_url : asset($course->image_url)) }}" alt="{{ $course->name }}">
            </div>
            <div class="course-card-title">{{ $course->name }}</div>
            <div class="course-card-desc">{{ $course->short_description }}</div>
        </div>
        @endforeach
    </div>
</section>

<!-- Mentors & Staff Section -->
<section class="mentors-section" id="about">
    <div class="mentors-container">
        <h2 class="animora-branding mentors-heading">OUR MENTORS &amp; STAFF</h2>
        
        <!-- Top: Principal Featured -->
        <div class="principal-spotlight">
            <div class="mentor-avatar-wrap">
                <img src="{{ asset('images/principal-dr-gaikwad.jpg') }}" alt="Prof. (Dr.) Gaikwad Arun Hari" class="mentor-avatar-img principal-avatar">
                <span class="mentor-comic-tag">HEAD &amp; PRINCIPAL</span>
            </div>
            <div class="mentor-speech-content">
                <div class="mentor-speech-header">
                    <h3 class="mentor-comic-name">Prof. (Dr.) Gaikwad Arun Hari</h3>
                    <span class="mentor-comic-role">Principal &amp; Head of Animora</span>
                </div>
                <div class="comic-speech-bubble speech-left">
                    <p>“Fostering creativity, innovation, and industry-grade excellence in animation and digital media arts. At Animora, our mission is to empower the next generation of visual storytellers, 3D artists, and pipeline directors!”</p>
                </div>
            </div>
        </div>

        <!-- Line of 3 Teachers Below Principal -->
        <div class="teachers-line-grid">
            <!-- Teacher 1: Mr. Kawade Sitaram Namdev -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/mentor-kawade-sitaram.jpg') }}" alt="Mr. Kawade Sitaram Namdev" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">ASSISTANT PROFESSOR</span>
                </div>
                <h4 class="teacher-name">Mr. Kawade Sitaram Namdev</h4>
                <div class="teacher-role">Assistant Professor</div>
                <p class="teacher-desc">3D Animation, Rigging &amp; Pipeline Workflows</p>
            </div>

            <!-- Teacher 2: Ms. Gite Dipa Prabhakar -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/mentor-gite-dipa.jpg') }}" alt="Ms. Gite Dipa Prabhakar" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">ASSISTANT PROFESSOR</span>
                </div>
                <h4 class="teacher-name">Ms. Gite Dipa Prabhakar</h4>
                <div class="teacher-role">Assistant Professor</div>
                <p class="teacher-desc">Digital Media, Visual Arts &amp; Creative Foundations</p>
            </div>

            <!-- Teacher 3: Ms. Pawase Harshal Shivaji -->
            <div class="teacher-cartoon-card">
                <div class="teacher-avatar-wrap">
                    <img src="{{ asset('images/mentor-pawase-harshal.jpg') }}" alt="Ms. Pawase Harshal Shivaji" class="teacher-avatar-img">
                    <span class="teacher-comic-tag">ASSISTANT PROFESSOR</span>
                </div>
                <h4 class="teacher-name">Ms. Pawase Harshal Shivaji</h4>
                <div class="teacher-role">Assistant Professor</div>
                <p class="teacher-desc">Computer Graphics, VFX &amp; Creative Technologies</p>
            </div>
        </div>

    </div>
</section>

<!-- Contact Us Section with Static Blue Box & Theme Touch -->
<section class="contact-section" id="contact">
    <div class="contact-container">
        
        <!-- Pura Static Blue Box (With Animora Theme Touch) -->
        <div class="contact-static-blue-box">
            
            <!-- Top Mascot & Header Banner inside the Blue Box -->
            <div class="contact-blue-header">
                <div class="contact-robot-mascot-wrap">
                    <img src="{{ asset('images/contact-robot.png') }}" alt="Contact Us Robot Mascot" class="contact-robot-img">
                </div>
                <div class="contact-header-content">
                    <div class="contact-comic-tag">ANIMORA CAMPUS HELPDESK</div>
                    <h2 class="contact-comic-title">CONTACT US</h2>
                    <p class="contact-comic-desc">Have questions about our 2D, 3D &amp; VFX programs, student rigs, or campus admissions? Send us a message directly!</p>
                </div>
            </div>

            <!-- Form & Location Grid inside the Blue Box -->
            <div class="contact-blue-grid">
                
                <!-- Left: Contact Form inside Blue Box -->
                <div class="contact-blue-form-panel">
                    <!-- Inline Result Alert (For errors/info) -->
                    <div id="formResult" class="form-result-alert" style="display: none;"></div>

                    <!-- Inline Thank You Card (Shown on success, NO redirect, NO green) -->
                    <div id="thankYouCard" class="thank-you-card cartoon-thank-you" style="display: none;">
                        <div class="thank-you-avatar">
                            <span class="thank-you-emoji">✨</span>
                        </div>
                        <h3 class="thank-you-title">THANK YOU!</h3>
                        <p class="thank-you-text">Your inquiry has been successfully received. Our campus team at S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College will connect with you shortly.</p>
                        
                        <div class="thank-you-details">
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Status</span>
                                <span class="thank-detail-val">Received &amp; Logged</span>
                            </div>
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Destination</span>
                                <span class="thank-detail-val">najimashaikh267@gmail.com</span>
                            </div>
                            <div class="thank-detail-item">
                                <span class="thank-detail-label">Campus Phone</span>
                                <span class="thank-detail-val">(02425) 223181 / 222869</span>
                            </div>
                        </div>

                        <button type="button" class="btn-reset-form" onclick="showFormAgain()">
                            SEND ANOTHER MESSAGE
                        </button>
                    </div>

                    <!-- Form Element (Strictly prevented from redirecting) -->
                    <form id="web3ContactForm" action="javascript:void(0);" onsubmit="handleContactSubmit(event)" method="POST" class="web3-contact-form">
                        <!-- Web3Forms Access Key -->
                        <input type="hidden" name="access_key" value="82d62467-fdbb-4b4c-852d-f44e8be9bc5d">
                        <input type="hidden" name="subject" value="New Inquiry - Animora Student Portal">
                        <input type="hidden" name="from_name" value="Animora Campus Portal">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactName">YOUR FULL NAME *</label>
                                <input type="text" id="contactName" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="contactEmail">EMAIL ADDRESS *</label>
                                <input type="email" id="contactEmail" name="email" placeholder="name@example.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactPhone">PHONE NUMBER</label>
                                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210">
                            </div>
                            <div class="form-group custom-select-group">
                                <label for="contactCourse">INTERESTED PROGRAM</label>
                                <div class="custom-dropdown-wrap" id="customCourseDropdown">
                                    <input type="hidden" name="course_interest" id="contactCourse" value="{{ $courses->first()->name ?? 'Professional Program' }}">
                                    <button type="button" class="custom-dropdown-trigger" id="courseDropdownBtn" aria-haspopup="listbox" aria-expanded="false">
                                        <span class="dropdown-selected-text" id="selectedCourseText">{{ $courses->first()->name ?? 'Select a Program' }}</span>
                                        <svg class="dropdown-arrow-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                    <div class="custom-dropdown-menu" id="courseDropdownMenu" role="listbox">
                                        @foreach($courses as $course)
                                        <div class="custom-dropdown-item {{ $loop->first ? 'active' : '' }}" data-value="{{ $course->name }}" role="option">
                                            <span class="dropdown-item-title">{{ $course->name }}</span>
                                        </div>
                                        @endforeach
                                        <div class="custom-dropdown-item" data-value="General Campus Inquiry" role="option">
                                            <span class="dropdown-item-title">General Campus Inquiry</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactMessage">YOUR MESSAGE *</label>
                            <textarea id="contactMessage" name="message" rows="4" placeholder="Tell us about your learning goals or questions..." required></textarea>
                        </div>

                        <button type="submit" id="contactSubmitBtn" class="btn-contact-submit cartoon-btn-submit">
                            <span>SEND MESSAGE</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </form>
                </div>

                <!-- Right: Location & Campus Details inside Blue Box -->
                <div class="contact-blue-location-panel">
                    
                    <!-- College / Campus Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">🏛️</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">COLLEGE / CAMPUS</h5>
                            <p class="blue-info-text"><strong>S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College</strong></p>
                        </div>
                    </div>

                    <!-- Campus Location / Address Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">📍</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">CAMPUS LOCATION</h5>
                            <p class="blue-info-text">Ghulewadi, Pune Nashik Highway (NH – 50), Sangamner, District Ahmednagar 422 605, Maharashtra – India</p>
                        </div>
                    </div>

                    <!-- Call Us Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">📞</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">CALL US ON</h5>
                            <p class="blue-info-text">
                                <a href="tel:02425223181">(02425) 223181</a><br>
                                <a href="tel:02425222869">(02425) 222869</a>
                            </p>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="blue-info-card">
                        <div class="blue-info-icon">✉️</div>
                        <div class="blue-info-content">
                            <h5 class="blue-info-title">DIRECT EMAIL</h5>
                            <p class="blue-info-text"><a href="mailto:najimashaikh267@gmail.com">najimashaikh267@gmail.com</a></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- Homepage College Project Attribution Banner -->
<section class="college-project-home-banner">
    <div class="college-home-box">
        <div class="college-home-left">
            <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer" class="college-home-logo-wrap" title="S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College">
                <img src="{{ asset('images/college-logo.png') }}" alt="Sangamner College Logo" class="college-home-logo">
            </a>
        </div>
        <div class="college-home-center">
            <div class="college-home-tag">FINAL YEAR COLLEGE PROJECT</div>
            <h3 class="college-home-title">
                <a href="https://sangamnercollege.edu.in/" target="_blank" rel="noopener noreferrer">
                    S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College (Autonomous), Sangamner
                </a>
            </h3>
            <p class="college-home-desc">
                Created by <strong>6 Students:</strong> Najima Shaikh, Vaishnavi Galande, Payal Satpute, Swamini Bhaskar, Shreya Abhang, Shruti Kadlag | Guided by <strong>Prof. Sitaram Kawade, Prof. Dipa Gite &amp; Prof. Harshal Pawase</strong>.
            </p>
        </div>
        <div class="college-home-right">
            <a href="{{ route('about') }}" class="btn-college-home-about">
                <span>About Our Project &amp; Team</span> &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Web3Forms AJAX Client-Side Handler (Stays on website, no redirect, shows Thank You) -->
<script>
    async function handleContactSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('web3ContactForm');
        const result = document.getElementById('formResult');
        const submitBtn = document.getElementById('contactSubmitBtn');
        const thankYouCard = document.getElementById('thankYouCard');

        if (!form) return;

        submitBtn.disabled = true;
        const originalBtnHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Sending Message...</span>';
        result.style.display = 'none';

        const formData = new FormData(form);
        const object = Object.fromEntries(formData);
        const json = JSON.stringify(object);

        const metaCsrf = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = metaCsrf ? metaCsrf.getAttribute('content') : '';

        try {
            const response = await fetch("{{ route('contact.submit') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: json
            });
            const resJson = await response.json();

            if (response.ok && (response.status === 200 || resJson.success)) {
                // Show inline Thank You card, hide form - NO REDIRECT
                form.style.display = 'none';
                if (thankYouCard) {
                    thankYouCard.style.display = 'flex';
                    thankYouCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                form.reset();
            } else {
                result.className = 'form-result-alert form-error';
                result.innerHTML = resJson.message || 'Submission error. Please try again.';
                result.style.display = 'block';
            }
        } catch (error) {
            result.className = 'form-result-alert form-error';
            result.innerHTML = 'Network error. Please try again or call us directly at (02425) 223181.';
            result.style.display = 'block';
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;
        }
    }

    function showFormAgain() {
        const form = document.getElementById('web3ContactForm');
        const thankYouCard = document.getElementById('thankYouCard');
        const result = document.getElementById('formResult');
        if (form) form.style.display = 'block';
        if (thankYouCard) thankYouCard.style.display = 'none';
        if (result) result.style.display = 'none';
    }

    // Custom Course Dropdown handler
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownWrap = document.getElementById('customCourseDropdown');
        const dropdownBtn = document.getElementById('courseDropdownBtn');
        const dropdownMenu = document.getElementById('courseDropdownMenu');
        const hiddenInput = document.getElementById('contactCourse');
        const selectedText = document.getElementById('selectedCourseText');

        if (!dropdownWrap || !dropdownBtn || !dropdownMenu) return;

        dropdownBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const isOpen = dropdownWrap.classList.contains('open');
            if (isOpen) {
                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            } else {
                dropdownWrap.classList.add('open');
                dropdownBtn.setAttribute('aria-expanded', 'true');
            }
        });

        const items = dropdownMenu.querySelectorAll('.custom-dropdown-item');
        items.forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.stopPropagation();
                const val = this.getAttribute('data-value');
                if (hiddenInput) hiddenInput.value = val;
                if (selectedText) selectedText.textContent = val;

                items.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            });
        });

        document.addEventListener('click', function (e) {
            if (!dropdownWrap.contains(e.target)) {
                dropdownWrap.classList.remove('open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            }
        });
    });
</script>

@endsection
