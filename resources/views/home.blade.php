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
            <a href="{{ route('browse') }}" class="doraemon-sketch-text">EXPLORE COURSES</a>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="course-section">

    <h2 class="animora-branding">OUR COURCES</h2>
    <div class="course-card-grid">
        <!-- Card 1 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-professional-program.jpg') }}" alt="Professional Program - 2D, 3D, VFX"></div>
            <div class="course-card-title">PROFESSIONAL PROGRAM</div>
            <div class="course-card-desc">3-YEAR, FULL‑TIME PROGRAM – 2D, 3D, VFX. Master production pipelines in our 3‑year program.</div>
        </div>
        <!-- Card 2 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-3d-animation.jpg') }}" alt="2-Year Full-Time Program - 3D Animation"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – 3D Animation</div>
            <div class="course-card-desc">Full‑time 3D animation program covering diverse aspects of the 3D generalist skill set.</div>
        </div>
        <!-- Card 3 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-game-art-design.jpg') }}" alt="2-Year Full-Time Program - Game Art Design"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – Game Art Design</div>
            <div class="course-card-desc">From stunning visuals to seamless gameplay, we bring your creative vision to life.</div>
        </div>
        <!-- Card 4 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-vfx.jpg') }}" alt="2-Year Full-Time Program - VFX"></div>
            <div class="course-card-title">2‑YEAR, FULL‑TIME PROGRAM – VFX</div>
            <div class="course-card-desc">Transform narratives into unforgettable cinematic experiences with VFX.</div>
        </div>
        <!-- Card 5 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-individual-courses.jpg') }}" alt="1-Year Full-Time Program - Individual Courses"></div>
            <div class="course-card-title">1‑YEAR, FULL‑TIME PROGRAM – Individual Courses</div>
            <div class="course-card-desc">Unlock your creative potential with comprehensive media production skills.</div>
        </div>
        <!-- Card 6 -->
        <div class="course-card">
            <div class="course-card-img"><img src="{{ asset('images/course-short-term-courses.jpg') }}" alt="10-Week On-Campus Program - Short Term Courses"></div>
            <div class="course-card-title">10‑WEEK, ON‑CAMUS PROGRAM – Short Term Courses</div>
            <div class="course-card-desc">Standalone courses in film, game, and visual effects production.</div>
        </div>

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

<!-- Contact Us Section with Web3Forms -->
<section class="contact-section" id="contact">
    <div class="contact-container">
        <h2 class="animora-branding contact-heading">CONTACT US</h2>
        <p class="contact-subheading">Have questions about our programs, campus admissions, or student assets? Send us a message.</p>

        <div class="contact-grid">
            <!-- Left: Contact Form Card with Inline Thank You Message -->
            <div class="contact-form-card">
                <!-- Inline Result Alert (For errors/info) -->
                <div id="formResult" class="form-result-alert" style="display: none;"></div>

                <!-- Inline Thank You Card (Shown on success, NO redirect, NO green) -->
                <div id="thankYouCard" class="thank-you-card" style="display: none;">
                    <div class="thank-you-avatar">
                        <span class="thank-you-emoji">✨</span>
                    </div>
                    <h3 class="thank-you-title">Thank You!</h3>
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
                        Send Another Message
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
                            <label for="contactName">Full Name *</label>
                            <input type="text" id="contactName" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email Address *</label>
                            <input type="email" id="contactEmail" name="email" placeholder="name@example.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="contactPhone">Phone Number</label>
                            <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210">
                        </div>
                        <div class="form-group">
                            <label for="contactCourse">Interested Program</label>
                            <select id="contactCourse" name="course_interest" class="form-select">
                                <option value="Professional Program">3-Year Professional Program (2D, 3D, VFX)</option>
                                <option value="3D Animation">2-Year Full-Time – 3D Animation</option>
                                <option value="Game Art Design">2-Year Full-Time – Game Art Design</option>
                                <option value="VFX">2-Year Full-Time – VFX</option>
                                <option value="Individual Courses">1-Year Full-Time – Individual Courses</option>
                                <option value="Short Term Courses">10-Week On-Campus Short Term</option>
                                <option value="General Inquiry">General Campus &amp; Admission Inquiry</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contactMessage">Your Message *</label>
                        <textarea id="contactMessage" name="message" rows="4" placeholder="Tell us about your learning goals or questions..." required></textarea>
                    </div>

                    <button type="submit" id="contactSubmitBtn" class="btn-contact-submit">
                        <span>Send Message</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </form>
            </div>

            <!-- Right: Campus Official Details -->
            <div class="contact-info-card">
                <div class="info-item">
                    <div class="info-icon">🏛️</div>
                    <div class="info-text">
                        <h5>College / Campus</h5>
                        <p><strong>S. N. Arts, D. J. Malpani Commerce and B. N. Sarda Science College</strong></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h5>Address</h5>
                        <p>Ghulewadi, Pune Nashik Highway (NH – 50), Sangamner, District Ahmednagar 422 605, Maharashtra – India</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h5>Call Us On</h5>
                        <p>
                            <a href="tel:02425223181">(02425) 223181</a><br>
                            <a href="tel:02425222869">(02425) 222869</a>
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">✉️</div>
                    <div class="info-text">
                        <h5>Direct Email</h5>
                        <p><a href="mailto:najimashaikh267@gmail.com">najimashaikh267@gmail.com</a></p>
                    </div>
                </div>

                <div class="info-badge-box">
                    <span class="info-dot"></span>
                    <span>Admissions &amp; Student Inquiries Active</span>
                </div>
            </div>
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

        try {
            const response = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            });
            const resJson = await response.json();

            if (response.status === 200 || resJson.success) {
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
            result.innerHTML = 'Network connection error. Please call us directly at (02425) 223181.';
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
</script>

@endsection
